<?php
    
namespace Modules;
use Modules\Route;

class Router{

    private $url;
    static $routes = ['get'=>[], 'post'=>[]];
    
    public function __construct(){
        $this->url = trim(strtolower($_SERVER['REQUEST_URI']), '/');
        $this->matches();
    }
    
    public function matches(){
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        if($this->validMethod($method)){
            $match = false;
            foreach (Router::$routes[$method] as $route) {
                if($route->match($this->url)){
                    $match = true;
                    break;
                }
            }

            if(!$match){
                throw new \Exception("Ruta $this->url no contrada");
            }
        }  
    }

    public static function route($method, $path, $controller){

        $method = strtolower($method);
        if(Router::validMethod($method)){
            Router::$routes[$method][] = new Route(strtolower($path), $controller);
        }
        
    }

    public function validMethod($method){
        if(array_key_exists($method, Router::$routes)){
            return true;
        }
        throw new \Exception("Metodo $method no soportado");
    }
}
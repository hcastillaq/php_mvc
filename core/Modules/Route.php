<?php
namespace Modules;
use Controllers;

class Route{
    
    private $path;
    private $controller;

    public function __construct($path, $controller){
        $this->path = trim($path, '/');
        $this->controller = explode(':', $controller);
    }

    public function match($url){
        $path = preg_replace('!@\w+!', '([^/]+)', $this->path);
        preg_match("!^$path$!i", $url, $m);
        if(!empty($m)){
            array_shift($m);
            $this->call($m);
            return true;
        }
    }

    public function call($params){
        $path = CONTROLLERS.$this->controller[0].'.php';

        
        if($this->exist($path)){

            $c = '\\Controllers\\'.$this->controller[0];
            $method = $this->controller[1];
            
            $rm = new \ReflectionMethod($c, $method);
            $n = $rm->getNumberOfRequiredParameters();
            
            if(count($params) == $n){
                $c = new $c();
                call_user_func_array(array($c, $method), $params);
            }else{
                throw new \Exception("$c:$method() Espera al menos "
                    .count($params)." parametros");
            }
            
        }
    }

    public function exist($file){
        if(file_exists($file)){
            return true;
        }
        throw new \Exception("Controlador $file no encontado");
    }
 
}
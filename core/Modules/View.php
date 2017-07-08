<?php

namespace Modules;

class View{
    private $ext = '.php';

    public static function render($file, $array = null){
        
        $v = new View();
        $file = VIEWS.$file.$v->ext;

        if($v->exist($file)){
            if(!is_null($array)){
                extract($array);
            }
            ob_start();
            include($file);
            echo ob_get_clean();
        }
    }

    public function exist($file){
        if(file_exists($file)){
            return true;
        }
        throw new \Exception("$file no encontrado");
    }
}
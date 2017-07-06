<?php

spl_autoload_register(function($namespace){
   
    $namespace = str_replace('\\', '/', $namespace);
    $path = PATH.$namespace.'.php';
    if(file_exists($path)){
        require $path;
    }else{
        throw new \Exception('Archivo '.$path.' no encontrado');
    }
});
<?php
namespace Modules;

class Controller{
    
    private $modelo;

    public function __construct(){
    }

    public function json($array){
        header('Content-type: application/json');
        echo json_encode($array);
    }
}
<?php
namespace Modules;

class Controller{
    public function __construct(){
    }

    public function json($array){
        header('Content-type: application/json');
        echo json_encode($array);
    }
}
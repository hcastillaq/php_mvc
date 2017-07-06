<?php

namespace Controllers;
use Modules\Controller;

class HomeController extends Controller{

    public function index(){
        echo '..soy el index';
    }

    public function saluda($nombre, $apellido){
        echo $this->json(['hola'=>'hernan']);
    }
}
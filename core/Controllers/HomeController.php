<?php

namespace Controllers;
use Modules\Controller;
use Models\Usuario;

class HomeController extends Controller{
    
    
    public function index(){
        new Usuario();
        echo '..soy el index';
    }

    public function saluda($nombre, $apellido){
        echo $this->json(['hola'=>'hernan']);
    }
}
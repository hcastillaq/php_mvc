<?php

namespace Controllers;
use Modules\Controller;
use Models\Usuario;

class HomeController extends Controller{
    

    public function index(){
        $u = new Usuario();
        var_dump($u->select("*"));
    }

    public function saluda($nombre, $apellido){
        echo $this->json(['hola'=>'hernan']);
    }
}
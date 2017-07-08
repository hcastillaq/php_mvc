<?php

namespace Controllers;

use Modules\Controller;
use Models\Usuario;
use Modules\View;

class HomeController extends Controller{
    

    public function index(){
        $u = new Usuario();
        View::render('prueba',['u'=>$u->select("*")]);
        
    }

    public function saluda($nombre, $apellido){
        echo $this->json(['hola'=>'hernan']);
    }
}
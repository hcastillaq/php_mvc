<?php

namespace Controllers;

use Modules\Controller;
use Models\Usuario;
use Modules\View;

class HomeController extends Controller{
    

    public function index(){
        View::render('home',['message'=>'Le vent se lève, il faut tenter de vivre.']);
    }

    public function saluda($nombre, $apellido){
        echo $this->json(['hola'=>'hernan']);
    }
}
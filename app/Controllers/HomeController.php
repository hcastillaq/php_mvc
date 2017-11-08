<?php
namespace Controllers;

use Models\Usuario as usr;
use Modules\View;
use Modules\Helpers;

class HomeController{
	
	public function index(){
		View::render('home',['message'=>'Le vent se lève, il faut tenter de vivre.']);
	}

	public function crear($nombre, $apellido){
		$u = new usr();
		var_dump ($u->insert([
			'nombre' => $nombre,
			'apellido' => $apellido
		]));
	}
}
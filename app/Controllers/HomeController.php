<?php
namespace Controllers;

use Models\Usuario as usr;
use Modules\View;
use Modules\Helpers\Redirect;

class HomeController{
	
	public function index(){
		View::render('auth/login');
	}

	public function crear($nombre, $apellido){
		$u = new usr();
		var_dump ($u->insert([
			'nombre' => $nombre,
			'apellido' => $apellido
		]));
	}
}
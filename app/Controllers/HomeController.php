<?php
namespace Controllers;

use Models\Usuario as usr;
use Modules\View;
use Modules\Helpers\Redirect;

class HomeController{
	public function index(){
		View::render('home', ['message' => 'Le vent se lève!... il faut tenter de vivre!']);
	}
}
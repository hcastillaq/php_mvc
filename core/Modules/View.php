<?php

namespace Modules;


$functions = array(
	'resource' => function($file) 
	{
		$path = VIEWS.$file;
		if(file_exists($path))
		{
			require($path);
		}else{
			throw new \Exception('Archino no encontrado '.$path.$file);
		}
	}
);

class View{
	
	private $ext = '.php';
	
	public static function render($file, $array = null){
		$v = new View();
		$file = VIEWS.$file.$v->ext;

		if($v->exist($file)){

			if(!is_null($array)){
				extract($array);
			}
			extract($GLOBALS['functions']);
			ob_start();
			include($file);
			echo ob_get_clean();
		}
	}

	public function exist($file){
		if(file_exists($file)){
			return true;
		}
		throw new \Exception("$file no encontrado");
	}

	static function hola(){
		echo '..';
	}
}
<?php
	namespace Modules\Helpers;

	class Redirect
	{
		public function __construct()
		{
			throw new \Exception("Clase Redirect no es instanciable");
		}
		public static function route($route)
		{
			header("location: $route");
		}
	}

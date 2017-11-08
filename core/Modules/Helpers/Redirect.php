<?php
	namespace Modules\Helpers;

	class Redirect
	{
		public static function route($route)
		{
			header("location: $route");
		}
	}

<?php

spl_autoload_register(function($namespace){
	$namespace = str_replace('\\', '/', $namespace);
	$core = CORE.$namespace.'.php';
	$app = APP.$namespace.'.php';
	if(file_exists($core))
	{
		require $core;
	}else
	{
		if(file_exists($app))
		{
			require $app;
		}
	}
});
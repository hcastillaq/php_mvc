<?php

require CORE.'Modules/View.php';

use Modules\View;

class Handler{
	public function __construct(){
		set_exception_handler(function($e){
			View::render('errors', ['error'=>$e]);
		});
	}
}

new Handler();
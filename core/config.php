<?php

/* PATHS */
define('CORE', '../core/');
define('APP', realpath(dirname(__FILE__)."/../app/")."/");
define('PUBLIC', realpath(dirname(__FILE__)."/../public/"));
define('VIEWS', APP.'Views/');
define('CONTROLLERS', APP.'Controllers/');

/* IMPORTS */
require CORE.'Handler.php';
require CORE.'Autoload.php';
require APP.'Routes/Rutas.php';
require CORE.'database.php';

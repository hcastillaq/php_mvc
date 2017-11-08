<?php

/* PATHS */
define('CORE', '../core/');
define('APP', '../app/');

define('VIEWS', APP.'Views/');
define('CONTROLLERS', APP.'Controllers/');

/* IMPORTS */
require CORE.'Handler.php';
require CORE.'Autoload.php';

/* RUTAS */
require APP.'Routes/Rutas.php';

/* DATABASE */
require CORE.'database.php';
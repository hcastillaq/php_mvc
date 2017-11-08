<?php

use Modules\Router;

Router::route('GET', '/','HomeController:index');
Router::route('GET', '/crear/@nombre/@apellido','HomeController:crear');

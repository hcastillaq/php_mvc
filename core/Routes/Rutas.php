<?php
use Modules\Router;

Router::route('GET', '/','HomeController:index');
Router::route('GET', '/saluda/@a/@q','HomeController:saluda');

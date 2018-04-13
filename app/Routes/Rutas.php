<?php
use Modules\Router;

/** 
 * Este archivo contiene todas las rutas.
 * Las rutas solo aceptan los metodos post y get, en cada ruta 
 * se deben definir el metodo, el path y el controlador 
 * ejemplo:
 * Router::route('GET', '/Saludo', 'SaludoController:Saludo');
 * En en el path se pueden especificar que parametros puede recibir la ruta
 * ejemplo:
 * Router::route('GET', '/Saludo/@persona', 'SaludoController:SaludoPersona');
 */


Router::route('GET', '/','HomeController:index');
Router::route('GET', '/saludo', 'SaludoController:Saludo');
Router::route('GET', '/saludo/@persona', 'SaludoController:SaludoPersona');
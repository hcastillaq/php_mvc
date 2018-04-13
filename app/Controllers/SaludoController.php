<?php
  namespace Controllers;

  use Modules\View;
  
  class SaludoController{
    
    public function Saludo(){
      echo 'Hola Mundo';
    }

    public function SaludoPersona($persona){
		  View::render('saludo', ['persona' => $persona]);
    }
   
  }
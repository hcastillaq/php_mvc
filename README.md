# Simple mvc en PHP

- Estructura basada en el framework laravel

- Conexion a las bases de datos por medio del ORM MEDOO
  - https://medoo.in/

## Definiendo Rutas
  
  Las rutas solo aceptan los metodos post y get, en cada ruta 
  se deben definir el metodo, el path y el controlador 
  - ```Router::route('GET', '/Saludo', 'SaludoController:Saludo'); ```

  En en el path se pueden especificar que parametros puede recibir la ruta 
  - ```Router::route('GET', '/Saludo/@persona', 'SaludoController:SaludoPersona');```

## Creando un Controlador
  Todo controlador debe ser creado en la carpeta Controllers.\
  **app\Controllers\saludoController.php**
  ```
  <?php
    namespace Controllers;

    class SaludoController{
      
      public function Saludo(){
        echo 'Hola Mundo';
      }

      public function SaludoPersona($persona){
        echo "Hola $persona"; 
      }
     
    }
  ```
## Creando una vista
Todas las vistas deben ser creadas dentro  de la carpeta views.\
**app\Views\saludo.php**
```
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test View</title>
  </head>
  <body>
    <b> Hola! <?php echo $persona?> </b>
  </body>
  </html>
```
## Mostrando una vista
  Para mostrar la vista lo hacemos mediante el controlador, nos apoyamos en 
  la clase View y su metodo render.

  ```
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
  ```
  El metodo render recibe como primer parametro el path de la vista (obligatorio), y 
  como parametro opcianal un arreglo.

  ## Configurando conexion con la base de datos
  La configuracion para la base de datos se encuentra en el archivo
  **core\database.php**
  ```
    $DB_CONFIG = [
      'database_type' => 'mysql',
      'database_name' => 'nombre_de_la_db',
      'server' => 'localhost',
      'username' => 'username',
      'password' => 'password',
    ];
  ```
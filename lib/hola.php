<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php // Autor: Rosa Ortega <roh@uco.es> 
// El nombre por defecto es Mundo
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola, {$nombre}\n" ?>
 </body>
</html>

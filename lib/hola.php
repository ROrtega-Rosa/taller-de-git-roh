<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php // Autor: Rosa Ortega <roh@uco.es> 
// El nombre por defecto es Mundo
require('HolaMundo.php');
print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);
?>
  </body>
</html>

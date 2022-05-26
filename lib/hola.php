<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php // Autor: Rosa Ortega <roh@uco.es> 
// El nombre por defecto es Mundo
print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
@print "Hola, {$nombre}\n" ?>
 </body>
</html>

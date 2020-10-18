<html> 
<body>
<?php
/* Crear otro programa que use estos datos  y elija un país al azar indicando sus datos 
   y el  nombre de sus ciudades y un enlace 
   generado a google map: ‘https://www.google.es/maps/place/’.$paiselegido */

include_once 'infopaises.php';

$paiselegidos = array_rand($paises,2);

foreach ($paiselegidos as $pais) {
echo "País : ".$pais." , con ".number_format($paises[$pais]['Poblacion'], 0, ',', '.'). " habitantes <br/>";
echo "Lista de Ciudades: ";

foreach($ciudades[$pais] as $ciudad) {
echo $ciudad." ";
}
echo "<br/>Enlace a google maps: ";
?>
<a href="https://www.google.es/maps/place/<?php echo $pais?>">Maps</a> <br>
<?php
}
?>	 
</body>
</html>
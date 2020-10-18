<html>
<?php
/* Incluir el archivo infopaises.php en un programa php que me muestre el país 
   que tiene mas población y el nombre de sus ciudades. El programa debe buscar en las tablas. */

include_once 'infopaises.php';

$max = 0;
$pais_max = "";
foreach($paises as $pais => $info) {
    
if($info['Poblacion']> $max) {
$pais_max = $pais;
$max = $info['Poblacion'];
    }
}
echo "País con más población: ".$pais_max." , con ".number_format($max, 0, ',', '.'). " habitantes<br/>";

echo "<table border=1><tr><td> Ciudades: </td>";
$listaciudades = $ciudades[$pais_max];

foreach($listaciudades as $ciudad) {
echo "<td> $ciudad </td>";
}
echo "</tr></table>";
?>
</body>
</html>
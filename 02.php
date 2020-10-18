<html>
<body>
<?php
/* Crear un array que almacene 5 cadenas con el nombre de periódicos y 
   sus enlaces para acceder. El array será asociativo con el nombre del 
   periódico como clave y su URL como valor.
   Mostrar un lista html con cinco hiperenlaces a la URL de los diarios. */

$medios =  [ "El Pais" => "https://www.elpais.com",
    "El Mundo" => "https://www.elmundo.es",
    "Marca" => "https://www.marca.com",
    "Antena3" => "https://www.antena3.com",
    "La Razón" => "https://www.larazon.es"
    
];

echo "<h1>Lista de Medios: </h1> <ul>";
foreach ($medios as $clave => $valor){
    echo "<li> <a href=\"$valor\">$clave</a> </li>";
}
echo "</ul>";
?>
</body>
</html>
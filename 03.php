<html>
<body>
<?php
/* Elegir al azar uno de los cinco medios y mostrar el enlace seleccionado.
El Medio recomendado es: El MundoToday   */

$medios =  [ "El Pais" => "https://www.elpais.com",
    "El Mundo" => "https://www.elmundo.es",
    "Marca" => "https://www.marca.com",
    "Antena3" => "https://www.antena3.com",
    "La Razón" => "https://www.larazon.es"
    
];

$clavemedio = array_rand($medios);
echo "<p>El Medio recomendado es: <a href=\"". $medios[$clavemedio]. "\">$clavemedio</a> </p>";
?>
</body>
</html>

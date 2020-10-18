<style type="text/css">
table, th, td { border: 1px solid black; border-collapse: collapse; }
</style>
</head>
<?php
/* Realiza un programa que utilice el siguiente array con las temperaturas medias que ha 
   hecho en cada mes de un determinado año y otro array con el nombre de los meses del año. 
   Crea un nuevo array asociativo con el nombre del mes como clave y la temperatura como valor. 
   Muestra a continuación un diagrama de barras horizontales con esos datos. 
   Las barras del diagrama se pueden dibujar a base de la concatenación de una imagen. */

$temperaturas =  [ 6, 10, 12, 14,16 ,20 ,25 , 30, 18, 15, 14, 8];
$meses = ['enero','febrero', 'marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
$mestemperaturas =[];

for ($i = 0; $i < count($meses); $i++) {
    $mestemperaturas[$meses[$i]] = $temperaturas[$i];
}
?>

<body>
<h1> Tabla de temperaturas </h1>

<table style='border: 1px solid black; border-collapse: collapse;'>

<?php for ($i = 0; $i < count($meses); $i++) { ?>
<tr> <td> <?php echo $meses[$i]; ?> </td> <td>
<?php 
for ($j = 0; $j < $mestemperaturas[$meses[$i]]; $j++) {
echo "<img src ='img/cuadro.png' style = width:2px;>";
}
echo  "  ".$mestemperaturas[$meses[$i]]. " ºC </td> </tr>";
} ?>

</table>
</body>
</html>
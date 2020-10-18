<?php
/* Crear una carpeta que se llame img y copiar en ella 5 ficheros de imágenes que 
   muestre el logo de un deporte. Crear una array asociativo que almacene como clave 
   el nombre del deporte y como valor la dirección de la imagen.
   Mostrar una tabla HTML. */

$deportes = array(
    'Baloncesto' => "img/baloncesto.jpeg",
    'Fórmula 1' => "img/f1.jpeg",
    'Fútbol' => "img/futbol.jpeg",
    'Tenis' => "img/tenis.jpeg",
    'Volley' => "img/volley.jpeg",
);
?>
<html>
<head>
<style type="text/css">
table,th,td { border:1px solid black; border-collapse:collapse; }
img { display:block; margin-left:auto; margin-right:auto; heigth:80; width:80; }
</style>
</head>

<table>

<tr>
<th>Deporte</th>
<th>logo</th>
</tr>
<?php foreach($deportes as $c => $v){ ?>
<tr>
<td> <?= $c ?> </td>
<td> <img src="<?= $v ?>" alt="<?= $c ?>"> </td>
</tr>
<?php } ?>
</table>
</html>
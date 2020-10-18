<html>
<style>
table { border-collapse:collapse; }
</style>
<?php
/* Realizar un programa en PHP que muestre un posible resultado de la bonoloto:
   Se presentarán 6 números obtenidos aleatoriamente en el rango de 1 a 49 (ambos inclusives) 
   Los 5 primeros forman la jugada ganadora y deberán presentar ordenados de menor a mayor en 
   una tabla html; el sexto es el número complementario.  Por supuesto los números no pueden 
   repetirse. */

$valores = [];
for ($i = 1; $i <= 49; $i ++) {
    $valores[] = $i;
}

$indices = array_rand($valores, 6);

$vbonoloto = [];
foreach ($indices as $i ) {
    $vbonoloto[] = $valores[$i];
}

$icomplementario = random_int(0, 5);
$complementario = $vbonoloto[$icomplementario];
unset($vbonoloto[$icomplementario]);
?>

<body>
<b>Sorteo del Bonoloto</b>

<table border=1>

<tr>
<?php foreach ($vbonoloto as $num) { ?>
<td> <?php echo $num ?> </td>
<?php } ?>
<td> <?php echo "Complementario $complementario " ?> </td>
</tr>

</table>

</body>
</html>
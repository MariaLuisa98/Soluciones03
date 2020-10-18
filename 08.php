<html>
<style type="text/css">
table, th, td { border: 1px solid black; border-collapse: collapse; }
td { color:blue; }
</style>

<?php
/* Generar una tabla HTML a partir del contenido de los anteriores datos. */

include_once 'infopaises.php';
?>
<body>
<h1>Tabla de paises </h1>
<table>

<tr>
<th>País</th>
<th>Capital</th>
<th>Población</th>
<th>Ciudades</th>
</tr>
<?php foreach ($paises as $pais => $infopais) { ?>

<tr>
<td> <?php echo $pais ?> </td>
<td> <?php echo $infopais['Capital'] ?> </td>
<td> <?php echo $infopais['Poblacion'] ?> </td>
<td>
<?php
foreach ($ciudades[$pais] as $ciudad) {
echo $ciudad . ", ";
}
?>
</td>
</tr>

<?php } ?>
</table> 

</body>
</html>
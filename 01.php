<?php
/* Rellenar un array con 20 n�meros aleatorios entre 1 y 10 y mostrar el contenido del array 
   mediante una tabla de una fila en HMTL. Mostrar a continuaci�n el valor m�ximo, 
   el m�nimo y el  valor que mas veces se repite. (Nota definir funciones para cada caso) */

function valorMaximo ($tabla) {
    $valor = $tabla[0];
    for ($i = 0; $i < count($tabla); $i++) {
        if ($tabla[$i] > $valor) {
            $valor = $tabla[$i];
        }
    }
    return $valor;
}

function valorMinimo ($tabla) {
    $valor = $tabla[0];
    for ($i = 0; $i < count($tabla); $i++) {
        if ($tabla[$i] < $valor) {
            $valor = $tabla[$i];
        }
    }
    return $valor;
}

function valorRepetido ($tabla) {
    $maxrepes = 0;
    $valor =0;
    for ($i = 0; $i < count($tabla); $i++) {
        $veces = 0;
        for ($j = 0; $j < count($tabla); $j++) {
            if ($tabla[$i] == $tabla[$j]) {
                $veces++;
            }
        }
        if ($veces > $maxrepes) {
            $valor = $tabla[$i];
        }
    }
    return $valor;
}
?>

<html>
<body>
<?php  

    define ('TAMA�O',20);
    $numeros = [];
   
    for ($i = 0; $i < TAMA�O; $i++) {
        $numeros[] = rand (1,10);
    }
    echo "<table style='border: 1px solid black; border-collapse:collapse';><tr>";
    for ($i = 0; $i<count($numeros);$i++) {
        echo "<td style='border: 1px solid black; padding: 5px';>",$numeros[$i]."</td>";
    }
    echo "</tr></table>";
    $maximo = max($numeros);
    $minimo = valorMinimo($numeros);
    $repetido = valorRepetido($numeros);
    echo "<br> M�ximo = $maximo <br> M�nimo = $minimo <br> Repetido = $repetido "  
?>
</body>
</html>
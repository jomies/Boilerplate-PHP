<?php

function eliminarValor($array, $valor) {
    // Utiliza la función array_search para encontrar la posición del valor en el array
    $posicion = array_search($valor, $array);
    // Si se encuentra el valor, elimínalo usando unset
    if ($posicion !== false) {
        unset($array[$posicion]);
    }
    // Reindexa el array para que los índices sean consecutivos
    return array_values($array);
}

// Ejemplo de uso
$miArray = array(1, 2, 3, 4, 5);
$valorAEliminar = 3;

$nuevoArray = eliminarValor($miArray, $valorAEliminar);

// Imprime el nuevo array
print_r($nuevoArray);

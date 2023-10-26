<?php

function eliminarDuplicados($array)
{
    // Utiliza la función array_unique para eliminar duplicados
    $arraySinDuplicados = array_unique($array);
    // Reindexa el array para que los índices sean consecutivos
    return array_values($arraySinDuplicados);
}

// Ejemplo de uso
$arrayOriginal = array(1, 2, 2, 3, 4, 4, 5);
$arraySinDuplicados = eliminarDuplicados($arrayOriginal);

// Imprime el nuevo array sin duplicados
print_r($arraySinDuplicados);

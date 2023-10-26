<?php

function cadenaMasLarga($array) {
    if (empty($array)) {
        return "El array está vacío.";
    }

    $cadenaMasLarga = $array[0];

    foreach ($array as $cadena) {
        if (strlen($cadena) > strlen($cadenaMasLarga)) {
            $cadenaMasLarga = $cadena;
        }
    }

    return $cadenaMasLarga;
}

// Ejemplo de uso
$arrayDeCadenas = array("Manzana", "Banana", "Fresa", "Pera", "Uva");
$resultado = cadenaMasLarga($arrayDeCadenas);
echo "La cadena más larga es: " . $resultado;


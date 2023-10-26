<?php

function suma($num1, $num2) {
    return $num1 + $num2;
}

function resta($num1, $num2) {
    return $num1 - $num2;
}

function multiplicacion($num1, $num2) {
    return $num1 * $num2;
}

function division($num1, $num2) {
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "No es posible dividir por cero.";
    }
}

$num1 = 10;
$num2 = 5;

$resultadoSuma = suma($num1, $num2);
$resultadoResta = resta($num1, $num2);
$resultadoMultiplicacion = multiplicacion($num1, $num2);
$resultadoDivision = division($num1, $num2);

echo "Suma: " . $resultadoSuma . "<br>";
echo "Resta: " . $resultadoResta . "<br>";
echo "Multiplicación: " . $resultadoMultiplicacion . "<br>";
echo "División: " . $resultadoDivision . "<br>";




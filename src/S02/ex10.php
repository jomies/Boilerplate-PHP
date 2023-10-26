<?php

function contarDigitosYSumar($valor) {
    // Comprueba si el valor es un número
    if (!is_numeric($valor)) {
        return "No es un número válido.";
    }

    // Convierte el valor a una cadena para contar los dígitos
    $valorComoCadena = strval($valor);

    // Calcula la suma de los dígitos y cuenta los dígitos
    $sumaDigitos = 0;
    $numDigitos = strlen($valorComoCadena);

    for ($i = 0; $i < $numDigitos; $i++) {
        $digito = intval($valorComoCadena[$i]);
        $sumaDigitos += $digito;
    }

    return "Número de dígitos: $numDigitos, Suma de dígitos: $sumaDigitos";
}

// Ejemplo de uso
$numero = 12345; // Cambia el valor según tus necesidades
$resultado = contarDigitosYSumar($numero);
echo $resultado;

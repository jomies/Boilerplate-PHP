<?php

function sumaYProductoCifras($numero) {
    if ($numero < 0) {
        echo "El número debe ser positivo.";
        return;
    }

    // Calcula la suma y el producto de las cifras
    $sumaCifras = 0;
    $productoCifras = 1;
    $numeroOriginal = $numero;

    while ($numero > 0) {
        $digito = $numero % 10;
        $sumaCifras += $digito;
        $productoCifras *= $digito;
        $numero = (int)($numero / 10);
    }

    echo "Número original: $numeroOriginal<br>";
    echo "Suma de cifras: $sumaCifras<br>";
    echo "Producto de cifras: $productoCifras<br>";

    // Verifica si es capicúa
    if ($numeroOriginal == strrev($numeroOriginal)) {
        echo "Es capicúa.";
    } else {
        echo "No es capicúa.";
    }
}

$numero = 12324; // Cambia el número según tus necesidades
sumaYProductoCifras($numero);

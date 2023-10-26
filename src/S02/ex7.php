<?php

function fibonacci($n) {
    if ($n <= 0) {
        echo "El valor de n debe ser un número entero positivo.";
        return;
    }

    $contador = 0;
    $primerTermino = 1;
    $segundoTermino = 1;

    do {
        if ($contador == 0 || $contador == 1) {
            echo $primerTermino;
        } else {
            $siguienteTermino = $primerTermino + $segundoTermino;
            echo ", " . $siguienteTermino;
            $primerTermino = $segundoTermino;
            $segundoTermino = $siguienteTermino;
        }

        $contador++;
    } while ($contador < $n);
}

$n = 6; // Cambia el valor de n según tus necesidades
fibonacci($n);

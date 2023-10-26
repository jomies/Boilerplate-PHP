<?php

$colors = array("Azul", "Rojo", "Lila", "Amarillo", "Negro");

// Recorre el array de colores e imprime cada color separado por comas
for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i];
    if ($i < count($colors) - 1) {
        echo ", ";
    }
}

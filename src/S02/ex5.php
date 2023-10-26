<?php

// Crear un array de dos dimensiones
$array2d = array(
    array("Tokyo", "Japan", "Asia"),
    array("Mexico City", "Mexico", "North America"),
    array("New York City", "USA", "North America"),
    array("Mumbai", "India", "Asia"),
    array("Seoul", "Korea", "Asia"),
    array("Shanghai", "China", "Asia"),
    array("Chicago", "USA", "North America"),
    array("Buenos Aires", "Argentina", "South America"),
    array("Cairo", "Egypt", "Africa"),
    array("London", "UK", "Europe")
);

$vecesUSA = 0;
$vecesNorthAmerica = 0;

// Recorre el array de dos dimensiones e imprime resultados
foreach ($array2d as $dato) {
    if ($dato[1] === "USA") {
        $vecesUSA++;
    }
    if ($dato[2] === "North America") {
        $vecesNorthAmerica++;
    }
}

echo "Veces que aparece 'USA': " . $vecesUSA . "<br>";
echo "Veces que aparece 'North America': " . $vecesNorthAmerica;


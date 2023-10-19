<?php
// Función para calcular la suma de elementos en un array
function calculaSuma($array) {
    $elementos = explode('-', $array);
    $suma = array_sum($elementos);
    return $suma;
}

// Función para ordenar un array alfabéticamente
function ordenaArray($array) {
    $elementos = explode('-', $array);
    sort($elementos);
    return $elementos;
}

// Obtener los parámetros de la URL
$ingresos = $_GET['ingresos'];
$ventas = $_GET['ventas'];

// Calcular la suma de los ingresos
$sumaIngresos = calculaSuma($ingresos);

// Ordenar el array de ventas alfabéticamente
$ventasOrdenadas = ordenaArray($ventas);

// Imprimir el informe
echo '<h1 style="font-weight: bold; font-size: 20px;">Informe Mensual</h1>';
echo 'Dónde [1] es el resultado de la función calculaSuma de los ingresos: ' . $sumaIngresos . '<br>';
echo 'Dónde [2] es el resultado de la función ordenaArray de las ventas: ' . implode(', ', $ventasOrdenadas);
?>

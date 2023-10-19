<?php
$notas1aEvaluacion = array();

// Llenar el array con 10 números aleatorios
for ($i = 0; $i < 10; $i++) {
    $notas1aEvaluacion = rand(1, 100); // Genera un número aleatorio entre 1 y 100, puedes ajustar el rango según tus necesidades.
    $nums[] = $notas1aEvaluacion;
}

$minValue = min($notas1aEvaluacion); // Valor mínimo
$maxValue = max($notas1aEvaluacion); // Valor máximo
$suma = array_sum($array); // Suma de los valores en el array
$promedio = $suma / count($array); // Promedio

echo "Valor mínimo: $minValue<br>";
echo "Valor máximo: $maxValue<br>";
echo "Promedio: $promedio";
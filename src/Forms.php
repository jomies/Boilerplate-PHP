<?php
// Crea un array con 10 valores numéricos aleatorios entre 0 y 10
$notas1aEvaluacion = array();

for ($i = 0; $i < 10; $i++) {
    $notaAleatoria = rand(0, 10);
    $notas1aEvaluacion[] = $notaAleatoria;
}

// Obtén el valor del parámetro "accion" desde la URL
$accion = isset($_GET['accion']) ? $_GET['accion'] : ''; //action

// Realiza el cálculo correspondiente según el valor de "accion"
if ($accion === 'promedio') {
    $promedio = array_sum($notas1aEvaluacion) / count($notas1aEvaluacion);
    echo "El promedio de las notas es: $promedio";
} elseif ($accion === 'minimo') {
    $notaMinima = min($notas1aEvaluacion);
    echo "La nota mínima es: $notaMinima";
} elseif ($accion === 'maximo') {
    $notaMaxima = max($notas1aEvaluacion);
    echo "La nota máxima es: $notaMaxima";
} else {
    echo "Acción no válida. Debes proporcionar 'accion=promedio', 'accion=minimo' o 'accion=maximo' en la URL.";
}
?>

<?php

require_once('Rectangulo.php');

$rectangulo1 = new Rectangulo(5, 10);
$rectangulo2 = new Rectangulo(3, 7);
$rectangulo3 = new Rectangulo(8, 12);

// Prueba de los métodos
echo "Rectángulo 1: <br>";
echo "Área: " . $rectangulo1->calcArea() . "<br>";
echo "Perímetro: " . $rectangulo1->calcPerimetro() . "<br>";
echo "Diagonal: " . $rectangulo1->calcDiagonal() . "<br><br>";

echo "Rectángulo 2:<br>";
echo "Área: " . $rectangulo2->calcArea() . "<br>";
echo "Perímetro: " . $rectangulo2->calcPerimetro() . "<br>";
echo "Diagonal: " . $rectangulo2->calcDiagonal() . "<br><br>";

echo "Rectángulo 3:<br>";
echo "Área: " . $rectangulo3->calcArea() . "<br>";
echo "Perímetro: " . $rectangulo3->calcPerimetro() . "<br>";
echo "Diagonal: " . $rectangulo3->calcDiagonal() . "<br>";
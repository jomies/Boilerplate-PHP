<?php

namespace Ex5;

require_once('Cuadrado.php');
require_once('DosDimensiones.php');
require_once('Triangulo.php');

$triangulo = new Triangulo(5, 4, "Triángulo 1", "Isósceles");
echo "Área del triángulo: " . $triangulo->calcArea() . "<br>";
echo $triangulo->mostrarEstilo() . "<br>";

$cuadrado = new Cuadrado(6, 6, "Cuadrado 1");
echo "Área del cuadrado: " . $cuadrado->calcArea() . "<br>";
echo "¿Es cuadrado? " . ($cuadrado->esCuadrado() ? "Sí" : "No") . "<br>" ;
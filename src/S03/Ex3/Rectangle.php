<?php

require_once 'Shape.php';

class Rectangle extends Shape {

    private $base;
    private $altura;

    public function __construct($base, $altura)
    {
        parent::_construct($base, $altura);
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcArea()
    {
        return "La area del rectangle es: " . $this->base * $this->altura;
    }

    public function calcPerimetro()
    {
        return "El perimetre es: " . 2 * ($this->base + $this->altura);
    }

    public function calcDiagonal()
    {
        $diagonal = sqrt(pow($this->base, 2) + pow($this->altura, 2));
        return "La diagonal es: " . $diagonal . "<br>";
    }

    public function __toString()
    {
        return parent::__toString() . "La base es: " . $this->base . "la altura es: " . $this->altura . "";
    }
}

<?php

class Rectangulo {
    private $base;
    private $altura;

    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcArea()
    {
        return $this->base * $this->altura;
    }

    public function calcPerimetro()
    {
        return 2 * ($this->base + $this->altura);
    }

    public function calcDiagonal()
    {
        $diagonal = sqrt(pow($this->base, 2) + pow($this->altura, 2));
        return $diagonal;
    }
}

<?php

require_once 'Shape.php';

class Circle extends Shape {

    public $radius = 0.0;

    public function __construct($color, $filled, $radius)
    {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }

    public function getArea()
    {
        return M_PI * $this->radius * $this->radius; // (pi * r^2)
    }

    public function getPerimeter() // 2 * M_PI * $radio
    {
        return 2 * M_PI * $this->radius;
    }

    public function __toString()
    {
        return parent::__toString() . "El color es: " . $this->color . ", está completado: " . ($this->filled ? "Sí" : "No") . ", tiene un radio de: " . $this->radius;
    }
}
<?php

class Shape {

    public $color = " ";
    public $filled = true;

    public function __construct($color, $filled)
    {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function __toString()
    {
        return "El color : " . $this->color . " es completado: " . this->filled . "<br>";
    }
}
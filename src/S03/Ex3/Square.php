<?php

require_once 'Rectangle.php';

class Square extends Rectangle
{
    public $side = 0.0;

    public function __construct($side)
    {
        parent::__construct($side);
        $this->side;
    }
    public function __toString()
    {
        return parent::__toString() . " la side es: " . $this->side;
    }
}
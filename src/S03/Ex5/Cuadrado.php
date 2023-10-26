<?php

namespace Ex5;

require_once('DosDimensiones.php');


class Cuadrado extends DosDimensiones
{
    public function calcArea()
    {
        return $this->getBase() * $this->getAltura();
    }

    public function esCuadrado()
    {
        return $this->getBase() == $this->getAltura();
    }
}

<?php

namespace Ex5;

require_once('DosDimensiones.php');

class Triangulo extends DosDimensiones
{
    private $estilo = "";

    public function __construct($base, $altura, $nombre, $estilo)
    {
        parent::__construct($base, $altura, $nombre);
        $this->estilo = $estilo;
    }

    public function getEstilo()
    {
        return $this->estilo;
    }

    public function setEstilo($estilo)
    {
        $this->estilo = $estilo;
    }

    public function calcArea()
    {
        return ($this->getBase() * $this->getAltura()) / 2;
    }

    public function mostrarEstilo()
    {
        return "El triángulo tiene el estilo: " . $this->getEstilo();
    }
}
<?php

namespace Ex5;

abstract class DosDimensiones
{
    abstract public function calcArea();

    private $base = 0.0;
    private $altura = 0.0;
    private $nombre = "";

    public function __construct($base, $altura, $nombre)
    {
        $this->base = $base;
        $this->altura = $altura;
        $this->nombre = $nombre;
    }

    public function getBase()
    {
        return $this->base;
    }

    public function setBase($base)
    {
        $this->base = $base;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function mostrarDimension()
    {
        return "La base y la altura son: " . $this->getBase() . " y " . $this->getAltura();
    }
}

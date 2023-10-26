<?php

namespace Ex4;

require_once('SerieNumerica.php');

class DeDos implements SerieNumerica
{
    private $iniciar;
    private $valor;

    public function __construct($iniciar, $valor)
    {
        $this->iniciar = $iniciar;
        $this->valor = $valor;
    }

    public function getSiguiente()
    {
        $this->valor += 2;
        return $this->valor;
    }

    public function reiniciar()
    {
        $this->valor = $this->iniciar;
    }

    public function setComenzar($x)
    {
        $this->iniciar = $x;
        $this->valor = $x;
    }

    public function getAnterior()
    {
        $this->valor -= 2;
        return $this->valor;
    }

    public static function tipoDeSerie()
    {
        echo "Esta es una serie de 2\n";
    }
}

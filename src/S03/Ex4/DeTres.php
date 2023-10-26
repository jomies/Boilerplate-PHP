<?php

namespace Ex4;

require_once('SerieNumerica.php');

class DeTres implements SerieNumerica
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
        $this->valor += 3;
        return $this->valor;
    }

    public function setComenzar($x)
    {
        $this->iniciar = $x;
        $this->valor = $x;
    }

    public function getAnterior()
    {
        $this->valor -= 3;
        return $this->valor;
    }

    public function reiniciar()
    {
        $this->valor = $this->iniciar;
    }

    public static function tipoDeSerie()
    {
        echo "Esta es una serie de 3\n";
    }
}

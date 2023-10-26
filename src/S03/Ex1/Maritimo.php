<?php

require_once 'Vehiculo.php';

class Maritimo extends Vehiculo {
    public $esloraTotal = 0.00;
    public $esloraFlotante = 0.00;
    public $numHelices = 0;

    // Constructor
    public function __construct($matricula, $potencia, $velocidadMedia, $esloraTotal, $esloraFlotante, $numHelices) 
    {
        parent::__construct($matricula, $potencia, $velocidadMedia);
        $this->esloraTotal = $esloraTotal;
        $this->esloraFlotante = $esloraFlotante;
        $this->numHelices = $numHelices;
    }

    public function calcularPrecio()
    {
        $precio = 2500 * $this->esloraTotal * $this->numHelices;
        return $precio;
    }

    public function __toString()
    {
        return "El precio del barco es de: " . $precio . " €.";
    }
}

<?php

require_once 'Vehiculo.php';

class Terrestre extends Vehiculo {
    public $numRuedas = 0;
    public $capacidadMaletero = 0;
    public $railesCarretera = true;

    public function __construct($matricula, $potencia, $velocidadMedia, $numRuedas, $capacidadMaletero, $railesCarretera) {
        parent::__construct($matricula, $potencia, $velocidadMedia);
        $this->numRuedas = $numRuedas;
        $this->capacidadMaletero = $capacidadMaletero;
        $this->railesCarretera = $railesCarretera;
    }
}
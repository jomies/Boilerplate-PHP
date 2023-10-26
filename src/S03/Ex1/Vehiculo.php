<?php

class Vehiculo {
    public $matricula = "";
    public $potencia = 0;
    public $velocidadMedia = 0;
    public $tiempo = 0; // Propiedad para almacenar el tiempo de viaje

    // Constructor
    public function __construct($matricula, $potencia, $velocidadMedia)
    {
        $this->matricula = $matricula;
        $this->potencia = $potencia;
        $this->velocidadMedia = $velocidadMedia;
    }

    public function calcularTiempo($distancia)
    {
        // Lógica para calcular el tiempo de viaje terrestre
        $this->tiempo = $distancia / $this->velocidadMedia; // Almacena el tiempo calculado
        return $this->tiempo; // Devuelve el tiempo calculado
    }

    public function __toString()
    {
        return "El tiempo de viaje: " . $this->tiempo . " hrs <br>"; // Muestra el tiempo calculado
    }
}

?>




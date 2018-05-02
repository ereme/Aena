<?php

require_once ("Aeropuerto.php");

class AeropuertoNacional extends Aeropuerto {

    function __construct ($denominacion, $latitud, $longitud) {
        parent:: __construct ($denominacion, $latitud, $longitud); 
    }
}


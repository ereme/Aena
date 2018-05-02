<?php

require_once ("Aeropuerto.php");

class AeropuertoInternacional extends Aeropuerto {
    var $numterminales;
    var $numpistas;

    function __construct ($denominacion, $latitud, $longitud, $numterminales, $numpistas) {
        parent:: __construct ($denominacion, $latitud, $longitud);
        $this->numterminales = $numterminales;
        $this->numpistas = $numpistas;
    }

    function setNumTerminales ($numterminales) { 
        $this->numterminales = $numterminales;
    }

    function getNumTerminales () {
        return $this->numterminales;
    }

    function setNumPistas ($numpistas) {
        $this->numpistas = $numpistas;
    }

    function getNumPistas () {
        return $this->numpistas;
    }

    function mostrar () {
        parent:: mostrar ();
        echo "<br>Este aeropuerto tiene ".$this->numterminales." terminales y ".$this->numpistas." pistas.";
    }
}
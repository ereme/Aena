<?php

class Pista {
    var $longitud;
    var $orientacion;

    function __construct ($longitud, $orientacion) {
        $this->longitud = $longitud;
        $this->orientacion = $orientacion;
    }

    function setLongitud ($longitud) {
        $this->longitud = $longitud;
    }

    function getLongitud () {
        return $this->longitud;
    }

    function setOrientacion ($orientacion) {
        $this->orientacion = $orientacion;
    }

    function getOrientacion () {
        return $this->orientacion;
    }

    function mostrar () {
        echo "<br>Pista con ".$this->getLongitud ()." metros y orientación ".$this->getOrientacion ().".";
    }
}
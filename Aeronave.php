<?php

class Aeronave {
    var $marca;
    var $modelo;
    var $plazas;

    function __construct ($marca, $modelo, $plazas) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->plazas = $plazas;
    }

    function setMarca ($marca) {
        $this->marca = $marca;
    }

    function getMarca () {
        return $this->marca;
    }

    function setModelo ($modelo) {
        $this->modelo = $modelo;
    }

    function getModelo () {
        return $this->modelo;
    }

    function setPlazas ($plazas) {
        $this->plazas = $plazas;
    }

    function getPlazas () {
        return $this->plazas;
    }

    function mostrar () {
        echo "<br>Aeronave ".$this->getMarca ()." ".$this->getModelo ()." con ".$this->getPlazas ()." plazas.";
    }
}
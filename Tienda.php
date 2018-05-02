<?php

class Tienda {
    var $nombre;
    var $numerolocal;
    var $metroscuadrados;

    function __construct ($nombre, $numerolocal, $metroscuadrados) {
        $this->nombre = $nombre;
        $this->numerolocal = $numerolocal;
        $this->metroscuadrados = $metroscuadrados;
    }

    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }

    function getNombre () {
        return $this->nombre;
    }

    function setNumeroLocal ($numerolocal) {
        $this->numerolocal = $numerolocal;
    }

    function getNumeroLocal () {
        return $this->numerolocal;
    }

    function setMetrosCuadrados ($metroscuadrados) {
        $this->metroscuadrados = $metroscuadrados;
    }

    function getMetrosCuadrados () {
        return $this->metroscuadrados;
    }

    function mostrar () {
        echo "<br>La tienda ".$this->nombre." está en el local número ".$this->numerolocal." que tiene ".$this->metroscuadrados." metros cuadrados.";
    }
}


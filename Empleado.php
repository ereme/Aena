<?php

class Empleado {
    var $nombre;
    var $fechanac;
    var $numvuelos;

    function __construct ($nombre, $fechanac, $numvuelos) {
        $this->nombre = $nombre;
        $this->fechanac = $fechanac;
        $this->numvuelos = $numvuelos;
    }

    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }

    function getNombre () {
        return $this->nombre;
    }

    function setFechaNac ($fechanac) {
        $this->fechanac = $fechanac;
    }

    function getFechaNac () {
        return $this->fechanac; 
    }

    function setNumVuelos ($numvuelos) {
        $this->numvuelos = $numvuelos;
    }

    function getNumVuelos () {
        return $this->numvuelos;
    }

    function mostrar () {
        echo "<br>Nombre: ".$this->nombre.". Fecha de nacimiento: ".$this->fechanac.". Número de vuelos: ".$this->numvuelos.".";
    }
}
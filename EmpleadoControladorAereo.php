<?php

require_once ("Empleado.php");

class EmpleadoControladorAereo extends Empleado {
    var $numhorastrab;

    function __construct ($nombre, $fechanac, $numvuelos, $numhorastrab) {
        parent:: __construct ($nombre, $fechanac, $numvuelos);
        $this->numhorastrab = $numhorastrab;
    }

    function setNumHorasTrab ($numhorastrab) {
        $this->numhorastrab = $numhorastrab;
    }

    function getNumHorasTrab () {
        return $this->numhorastrab;
    }

    function mostrar () {
        parent:: mostrar ();
        echo " Número de horas trabajadas: ".$this->numhorastrab.".";

    }
}
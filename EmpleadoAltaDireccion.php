<?php

require_once ("Empleado.php");

class EmpleadoAltaDireccion extends Empleado {
    var $numacciones;

    function __construct ($nombre, $fechanac, $numvuelos, $numacciones) {
        parent:: __construct ($nombre, $fechanac, $numvuelos);
        $this->numacciones = $numacciones;
    }

    function setNumAcciones ($numacciones) {
        $this->numacciones = $numacciones;
    }

    function getNumAcciones () {
        return $this->numacciones;
    }

    function mostrar () {
        parent:: mostrar ();
        echo " Número de acciones: ".$this->numacciones.".";
    }
}

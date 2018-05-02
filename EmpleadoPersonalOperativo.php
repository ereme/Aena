<?php

require_once ("Empleado.php");

class EmpleadoPersonalOperativo extends Empleado {
    var $terminal;

    function __construct ($nombre, $fechanac, $numvuelos, $terminal) {
        parent:: __construct ($nombre, $fechanac, $numvuelos);
        $this->terminal = $terminal;
    }

    function setTerminal ($terminal) {
        $this->terminal = $terminal;
    }

    function getTerminal () {
        return $this->terminal;
    }

    function mostrar () {
        parent:: mostrar ();
        echo " Terminal en la que trabaja: ".$this->terminal.".";
    }
}
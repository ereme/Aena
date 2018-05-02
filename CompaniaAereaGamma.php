<?php

require_once ("CompaniaAerea.php");

class CompaniaAereaGamma extends CompaniaAerea {
    var $anofundacion;

    function __construct ($nombre, $telefono, $anofundacion) {
        parent:: __construct ($nombre, $telefono);
        $this->anofundacion = $anofundacion;
    }

    function setAnoFundacion ($anofundacion) {
        $this->anofundacion = $anofundacion;
    }

    function getAnoFundacion () {
        return $this->anofundacion;
    }

    function mostrar (){
        parent:: mostrar ();
        echo "<br>Año de fundación: ".$this->anofundacion;
    }
}
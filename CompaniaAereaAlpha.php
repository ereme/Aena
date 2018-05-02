<?php

require_once ("CompaniaAerea.php");

class CompaniaAereaAlpha extends CompaniaAerea {
    var $codautorizacion;

    function __construct ($nombre, $telefono, $codautorizacion) {
        parent:: __construct ($nombre, $telefono);
        $this->codautorizacion = $codautorizacion;
    }

    function setCodAutorizacion ($codautorizacion) {
        $this->codautorizacion = $codautorizacion;
    }

    function getCodAutorizacion () {
        return $this->codautorizacion;
    }

    function mostrar (){
        parent:: mostrar ();
        echo "<br>Código de autorización aérea: ".$this->codautorizacion;
    }
}


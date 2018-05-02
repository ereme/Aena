<?php

class CompaniaAerea {
    var $nombre;
    var $telefonoemergencia;
    var $aeronavesoperativas;

    function __construct ($nombre, $telefono) {
        $this->nombre = $nombre;
        $this->telefonoemergencia = $telefono;
        $this->aeronavesoperativas = array ();
    }

    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }

    function getNombre () {
        return $this->nombre;
    }

    function setTelefono ($telefono) {
        $this->telefonoemergencia = $telefono;
    }

    function getTelefono () {
        return $this->telefonoemergencia;
    }

    function addAeronave ($aeronave) {
        $this->aeronavesoperativas [] = $aeronave;
    }

    function bajaAeronave ($marca, $moelo) {
        $encontrado = false;
        for ($i=0; $i < count ($this->aeronavesoperativas) && $encontrado == false; $i++) { 
            if ($this->aeronavesoperativas[$i]->getMarca () == $marca && $this->aeronavesoperativas[$i]->getModelo () == $modelo) {
                $this->aeronavesoperativas[$i] = null;
                $encontrado = true; 
            }
        }
    }
    
    function mostrar () {
        echo "<br> <br> Compañia ".$this->nombre;
        echo "<br> Telefono de emergencia: ".$this->telefonoemergencia;
        for ($i=0; $i < count ($this->aeronavesoperativas); $i++) { 
            $this->aeronavesoperativas[$i]->mostrar ();
        }
    }
}
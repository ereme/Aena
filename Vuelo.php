<?php

class Vuelo {
    var $numero;
    var $origen;
    var $destino;
    var $fecha;
    var $hora;

    function __construct ($numero, $origen, $destino, $fecha, $hora) {
        $this->numero = $numero;
        $this->origen = $origen;
        $this->destino = $destino;
        $this->fecha = $fecha;
        $this->hora = $hora;
    }

    function setNumero ($numero) {
        $this->numero = $numero;
    }

    function getNumero () {
        return $this->numero;
    }

    function setOrigen ($origen) {
        $this->origen = $origen;
    }

    function getOrigen () {
        return $this->origen;
    }

    function setDestino ($destino) {
        $this->destino = $destino;
    }

    function getDestino () {
        return $this->destino;
    }

    function setFecha ($fecha) {
        $this->fecha = $fecha;
    }

    function getFecha () {
        return $this->fecha;
    }

    function setHora ($hora) {
        $this->hora = $hora;
    }

    function getHora () {
        return $this->hora;
    }

    function mostrar () {
        echo "<br> Vuelo número ".$this->numero." con origen en ".$this->origen." y destino en ".$this->destino.". ".$this->fecha." ".$this->hora;
    }
}
<?php

require_once ("Vuelo.php");
require_once ("Pista.php");
require_once ("Tienda.php");

class Aeropuerto {
    var $denominacion;
    var $latitud;
    var $longitud;
    var $vuelos;
    var $pistas;
    var $tiendas;

    function __construct ($denominacion, $latitud, $longitud) {
        $this->denominacion = $denominacion;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
        $this->vuelos = array ();
        $this->pistas = array ();
        $this->tiendas = array ();

    }

    function setDenominacion ($denominacion) {
        $this->denominacion = $denominacion;
    }

    function getDenominacion () {
        return $this->denominacion;
    }

    function setLatitud ($latitud) {
        $this->latitud = $latitud;
    }

    function getLatitud () {
        return $this->latitud;
    }

    function setLongitud ($longitud) {
        $this->longitud = $longitud;
    }

    function getLongitud () {
        return $this->longitud;
    }
    
    function addVuelo ($vuelo) {
        $this->vuelos [] = $vuelo;
    }

    function bajaVuelo ($numero) {
        $encontrado = false;
        for ($i=0; $i < count ($this->vuelos) && $encontrado == false; $i++) { 
            if ($this->vuelos[$i]->getNumero () == $dem) {
                $this->vuelos[$i] = null;
                $encontrado = true; 
            }
        }
    }

    function addPista ($pista) {
        $this->pistas [] = $pista;
    }

    function addTienda ($tienda) {
        $this->tiendas [] = $tienda;
    }

    function mostrar () {
        echo "Aeropuerto ".$this->denominacion.", con latitud ".$this->latitud." y longitud ".$this->longitud.".";
        for ($i=0; $i < count ($this->vuelos) ; $i++) { 
            $this->vuelos[$i]->mostrar ();
        }
        for ($i=0; $i < count ($this->pistas) ; $i++) { 
            $this->pistas[$i]->mostrar ();
        }
        for ($i=0; $i < count ($this->tiendas) ; $i++) { 
            $this->tiendas[$i]->mostrar ();
        }
    }

    function pistaMasLarga () { 
        $mayor = 0;
        $pos = 0;
        for ($a=0; $a < count ($this->pistas) ; $a++) {
            if ($this->pistas[$a]->getLongitud() > $mayor){
                    $mayor = $this->pistas[$a]->getLongitud();
                    $pos = $a;
            }
        }
        return $this->pistas [$pos];
    }

    function vuelosUltimoMes () {
        $inicio = new DateTime () ; 
        $inicio->modify ("first day of last month");
        $fin = new DateTime ();
        $fin ->modify ("last day of last month");
        for ($a=0; $a < count ($this->vuelos) ; $a++) {
            $fecha = new DateTime ($this->vuelos[$a]->getFecha());
            if ($fecha >= $inicio && $fecha <= $fin){
                $this->vuelos[$a]->mostrar();
            }
        }
    }          
    
}


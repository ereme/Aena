<?php

require_once ("Aeronave.php");
require_once ("AeropuertoInternacional.php");
require_once ("AeropuertoNacional.php");
require_once ("CompaniaAereaAlpha.php");
require_once ("CompaniaAereaGamma.php");
require_once ("EmpleadoAltaDireccion.php");
require_once ("EmpleadoControladorAereo.php");
require_once ("EmpleadoPersonalOperativo.php");
require_once ("Pista.php");
require_once ("Tienda.php");
require_once ("Vuelo.php");

class Aena {
    var $empleados;
    var $aeropuertos;
    var $companiasaereas;

    function __construct () {
        $this->empleados = array ();
        $this->aeropuertos = array ();
        $this->companiasaereas = array ();
    }

    function addEmpleado ($empleado) {
        $encontrado = false;
        for ($i=0; $i < count ($this->empleados) && $encontrado == false; $i++) { 
            if ($this->empleados[$i] == null) {
                $this->empleados[$i] = $empleado;
                $encontrado = true; 
            }
            
        }
		if ($encontrado == false) {
            array_unshift ($this->empleados, $empleado);
       	}
    }

    function bajaEmpleado ($nombre) {
        $encontrado = false;
        for ($i=0; $i < count ($this->empleados) && $encontrado == false; $i++) { 
            if ($this->empleados[$i]->getNombre () == $nombre) {
                $this->empleados[$i] = null;
                $encontrado = true; 
            }
        }
    }

    function addAeropuerto ($aeropuerto) {
        $this->aeropuertos [] = $aeropuerto;
    }

    function bajaAeropuerto ($dem) {
        $encontrado = false;
        for ($i=0; $i < count ($this->aeropuertos) && $encontrado == false; $i++) { 
            if ($this->aeropuertos[$i]->getDenominacion () == $dem) {
                $this->aeropuertos[$i] = null;
                $encontrado = true; 
            }
        }
    }

    function addCompania ($compania) {
        $this->companiasaereas [] = $compania;
    }

    function bajaCompania ($nombre) {
        $encontrado = false;
        for ($i=0; $i < count ($this->companiasaereas) && $encontrado == false; $i++) { 
            if ($this->companiasaereas[$i]->getNombre () == $nombre) {
                $this->companiasaereas[$i] = null;
                $encontrado = true; 
            }
        }
    }

    function AeropuertoPistaMasLarga () { 
        $mayor = 0;
        $pos = 0;
        for ($a=0; $a < count ($this->aeropuertos) ; $a++) {
            if ($this->aeropuertos[$a]->pistaMasLarga()->getLongitud () > $mayor){
                    $mayor = $this->aeropuertos[$a]->pistaMasLarga()->getLongitud ();
                    $pos = $a;
            }
        }
        $this->aeropuertos [$pos]->mostrar ();
    }
    
    function vuelosUltimoMes ($denominacion) {
        for ($i=0; $i < count ($this->aeropuertos); $i++) { 
            if ($this->aeropuertos[$i]->getDenominacion () == $denominacion) {
                $this->aeropuertos[$i]->vuelosUltimoMes ();
            }  
        }           
    }

    /*function vuelosUltimoMes ($denominacion) {
        $fecha1 = '01-03-2018'; 
        $fecha2 = '01-03-2018';
        
        for ($i=0; $i < count ($this->aeropuertos); $i++) { 
            if ($this->aeropuertos[$i]->getDenominacion () == $denominacion) {
                for ($a=0; $a < count ($this->aeropuertos[$i]->vuelos) ; $a++) {
                    $fecha3 = $this->aeropuertos[$i]->vuelos[$a]->getFecha();
                    if (check_in_range($fecha1, $fecha2, $fecha3)) {   
                        $this->aeropuertos[$i]->vuelos[$a]->mostrar();
                    } 
                }
            }
        }     
    }*/
    
    function VuelosconOrigen ($denominacion) {
        $b = 0;
        for ($i=0; $i <count ($this->aeropuertos) ; $i++) { 
            if ($this->aeropuertos[$i]->getDenominacion () == $denominacion) {
                for ($a=0; $a < count ($this->aeropuertos[$i]->vuelos) ; $a++) { 
                    if ($this->aeropuertos[$i]->vuelos[$a]->getOrigen () == $denominacion) {
                        $b++;
                    }
                    
                }
                
            }
        }
        echo $b." vuelos han tenido origen en ".$denominacion;
    }

    function VuelosconDestino ($denominacion) {
        $a = 0;
        for ($i=0; $i <count ($this->aeropuertos) ; $i++) { 
                for ($i=0; $i < count ($this->aeropuertos->vuelos) ; $i++) { 
                    if ($this->aeropuertos[$i]->vuelos->getDestino () == $denominacion) {
                        $a++;
                    }
                    
                }
                
        
        }
        echo $a." vuelos han tenido destino en ".$denominacion;
    }

    function mostrarCompanias () {
        for ($i=0; $i < count ($this->companiasaereas) ; $i++) { 
            $this->companiasaereas [$i]->mostrar ();
        }
    }

    function mostrarEmpleados () {
        for ($i=0; $i < count ($this->empleados) ; $i++) { 
            if ($this->empleados [$i] != null){
                $this->empleados [$i]->mostrar ();
            }
            
        }
    }

    function mostrarAeropuertos () {
        for ($i=0; $i < count ($this->aeropuertos) ; $i++) { 
            $this->aeropuertos [$i]->mostrar ();
        }
    }
}
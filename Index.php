<html>
    <head>
        <title> AENA </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
</html>
<body>

<?php

require_once ("Aena.php");
include_once ("Style.css");

$aena = new Aena ();

// EMPLEADOS

$ead = new EmpleadoAltaDireccion ("Juan", "31-07-1986", 45, 4);
$ead1= new EmpleadoAltaDireccion ("María", "27-02-1968", 55, 3);
$eca = new EmpleadoControladorAereo ("Pedro", "21-12-1975", 32, 140);
$eca1 = new EmpleadoControladorAereo ("Olga", "17-01-1969", 56, 250);
$eeo = new EmpleadoPersonalOperativo ("Andrea", "26-10-1989", 35, "T2");
$eeo1 = new EmpleadoPersonalOperativo ("Juan José", "04-15-1979", 89, "T1");

// Añado los empleados a Aena

$aena->addEmpleado ($ead);
$aena->addEmpleado ($ead1);
$aena->addEmpleado ($eca);
$aena->addEmpleado ($eca1);
$aena->addEmpleado ($eeo);
$aena->addEmpleado ($eeo1);

// PISTAS

$p= new Pista (2500, "Norte");
$p1 = new Pista (2000, "Sur");
$p2 = new Pista (1900, "Norte");
$p3 = new Pista (2000, "Sur");
$p4 = new Pista (2600, "Norte");
$p5 = new Pista (1500, "Sur");
$p6= new Pista (1800, "Norte");
$p7 = new Pista (1500, "Sur");
$p8 = new Pista (1500, "Norte");

// TIENDAS

$t= new Tienda ("Tienda", 1, 15);
$t1 = new Tienda ("Tienda", 2, 15);
$t2 = new Tienda ("Tienda", 1, 15);
$t3 = new Tienda ("Tienda", 2, 15);
$t4 = new Tienda ("Tienda", 1, 15);
$t5 = new Tienda ("Tienda", 2, 15);

// VUELOS

$v = new Vuelo (100057, "MAD", "SLM", "18-03-2018", "15:30");
$v1 = new Vuelo (100058, "MAH", "MAD", "05-03-2018", "19:05");
$v2 = new Vuelo (100059, "MAD", "BDJ", "15-04-2018", "09:45");
$v3 = new Vuelo (100060, "MAH", "BCN", "19-03-2018", "11:25");
$v4 = new Vuelo (100061, "MAH", "SLM", "09-04-2018", "16:05");
$v5 = new Vuelo (100062, "BDJ", "MAH", "28-04-2018", "18:30");
$v6 = new Vuelo (100063, "BCN", "VLC", "11-03-2018", "21:30");
$v7 = new Vuelo (100064, "PNA", "BCN", "18-02-2018", "23:40");
$v8 = new Vuelo (100065, "BCN", "RJL", "01-03-2018", "16:30");


// AEROPUERTOS

$a = new AeropuertoInternacional ("MAD", 40.4918100, -3.5694800, 4, 4);
$a1 = new AeropuertoNacional ("MAH", 39.8626000, 4.2186500);
$a2 = new AeropuertoInternacional ("BCN",41.3208200,2.0271100, 3, 6);

// Añado los vuelos a los aeropuertos

$a->addVuelo ($v);
$a->addVuelo ($v1);
$a->addVuelo ($v2);
$a1->addVuelo ($v3);
$a1->addVuelo ($v4);
$a1->addVuelo ($v5);
$a2->addVuelo ($v6);
$a2->addVuelo ($v7);
$a2->addVuelo ($v8);

// Añado las pistas a los aeropuertos

$a->addPista ($p);
$a->addPista ($p1);
$a->addPista ($p2);
$a1->addPista ($p3);
$a1->addPista ($p4);
$a1->addPista ($p5);
$a2->addPista ($p6);
$a2->addPista ($p7);
$a2->addPista ($p8);

// Añado las tiendas a los aeropuertos

$a->addTienda ($t);
$a->addTienda ($t1);
$a1->addTienda ($t2);
$a1->addTienda ($t3);
$a2->addTienda ($t4);
$a2->addTienda ($t5);


// Añado los aeropuertos a Aena

$aena->addAeropuerto ($a);
$aena->addAeropuerto ($a1);
$aena->addAeropuerto ($a2);

// COMPAÑIAS AEREAS

$ca = new CompaniaAereaAlpha ("Iberia", 987845187, 125879);
$ca1 = new CompaniaAereaAlpha ("Ryanair", 978420015, 369875);
$ca2 = new CompaniaAereaGamma ("Vueling", 936256989, 2001);
$ca3 = new CompaniaAereaGamma ("Air Nostrum", 920585852, 1998);

// AERONAVES

$aeronave = new Aeronave ("Marca", "Modelo", 75);
$aeronave1 = new Aeronave ("Marca", "Modelo", 75);
$aeronave2 = new Aeronave ("Marca", "Modelo", 75);
$aeronave3 = new Aeronave ("Marca", "Modelo", 75);
$aeronave4 = new Aeronave ("Marca", "Modelo", 75);
$aeronave5 = new Aeronave ("Marca", "Modelo", 75);
$aeronave6 = new Aeronave ("Marca", "Modelo", 75);
$aeronave7 = new Aeronave ("Marca", "Modelo", 75);
$aeronave8 = new Aeronave ("Marca", "Modelo", 75);
$aeronave9 = new Aeronave ("Marca", "Modelo", 75);
$aeronave10 = new Aeronave ("Marca", "Modelo", 75);

// Añado las aeronaves a las compañias

$ca->addAeronave ($aeronave);
$ca->addAeronave ($aeronave1);
$ca->addAeronave ($aeronave2);
$ca1->addAeronave ($aeronave3);
$ca1->addAeronave ($aeronave4);
$ca1->addAeronave ($aeronave5);
$ca2->addAeronave ($aeronave6);
$ca2->addAeronave ($aeronave7);
$ca3->addAeronave ($aeronave8);
$ca3->addAeronave ($aeronave9);
$ca3->addAeronave ($aeronave10);

// Añado las compañías a Aena

$aena->addCompania ($ca);
$aena->addCompania ($ca1);
$aena->addCompania ($ca2);
$aena->addCompania ($ca3);


if (isset($_POST['boton'])){
    $aena->mostrarCompanias ();
}

if (isset($_POST['boton1'])){
    $aena->vuelosConOrigen ("MAD");
}

if (isset($_POST['boton2'])){
    $a->mostrar ();
}

if (isset($_POST['boton3'])){
    $a1->mostrar ();
}

if (isset($_POST['boton4'])){
    $a2->mostrar ();
}

if (isset($_POST['boton5'])){
    $aena->vuelosConOrigen ("MAH");
}

if (isset($_POST['boton6'])){
    $aena->vuelosConOrigen ("BCN");
}

if (isset($_POST['boton7'])){
    $aena->aeropuertoPistaMasLarga ();
}
?>

<br>
<br>

<center><form action="" method="post">
    <input type="submit" value="Ver todas las compañías" name="boton" id="boton" />
</form> </center>

<center><form action="" method="post">
    <input type="submit" value="Mostrar vuelos con origen Madrid" name="boton1" id="boton" />
</form> </center>

<center><form action="" method="post">
    <input type="submit" value="Mostrar vuelos con origen Mahón" name="boton5" id="boton" />
</form> </center>

<center><form action="" method="post">
    <input type="submit" value="Mostrar vuelos con origen Barcelona" name="boton6" id="boton" />
</form> </center>

<center><form action="" method="post">
    <input type="submit" value="Mostrar aeropuerto con la pista más larga" name="boton7" id="boton" />
</form> </center>

<right><form action="" method="post">
    <input type="submit" value="MAD" name="boton2" id="boton" />
</form> 

<form action="" method="post">
    <input type="submit" value="MAH" name="boton3" id="boton" />
</form> 

<form action="" method="post">
    <input type="submit" value="BCN" name="boton4" id="boton" />
</form> </right>

<br> 

</body>

</html>



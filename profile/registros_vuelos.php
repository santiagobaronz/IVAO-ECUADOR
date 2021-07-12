<?php 

$logo = $_POST["logo"];
$callsign = $_POST["callsign"];
$icao_salida = $_POST["icao_salida"];
$nombre_salida = $_POST["nombre_salida"];
$icao_llegada = $_POST["icao_llegada"];
$nombre_llegada = $_POST["nombre_llegada"];
$ruta = $_POST["ruta"];
$hora_salida = $_POST["hora"];
$hora_llegada = $_POST["hora_llegada"];
$spot = $_POST["spot"];
$tipo_aeronave = $_POST["aeronave"];

include '../php/connect.php';

$sentencia = "INSERT INTO `rfe_event`(`logo_aerolinea`, `numero_vuelo`, `ICAO_salida`, `aeropuerto_salida`, `ICAO_llegada`, `aeropuerto_llegada`, `ruta`, `hora_salida`, `hora_llegada`, `spot`, `tipo_aeronave`) VALUES ('$logo','$callsign','$icao_salida','$nombre_salida','$icao_llegada','$nombre_llegada','$ruta','$hora_salida','$hora_llegada','$spot','$tipo_aeronave')";

$ejecucion = mysqli_query($conexion,$sentencia);

if($ejecucion){
    echo "<script>alert('Se inserto correctamente');
        window.history.back();
        </script>";
}else{
    echo "<script>alert('Hubo un error, intentalo de nuevo o contacta de inmediato con Santiago');
        window.history.back();
    </script>";
}



?>


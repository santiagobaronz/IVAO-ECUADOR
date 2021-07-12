<?php

require "../php/connect.php";

session_start();

$id_ivao = $_SESSION['vid'];

$sentencia = "SELECT * FROM usuarios WHERE vid=$id_ivao";
$ejecutar = mysqli_query($conexion, $sentencia);

while($userData = mysqli_fetch_array($ejecutar)){
    $userData_name = $userData["nombre"];
    $userData_apellido = $userData["apellido"];
    $userData_vid = $userData["vid"];
    $userData_correo_electronico = $userData["correo_electronico"];
    $userData_correo_confirmado = $userData["correo_confirmado"];
    $userData_enviar_correos = $userData["enviar_correos"];
    $userData_horasATC = round($userData["horas_atc"]/60/60);
    $userData_horasPILOT = round($userData["horas_piloto"]/60/60);
}



?>
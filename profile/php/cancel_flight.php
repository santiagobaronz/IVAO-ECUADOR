<?php

include "../../php/connect.php";

session_start();

$id = $_GET["id"];
$id = base64_decode($id);
$id = base64_decode($id);
$id = base64_decode($id);
$id = base64_decode($id);


$cancelar_vuelo = mysqli_query($conexion,"UPDATE `rfe_event` SET `nombre`= null,`vid`= null,`correo_electronico`= null, `reservacion` = '0', `confirmacion`= '0'  WHERE id = $id");
header('Location: https://ec.ivao.aero/profile/rfe.php');




?>
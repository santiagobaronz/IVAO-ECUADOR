<?php

include 'connect.php';

$correo = $_POST["correo"];

$insertar = "INSERT INTO newsletter(correo) VALUES ('$correo')";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM newsletter WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '<script> alert("El correo ya ha sido registrado"); window.history.go(-1);</script>';
    exit;
}

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado) {
    echo '<script> alert("Error al registrar el correo, intentelo de nuevo o vuelva más tarde"); window.history.go(-1);</script>';
} else {
    echo '<script> alert("El correo se ha registrado con éxito"); window.history.go(-1);</script>';
}

mysqli_close($conexion);

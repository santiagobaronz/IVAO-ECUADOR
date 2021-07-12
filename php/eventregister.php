<?php

include 'connect.php';

$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$link = $_POST["link"];
$des_imagen = $_POST["des_imagen"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$lugares = $_POST["lugares"];

$insertar = "INSERT INTO noticias(titulo,detalle,link_imagen,desc_imagen,fecha_larga,hora,lugares) VALUES ('$titulo','$descripcion','$link','$des_imagen','$fecha','$hora','$lugares')";

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado) {
    echo '<script> alert("Error al registrar el evento, intentelo de nuevo o vuelva más tarde"); window.history.go(-1);</script>';
} else {
    echo '<script> alert("El evento se ha registrado con éxito"); window.history.go(-1);</script>';
}

mysqli_close($conexion);

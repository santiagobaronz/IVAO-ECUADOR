<?php
    
    include "../../php/connect.php";

    session_start();

    $email = $_POST['email'];
    $vid = $_SESSION['vid'];

    $sentencia = "UPDATE usuarios SET correo_electronico ='$email', correo_confirmado='1' WHERE vid='$vid' ";
    $resultado = mysqli_query($conexion, $sentencia);

?>
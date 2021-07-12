<?php

    include "../../php/connect.php";

    session_start();

    $vid = $_SESSION['vid'];
    $checkbox = $_POST['checkbox'];

    if($checkbox == "true"){
        $decision = 1;
    }else{
        $decision = 0;
    };

    $sentencia = "UPDATE usuarios SET enviar_correos='$decision' WHERE vid='$vid' ";
    $resultado = mysqli_query($conexion, $sentencia);

    if($resultado){
        echo "Cambios efectuados con éxito.";
    }else{
        echo "No se logró guardar los cambios, inténtelo más tarde.";
    }

?>
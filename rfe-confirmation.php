<?php

include 'php/connect.php';

$id_vuelo = $_GET["id"];
$vid = $_GET["vid"];

$id_vuelo = base64_decode($id_vuelo);
$id_vuelo = base64_decode($id_vuelo);
$id_vuelo = base64_decode($id_vuelo);
$id_vuelo = base64_decode($id_vuelo);

$vid = base64_decode($vid);
$vid = base64_decode($vid);
$vid = base64_decode($vid);
$vid = base64_decode($vid);

$revisar_confirmacion = mysqli_query($conexion,"SELECT * FROM rfe_event WHERE id = $id_vuelo");

foreach($revisar_confirmacion as $vuelo){
    if($vuelo["reservacion"] == 0){
        $confirmar = false;
    }else if($vuelo["reservacion"] == 1){
        if($vuelo["confirmacion"] == 0){
            $confirmar = true;
        }else{
            $confirmar = false;
        }
    }
}

if($confirmar){
    $confirmar_vuelo = mysqli_query($conexion, "UPDATE `rfe_event` SET `confirmacion`='1' WHERE vid = $vid");
    $texto = "Your flight was confirmed, you can close this page";
}else{
    $texto = "This flight has already been confirmed or a reservation was not made";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de vuelo</title>
    <link rel="stylesheet" href="profile/css/rfe.css" />
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Camphor,Open Sans,Segoe UI,sans-serif;
        }
    </style>
</head>
<body>
    <div class="body-confirmation">
        <div class="confirmation-box">
            <img src="assets/img/logo_brand_text.png" alt="" class="img-confirmation">
            <p class="confirm-text"><?php echo $texto; ?></p>
            <a href="https://ec.ivao.aero/" class="link-button">Go to IVAO Ecuador</a>
        </div>
    </div>
</body>
</html>
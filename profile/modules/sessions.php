<?php 
    
    require "../php/login_ivao.php";

    if(isset($_SESSION['cookie_name'])){
        $_SESSION['nombre'] = utf8_decode($user_array->firstname);
        $_SESSION['apellido'] = utf8_decode($user_array->lastname);
        $_SESSION['vid'] = utf8_decode($user_array->vid);
        $_SESSION['rating'] = utf8_decode($user_array->rating);
        $_SESSION['ratingatc'] = utf8_decode($user_array->ratingatc);
        $_SESSION['ratingpilot'] = utf8_decode($user_array->ratingpilot);
        $_SESSION['division'] = utf8_decode($user_array->division);
        $_SESSION['pais'] = utf8_decode($user_array->country);
        $_SESSION['skype'] = utf8_decode($user_array->skype);
        $_SESSION['horas_atc'] = utf8_decode($user_array->hours_atc);
        $_SESSION['horas_piloto'] = utf8_decode($user_array->hours_pilot);
        $_SESSION['staff'] = utf8_decode($user_array->staff);

        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];
        $vid = $_SESSION['vid'];
        $rating = $_SESSION['rating'];
        $ratingatc = $_SESSION['ratingatc'];
        $ratingpilot = $_SESSION['ratingpilot'];
        $division = $_SESSION['division'];
        $pais = $_SESSION['pais'];
        $skype = $_SESSION['skype'];
        $horas_atc = $_SESSION['horas_atc'];
        $horas_piloto = $_SESSION['horas_piloto'];
        $staff = $_SESSION['staff'];

        // Guardar datos en base de datos

        include '../php/connect.php';

        date_default_timezone_set("UTC");
        $fecha_actual = date('Y-m-d H:i:s', time());

        $verificar_vid = mysqli_query($conexion, "SELECT * FROM usuarios WHERE vid = '$vid'");
        if (mysqli_num_rows($verificar_vid) > 0) {
            $sentencia_actualizar = "UPDATE usuarios SET rango='$rating', rango_atc='$ratingatc', rango_piloto='$ratingpilot', division='$division', skype='$skype', horas_atc='$horas_atc', horas_piloto='$horas_piloto', staff='$staff', ultima_conexion='$fecha_actual' WHERE vid='$vid'";
            $resultado = mysqli_query($conexion, $sentencia_actualizar);
        }else{
            $sentencia = "INSERT INTO `usuarios`(`nombre`, `apellido`, `vid`, `rango`, `rango_atc`, `rango_piloto`, `division`, `pais`, `skype`, `horas_atc`, `horas_piloto`, `staff`, `ultima_conexion`) 
            VALUES('$nombre','$apellido','$vid','$rating','$ratingatc','$ratingpilot','$division','$pais','$skype','$horas_atc','$horas_piloto','$staff','$fecha_actual')";

            $resultado = mysqli_query($conexion, $sentencia);
        }

}else{
		echo("<script>alert('La sesión ha expirado, o no ha sido iniciada.');</script>");
        header("Location: https://ec.ivao.aero");
}

?>
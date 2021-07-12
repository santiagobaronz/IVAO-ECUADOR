<?php

  include "../../php/connect.php";

  session_start();

  if(isset($_SESSION['vid'])){
    
  $nombre = $_SESSION['nombre'];
  $apellido = $_SESSION['apellido'];
  $vid = $_SESSION['vid'];
  
  $buscar_coincidencia = mysqli_query($conexion,"SELECT * FROM `rfe_event` WHERE vid = $vid");

  if(mysqli_num_rows($buscar_coincidencia) < 2){
    $seleccion_de_vuelo = true;
  }else{
    $seleccion_de_vuelo = false;
  }
  
  }else{
    echo "<script>alert('Usted no se encuentra logueado para agendar el vuelo. Inicie sesión y vuelvalo a intentar');</script>";
    exit();
  }
    

  if($seleccion_de_vuelo == true){

    $id = $_GET["id_vuelo"];
    $id = base64_decode($id);
    $id = base64_decode($id);
    $id = base64_decode($id);
    $id = base64_decode($id);

    $verificar_vuelo = mysqli_query($conexion,"SELECT * FROM rfe_event WHERE id = $id");

    foreach($verificar_vuelo as $vuelo){
      if($vuelo["reservacion"] == 1 || $vuelo["confirmacion"] == 1){
        $seleccion_de_vuelo = false;
      }else{
        $seleccion_de_vuelo = true;
      }
    }

    if($seleccion_de_vuelo == true){
      $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE vid = '$vid'");
      foreach($verificar_correo as $user_info){
          $correo = $user_info["correo_electronico"];
      }

      if($correo == NULL){
        header('Location: https://ec.ivao.aero/profile/rfe.php?status=noemail');
        exit();
      }
  
      /* Realizar la reservación y enviar correo electronico*/
  
      $nombre_completo = $nombre.' '.$apellido;
      $reservar_vuelo = mysqli_query($conexion, "UPDATE `rfe_event` SET `nombre`='$nombre_completo',`vid`='$vid',`correo_electronico`='$correo',`reservacion`='1' WHERE id = $id");
  
      if($reservar_vuelo){
  
          /* Obtener información del vuelo */
  
          $informacion_vuelo = mysqli_query($conexion, "SELECT * FROM `rfe_event` WHERE id = '$id'");
  
          while ($info_flight = mysqli_fetch_array($informacion_vuelo)){
              $aerolinea = $info_flight["logo_aerolinea"];
              $numero_de_vuelo = $info_flight["numero_vuelo"];
              $ICAO_salida = $info_flight["ICAO_salida"];
              $aeropuerto_salida = $info_flight["aeropuerto_salida"];
              $ICAO_llegada = $info_flight["ICAO_llegada"];
              $aeropuerto_llegada = $info_flight["aeropuerto_llegada"];
              $pais_llegada = $info_flight["pais_llegada"];
              $ruta = $info_flight["ruta"];
              $hora_salida = $info_flight["hora_salida"];
              $hora_llegada = $info_flight["hora_llegada"];
              $spot = $info_flight["spot"];
              $aeronave = $info_flight["tipo_aeronave"];
          }
  
          switch ($aerolinea){
              case "TAE":
                  $aerolinea = "Tame";
                  break;
              case "LNE":
                  $aerolinea = "LAN Ecuador";
                  break;
              case "CMP":
                  $aerolinea = "Copa";
                  break;
              case "GLG":
                  $aerolinea = "AeroGal";
                  break;
              case "UPS":
                  $aerolinea = "UPS";
                  break;
              case "KLM":
                  $aerolinea = "KLM";
                  break;
              case "IBE":
                  $aerolinea = "Iberia";
                  break;
              case "MPH":
                  $aerolinea = "Martinair";
                  break;
              case "HC":
                  $aerolinea = "Private Flight";
                  break;
              case "N":
                  $aerolinea = "Private Flight";
                  break;
          }
  
          /* Enviar correo electronico */
  
          $id = base64_encode($id);
          $id = base64_encode($id);
          $id = base64_encode($id);
          $id = base64_encode($id);
  
          $vid = base64_encode($vid);
          $vid = base64_encode($vid);
          $vid = base64_encode($vid);
          $vid = base64_encode($vid);
  
          $mensaje = "
          <!DOCTYPE html>
          <html lang='es'>
          <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Mensaje</title>
          
            <style>
              * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: Camphor,Open Sans,Segoe UI,sans-serif;
              }
          
              .background{
                  background: #0267FF;
                  width: 100%;
                  height: 200px;
                  padding-top: 50px;
              }
              .logo_ivao{
                  display: block;
                  margin: auto;
                  width: 300px;
                  height: 100px;
              }
              .container {
                max-width: 1000px;
                width: 90%;
                margin: 0 auto;
                background: #0267FF;
              }
              .bg-container {
                background: #fff;
                padding: 40px 20px;
              }
              .bg-container h1{
                  text-align: center;
                  color: #484848;
                  margin-bottom: 30px;
              }
              .bg-container p{
                  padding: 0 20px;
                  text-align: left;
                  color: #484848;
                  margin-bottom: 30px;
              }
              .alert {
                font-size: 1.5em;
                position: relative;
                padding: .75rem 1.25rem;
                margin-bottom: 2rem;
                border: 1px solid transparent;
                border-radius: .25rem;
              }
              .alert-primary {
                color: #004085;
                background-color: #cce5ff;
                border-color: #b8daff;
              }
          
              .img-fluid {
                max-width: 100%;
                height: auto;
              }
          
              .mensaje {
                width: 80%;
                font-size: 20px;
                margin: 80px auto ;
                color: #484848;
              }
          
              .texto {
                margin-top: 20px;
              }
  
              .texto ul{
                  display: flex;
                  justify-content: center;
              }
  
              .aeropuertos{
                  font-size: 15px;
              }
  
              .texto ul li{
              list-style: none;
              width: 33.3333%;
              text-align: center;
              }
  
              .flight-details-title{
                  text-align: center;
                  color: #484848;
                  margin-top: 80px;
              }
  
              .details{
                  padding: 0 20px;
                  margin-top: 30px;
                  margin-bottom: 30px;
              }
  
              .odd-text{
                  background: #ddd;
              }
  
              .details li{
                  list-style: none;
                  padding: 10px;
              }
  
              .confirm-button{
                padding: 30px;
                background:#0267FF;
                color: #fff !important;
                text-decoration: none;
                display: block;
                margin: 0 10%;
                text-align: center;
                font-weight: 500;
                font-size:25px;
              }
          
              .footer {
                width: 100%;
                background: #48494a;
                text-align: center;
                color: #ddd;
                padding: 10px;
                font-size: 14px;
              }
              .footer a {
                text-decoration: underline;
                color: #ddd;
              }
            </style>
          </head>
          <body>
            <div class='background'>
                <img src='https://i.imgur.com/9mfdPL7.png' alt='' class='logo_ivao'>
            </div>
            <div class='container'>
              <div class='bg-container'>
                  <h1 class='titulo-email'>$nombre, confirm your flight in this email!</h1>
                  <p>$nombre, You have booked flight <strong>$numero_de_vuelo</strong>. In this email you can confirm your flight and thus be able to apply for the different rewards that will be given for participating in the first anniversary of the Ecuador division at IVAO. We are very happy about your participation in the event and we hope you can continue sharing many adventures with us. The flight information and its respective button for confirmation are detailed below:</p>
          
                <div class='mensaje'>
                  <div class='texto'>
                      <ul>
                          <li>$ICAO_salida</li>
                          <li>➔</li>
                          <li>$ICAO_llegada</li>
                      </ul>
                      <ul>
                          <li class='aeropuertos'>$aeropuerto_salida</li>
                          <li>➔</li>
                          <li class='aeropuertos'>$aeropuerto_llegada</li>
                      </ul>
                  </div>
                </div>
  
                <a href='https://ec.ivao.aero/rfe-confirmation.php?id=$id&vid=$vid' class='confirm-button'>Click here to confirm your flight $numero_de_vuelo</a>
  
                <h3 class='flight-details-title'>Check flight details:</h3>
  
                <ul class='details'>
                    <li class='odd-text'>Captain: $nombre_completo </li>
                    <li>Airline: $aerolinea </li>
                    <li class='odd-text'>Flight: $numero_de_vuelo </li>
                    <li>Route: $ruta</li>
                    <li class='odd-text'>Departure time: $hora_salida</li>
                    <li>Arrival time: $hora_llegada</li>
                    <li class='odd-text'>Spot: $spot</li>
                    <li>Aircraft: $aeronave</li>
                </ul>
          
                <div class='footer'>
                  If you are not comfortable with your flight, you can cancel or change it at  <a href='https://ec.ivao.aero/profile/rfe.php'>https://ec.ivao.aero/profile/rfe.php</a>
                </div>
              </div>
            </div>
          </body>
          </html>
        ";
  
          $destinatario = $correo;
          $asunto = "Flight ".$numero_de_vuelo." Booking Confirmation | ".$nombre.", confirm your flight in this email!";
          $headers = 'From: RFE IVAO Ecuador <ec-events@ivao.aero>' . "\r\n" .
          'Reply-To: ec-events@ivao.aero' . "\r\n" .
          'MIME-Version: 1.0' . "\r\n" .
          'Content-type: text/html; charset=utf-8' . "\r\n".
          'X-Mailer: PHP/' . phpversion();
  
          $enviar_mail = mail($destinatario, $asunto, $mensaje, $headers);
  
          header('Location: https://ec.ivao.aero/profile/rfe.php?status=booked');
          exit();
      }
    }else{
      echo "<script>alert('El vuelo que intentas reservar, acaba de ser reservado por otra persona. Busca otro vuelo y reservalo.');</script>";
      header('Location: https://ec.ivao.aero/profile/rfe.php?status=nobooked');
    }
  }else{
    echo "<script>alert('Ya has agendado un vuelo y no puedes agregar otro más');</script>";
    header('Location: https://ec.ivao.aero/profile/rfe.php?status=exceeded');
  }

    

?>
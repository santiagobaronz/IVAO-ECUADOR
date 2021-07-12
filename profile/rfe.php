<?php require 'modules/sessions.php'; require '../php/connect.php'; ?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Meta Data -->

        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        />
        <title>¡Evento RFE de aniversario!</title>


        <!-- Style Links -->

        <link rel="icon" href="../assets/img/logo.ico" />
        <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" href="css/rfe.css" />
        <link rel="stylesheet" href="../dist/flexboxgrid.min.css" />
        <link rel="stylesheet" href="../css/fonts.css" />

        <!-- WebSite Scripts -->

        <script src="../js/jquery-3.6.0.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    </head>
<body>

<section class="contenedor-dashboard">

    <?php  require 'modules/menu.php'; ?>

    <div class="contents open menu-full-width" id="contents-id">
        <div class="menu-top">
            <img src="assets/menu1.png" alt="" class="menu-icon" id="icon-menu-toggle">
        </div>

        <div class="rfe-section">

            <div class="introduction-rfe">
                <img src="https://i.imgur.com/4RTF33q.jpg" alt="" class="rfe-img">
                <h3>RFE event for the first anniversary of the Ecuador division in IVAO!</h3>
                <p>For more than a year we have been enthusiastic about the idea that together we would achieve the opening of the division on the IVAO network. On July 10th, 2021, we are celebrating our first anniversary! New challenges await us, but we are prepared for what is to come.</p></br>
                <p>To celebrate our first anniversary being part of IVAO, we want to invite you to participate in an "ECUADOR RFE" that will take place on July 10th at our two main airports (SEQM and SEGU) in the time slot from 19z to 23z. For this, we have arranged a flight reservation system so that you as a pilot can select a flight for that day.</p>
            </div>

            <?php 
                $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE vid = $vid");
                foreach($verificar_correo as $correo){
                    
                if($correo["correo_electronico"] == null){
            ?>

            <div class="confirm-mail-box" id="box-confirm-email-rfe">
                <p><?php echo $_SESSION['nombre'];?>, you must confirm your email to book a flight:</p>
                <input type="email" id="input-confirm-email-rfe">
                <button id="btn-confirm-email-rfe">Confirm email</button>
            </div>

            <?php } }?>

            <?php
            $buscar_vuelo = mysqli_query($conexion,"SELECT * FROM rfe_event WHERE vid = $vid");
            foreach($buscar_vuelo as $info_vuelo){?>

            <div class="booked-flight">
                <img src="assets/mapamundi.png" alt="" class="img-ticket">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="flight-ticket">
                            <p><?php echo $info_vuelo["numero_vuelo"]?></p>
                        </div>
                        <div class="firts-part-ticket">
                            <div class="title-ticket">
                                <p>BOARDING PASS</p>
                            </div>
                            <div class="airline-logo">
                            <img class="logo-ticket" src="assets/airlines/<?php switch($info_vuelo["logo_aerolinea"]){
                                            case "TAE":
                                                echo "TAE";
                                                break;
                                            case "LNE":
                                                echo "LNE";
                                                break;
                                            case "CMP":
                                                echo "CMP";
                                                break;
                                            case "GLG":
                                                echo "GLG";
                                                break;
                                            case "UPS":
                                                echo "UPS";
                                                break;
                                            case "KLM":
                                                echo "KLM";
                                                break;
                                            case "IBE":
                                                echo "IBE";
                                                break;
                                            case "MPH":
                                                echo "MPH";
                                                break;
                                            case "HC":
                                                echo "PF";
                                                break;
                                            case "N":
                                                echo "PF";
                                                break;
                                        }
                                        

                                        ?>.png" alt="">
                            </div>
                            <div class="airline-name">
                                <img src="assets/airplane_ticket.png" alt="" class="airplane-ticket">
                                <p><?php
                                    switch ($info_vuelo["logo_aerolinea"]){
                                        case "TAE":
                                            $aerolinea = "TAME";
                                            break;
                                        case "LNE":
                                            $aerolinea = "LAN ECUADOR";
                                            break;
                                        case "CMP":
                                            $aerolinea = "COPA";
                                            break;
                                        case "GLG":
                                            $aerolinea = "AEROGAL";
                                            break;
                                        case "UPS":
                                            $aerolinea = "UPS";
                                            break;
                                        case "KLM":
                                            $aerolinea = "KLM";
                                            break;
                                        case "IBE":
                                            $aerolinea = "IBERIA";
                                            break;
                                        case "MPH":
                                            $aerolinea = "MARTINAIR";
                                            break;
                                        case "HC":
                                            $aerolinea = "PRIVATE FLIGHT";
                                            break;
                                        case "N":
                                            $aerolinea = "PRIVATE FLIGHT";
                                            break;
                                        case "CLX":
                                            $aerolinea = "CARGO LUX";
                                            break;
                                        case "LCO":
                                            $aerolinea = "LAN CARGO";
                                            break;
                                        case "QTR":
                                            $aerolinea = "QATAR";
                                            break;
                                        case "UAE":
                                            $aerolinea = "EMIRATES";
                                            break;
                                    }

                                    echo $aerolinea;
                                    ?>
                                </p>
                                <img src="assets/qr-code.png" alt="" class="qr-code">
                                <p class="qr-txt">Security QR code</p>
                            </div>
                        </div>
                        <div class="info-ticket">
                            <div class="unitary-info-ticket">
                                <p>Name of Captain</p>
                                <p><?php echo strtoupper($info_vuelo["nombre"]);?></p>
                            </div>
                            <div class="unitary-info-ticket">
                                <p>From</p>
                                <p><?php echo strtoupper($info_vuelo["aeropuerto_salida"]).' / '.strtoupper($info_vuelo["ICAO_salida"])?></p>
                            </div>
                            <div class="unitary-info-ticket">
                                <p>To</p>
                                <p><?php echo strtoupper($info_vuelo["aeropuerto_llegada"]).' / '.strtoupper($info_vuelo["ICAO_llegada"])?></p>
                            </div>
                        </div>
                        <div class="second-info">
                            <div class="info-down-ticket">
                                <ul>
                                    <li>
                                        <p>Gate</p>
                                        <p><?php echo $info_vuelo["spot"]?></p>
                                    </li>
                                    <li>
                                        <p>Date</p>
                                        <p>10 JUL 21</p>
                                    </li>
                                    <li>
                                        <p>Flight</p>
                                        <p><?php echo $info_vuelo["numero_vuelo"]?></p>
                                    </li>
                                    <li>
                                        <p>Seat</p>
                                        <p>01 A</p>
                                    </li>
                                    <li>
                                        <p>Departure</p>
                                        <p><?php echo $info_vuelo["hora_salida"].'z'?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="codigo-de-barras">
                            <img src="assets/barcode.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="second-part-ticket">
                            <img src="assets/logo.png" alt="" class="logoivao-ticket">
                            <h3 class="boarding-pass-ticket">Boarding pass to the first anniversary of Ivao Ecuador</h3>
                            <div class="boarding-info-unitary">
                                <p>Name of Captain</p>
                                <p><?php echo strtoupper($info_vuelo["nombre"]);?></p>
                            </div>
                            <div class="boarding-info-unitary">
                                <p>From</p>
                                <p><?php echo strtoupper($info_vuelo["aeropuerto_salida"]).' / '.strtoupper($info_vuelo["ICAO_salida"])?></p>
                            </div>
                            <div class="boarding-info-unitary">
                                <p>To</p>
                                <p><?php echo strtoupper($info_vuelo["aeropuerto_llegada"]).' / '.strtoupper($info_vuelo["ICAO_llegada"])?></p>
                            </div>
                            <button class="button-ticket"><?php if($info_vuelo["confirmacion"] == 0){echo "Check your email and confirm your flight";} if($info_vuelo["confirmacion"] == 1){echo "Your flight is confirmed, get ready to fly!";}?></button>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            
            $id_vuelo = base64_encode($info_vuelo["id"]);
            $id_vuelo = base64_encode($id_vuelo);
            $id_vuelo = base64_encode($id_vuelo);
            $id_vuelo = base64_encode($id_vuelo);
            
            echo "<a class='cancel-flight' href='php/cancel_flight.php?id=$id_vuelo'>Cancel this flight. With this decision you will lose your reservations and confirmations and you will have to do the same process again.</a>";
            
            } ?>


            <?php 
            
            $estadistica_disponibles = mysqli_query($conexion,"SELECT * FROM rfe_event WHERE reservacion = 0");
            $estadistica_reservados = mysqli_query($conexion,"SELECT * FROM rfe_event WHERE reservacion = 1 AND confirmacion = 0");
            $estadistica_confirmados = mysqli_query($conexion,"SELECT * FROM rfe_event WHERE reservacion = 1 AND confirmacion = 1");
            
            ?>

            <div class="flights-statistics">
                <ul>
                    <li>Flights available: <?php echo mysqli_num_rows($estadistica_disponibles); ?></li>
                    <li>Flights waiting for confirmation: <?php echo mysqli_num_rows($estadistica_reservados); ?></li>
                    <li>Flights booked: <?php echo mysqli_num_rows($estadistica_confirmados); ?></li>
                </ul>
            </div>


            <div class="booking-system">

                <div class="airports-rfe-event">
                    <ul>
                        <li id ="airport_seqm" class="active-airport">SEQM - Mariscal Sucre Intl.</li>
                        <li id ="airport_segu" class="no-active-airport">SEGU - José Joaquín de Olmedo Intl.</li>
                    </ul>
                </div>

                <div class="SEQM-book" id="SEQM_book">
                    <ul>
                        <li id="seqm_departures_link" class="active_section"><img src="assets/plane-departure-solid.svg" alt="" class="icon-user-box">Salidas | Departures</li>
                        <li id="seqm_arrivals_link" > <img src="assets/plane-arrival-solid.svg" alt="" class="icon-user-box"> Llegadas | Arrivals</li>
                    </ul>

                    <div class="SEQM-departures" id="seqm_departures_list">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Flight</th>
                                    <th></th>
                                    <th>Destination airport</th>
                                    <th>Departure time</th>
                                    <th>Gate</th>
                                    <th>Aircraft</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $buscar_coincidencia = mysqli_query($conexion,"SELECT * FROM `rfe_event` WHERE vid = $vid");

                                if(mysqli_num_rows($buscar_coincidencia) < 2){
                                    $seleccion_de_vuelo = true;
                                }else{
                                    $seleccion_de_vuelo = false;
                                }
                                
                                $seqm_departures_sentence = "SELECT * FROM `rfe_event` WHERE ICAO_salida = 'SEQM' ORDER BY hora_salida ASC";
                                $seqm_departures_exe = mysqli_query($conexion,$seqm_departures_sentence);

                                foreach($seqm_departures_exe as $flights_seqm){ ?>

                                    <tr>
                                        <td><img class="logo_airline" src="assets/airlines/<?php switch($flights_seqm['logo_aerolinea']){
                                            case "TAE":
                                                echo "TAE";
                                                break;
                                            case "LNE":
                                                echo "LNE";
                                                break;
                                            case "CMP":
                                                echo "CMP";
                                                break;
                                            case "GLG":
                                                echo "GLG";
                                                break;
                                            case "UPS":
                                                echo "UPS";
                                                break;
                                            case "KLM":
                                                echo "KLM";
                                                break;
                                            case "IBE":
                                                echo "IBE";
                                                break;
                                            case "MPH":
                                                echo "MPH";
                                                break;
                                            case "HC":
                                                echo "PF";
                                                break;
                                            case "N":
                                                echo "PF";
                                                break;
                                            case "CLX":
                                                echo "CLX";
                                                break;
                                            case "LCO":
                                                echo "LCO";
                                                break;
                                            case "QTR":
                                                echo "QTR";
                                                break;
                                            case "UAE":
                                                echo "UAE";
                                                break;
                                        }
                                        

                                        ?>.png" alt=""></td>
                                        <td><?php echo $flights_seqm['numero_vuelo']; ?></td>
                                        <td><img style="border-radius: 5px; weight: 40px; height: 27px" src="https://flagcdn.com/w40/<?php echo strtolower($flights_seqm['pais_llegada'])?>.png" alt=""></td>
                                        <td><?php echo $flights_seqm['ICAO_llegada'].' - '.$flights_seqm['aeropuerto_llegada']; ?></td>
                                        <td><?php echo $flights_seqm['hora_salida'].'z'; ?></td>
                                        <td><?php if($flights_seqm['spot'] == ""){
                                            echo "--";
                                            }else{
                                                echo $flights_seqm['spot'];
                                        }; ?></td>
                                        <td><?php echo $flights_seqm['tipo_aeronave']; ?></td>
                                        <td>
                                            <?php 
                                            
                                            $id_vuelo = $flights_seqm['id'];

                                            if($flights_seqm['reservacion'] == 0){

                                                $id_vuelo = base64_encode($id_vuelo);
                                                $id_vuelo = base64_encode($id_vuelo);
                                                $id_vuelo = base64_encode($id_vuelo);
                                                $id_vuelo = base64_encode($id_vuelo);

                                                if($seleccion_de_vuelo == true){
                                                    echo "<a href='php/book_flight.php?id_vuelo=$id_vuelo' class='rfe-button available-button'>Available</a>";
                                                }else{
                                                    echo "<a class='rfe-button available-button no-event'>Available</a>";
                                                }
                                            
                                            }else if($flights_seqm['reservacion'] == 1 && $flights_seqm['confirmacion'] == 0){
                                                
                                                echo "<a href='' class='rfe-button waiting-button'>Waiting confirmation</a>";
                                            
                                            }else if($flights_seqm['reservacion'] == 1 && $flights_seqm['confirmacion'] == 1){
                                                
                                                echo "<a href='' class='rfe-button booked-button'>Booked by <strong>".$flights_seqm['vid']."</strong></a>";
                                            }
                                            
                                            ?>
                                        </td>
                                    </tr>
                                
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="SEQM-arrivals" id="seqm_arrivals_list" style="display:none">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Flight</th>
                                    <th></th>
                                    <th>Departure airport</th>
                                    <th>Departure time</th>
                                    <th>Arrival time</th>
                                    <th>Gate</th>
                                    <th>Aircraft</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                $seqm_arrivals_sentence = "SELECT * FROM `rfe_event` WHERE ICAO_llegada = 'SEQM' ORDER BY hora_salida ASC";
                                $seqm_arrivals_exe = mysqli_query($conexion,$seqm_arrivals_sentence);

                                foreach($seqm_arrivals_exe as $flights_seqm){ ?>

                                    <tr>
                                    <td><img class="logo_airline" src="assets/airlines/<?php switch($flights_seqm['logo_aerolinea']){
                                            case "TAE":
                                                echo "TAE";
                                                break;
                                            case "LNE":
                                                echo "LNE";
                                                break;
                                            case "CMP":
                                                echo "CMP";
                                                break;
                                            case "GLG":
                                                echo "GLG";
                                                break;
                                            case "UPS":
                                                echo "UPS";
                                                break;
                                            case "KLM":
                                                echo "KLM";
                                                break;
                                            case "IBE":
                                                echo "IBE";
                                                break;
                                            case "MPH":
                                                echo "MPH";
                                                break;
                                            case "HC":
                                                echo "PF";
                                                break;
                                            case "N":
                                                echo "PF";
                                                break;
                                            case "CLX":
                                                echo "CLX";
                                                break;
                                            case "LCO":
                                                echo "LCO";
                                                break;
                                            case "QTR":
                                                echo "QTR";
                                                break;
                                            case "UAE":
                                                echo "UAE";
                                                break;
                                        }
                                        

                                        ?>.png" alt=""></td>
                                        <td><?php echo $flights_seqm['numero_vuelo']; ?></td>
                                        <td><img style="border-radius: 5px; weight: 40px; height: 27px" src="https://flagcdn.com/w40/<?php echo strtolower($flights_seqm['pais_salida'])?>.png" alt=""></td>
                                        <td><?php echo $flights_seqm['ICAO_salida'].' - '.$flights_seqm['aeropuerto_salida']; ?></td>
                                        <td><?php echo $flights_seqm['hora_salida'].'z'; ?></td>
                                        <td><?php if($flights_seqm['hora_llegada'] == ""){
                                            echo "-----------";
                                        }else{
                                            echo $flights_seqm['hora_llegada'].'z';
                                        }; ?></td>
                                        <td><?php if($flights_seqm['spot'] == ""){
                                            echo "--";
                                            }else{
                                                echo $flights_seqm['spot'];
                                        }; ?></td>
                                        <td><?php echo $flights_seqm['tipo_aeronave']; ?></td>
                                        <td>
                                            <?php 
                                            
                                            $id_vuelo = $flights_seqm['id'];

                                            if($flights_seqm['reservacion'] == 0){

                                                $id_vuelo = base64_encode($id_vuelo);
                                                $id_vuelo = base64_encode($id_vuelo);
                                                $id_vuelo = base64_encode($id_vuelo);
                                                $id_vuelo = base64_encode($id_vuelo);

                                                if($seleccion_de_vuelo == true){
                                                    echo "<a href='php/book_flight.php?id_vuelo=$id_vuelo' class='rfe-button available-button'>Available</a>";
                                                }else{
                                                    echo "<a class='rfe-button available-button no-event'>Available</a>";
                                                }
                                            
                                            }else if($flights_seqm['reservacion'] == 1 && $flights_seqm['confirmacion'] == 0){
                                                
                                                echo "<a href='' class='rfe-button waiting-button'>Waiting confirmation</a>";
                                            
                                            }else if($flights_seqm['reservacion'] == 1 && $flights_seqm['confirmacion'] == 1){
                                                
                                                echo "<a href='' class='rfe-button booked-button'>Booked by <strong>".$flights_seqm['vid']."</strong></a>";
                                            }
                                            
                                            ?>
                                        </td>
                                    </tr>
                                
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Vuelos de SEGU -->

                <div class="SEGU-book" id="SEGU_book" style="display:none">
                    <ul>
                        <li id="segu_departures_link" class="active_section"><img src="assets/plane-departure-solid.svg" alt="" class="icon-user-box">Salidas | Departures</li>
                        <li id="segu_arrivals_link" ><img src="assets/plane-arrival-solid.svg" alt="" class="icon-user-box">Llegadas | Arrivals</li>
                    </ul>

                    <div class="SEGU-departures" id="segu_departures_list">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Flight</th>
                                    <th></th>
                                    <th>Destination airport</th>
                                    <th>Departure time</th>
                                    <th>Gate</th>
                                    <th>Aircraft</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                $segu_departures_sentence = "SELECT * FROM `rfe_event` WHERE ICAO_salida = 'SEGU' ORDER BY hora_salida ASC";
                                $segu_departures_exe = mysqli_query($conexion,$segu_departures_sentence);

                                foreach($segu_departures_exe as $flights_seqm){ ?>

                                    <tr>
                                    <td><img class="logo_airline" src="assets/airlines/<?php switch($flights_seqm['logo_aerolinea']){
                                            case "TAE":
                                                echo "TAE";
                                                break;
                                            case "LNE":
                                                echo "LNE";
                                                break;
                                            case "CMP":
                                                echo "CMP";
                                                break;
                                            case "GLG":
                                                echo "GLG";
                                                break;
                                            case "UPS":
                                                echo "UPS";
                                                break;
                                            case "KLM":
                                                echo "KLM";
                                                break;
                                            case "IBE":
                                                echo "IBE";
                                                break;
                                            case "MPH":
                                                echo "MPH";
                                                break;
                                            case "HC":
                                                echo "PF";
                                                break;
                                            case "N":
                                                echo "PF";
                                                break;
                                            case "CLX":
                                                echo "CLX";
                                                break;
                                            case "LCO":
                                                echo "LCO";
                                                break;
                                            case "QTR":
                                                echo "QTR";
                                                break;
                                            case "UAE":
                                                echo "UAE";
                                                break;
                                        }
                                        

                                        ?>.png" alt=""></td>
                                        <td><?php echo $flights_seqm['numero_vuelo']; ?></td>
                                        <td><img style="border-radius: 5px; weight: 40px; height: 27px" src="https://flagcdn.com/w40/<?php echo strtolower($flights_seqm['pais_llegada'])?>.png" alt=""></td>
                                        <td><?php echo $flights_seqm['ICAO_llegada'].' - '.$flights_seqm['aeropuerto_llegada']; ?></td>
                                        <td><?php echo $flights_seqm['hora_salida'].'z'; ?></td>
                                        <td><?php if($flights_seqm['spot'] == ""){
                                            echo "--";
                                            }else{
                                                echo $flights_seqm['spot'];
                                        }; ?></td>
                                        <td><?php echo $flights_seqm['tipo_aeronave']; ?></td>
                                        <td>
                                            <?php 
                                            
                                            $id_vuelo = $flights_seqm['id'];

                                            if($flights_seqm['reservacion'] == 0){

                                                $id_vuelo = base64_encode($id_vuelo);
                                                $id_vuelo = base64_encode($id_vuelo);
                                                $id_vuelo = base64_encode($id_vuelo);
                                                $id_vuelo = base64_encode($id_vuelo);

                                                if($seleccion_de_vuelo == true){
                                                    echo "<a href='php/book_flight.php?id_vuelo=$id_vuelo' class='rfe-button available-button'>Available</a>";
                                                }else{
                                                    echo "<a class='rfe-button available-button no-event'>Available</a>";
                                                }
                                            
                                            }else if($flights_seqm['reservacion'] == 1 && $flights_seqm['confirmacion'] == 0){
                                                
                                                echo "<a href='' class='rfe-button waiting-button'>Waiting confirmation</a>";
                                            
                                            }else if($flights_seqm['reservacion'] == 1 && $flights_seqm['confirmacion'] == 1){
                                                
                                                echo "<a href='' class='rfe-button booked-button'>Booked by <strong>".$flights_seqm['vid']."</strong></a>";
                                            }
                                            
                                            ?>
                                        </td>
                                    </tr>
                                
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="SEGU-arrivals" id="segu_arrivals_list" style="display:none"> 
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Flight</th>
                                    <th></th>
                                    <th>Departure airport</th>
                                    <th>Departure time</th>
                                    <th>Arrival time</th>
                                    <th>Gate</th>
                                    <th>Aircraft</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                $segu_arrivals_sentence = "SELECT * FROM `rfe_event` WHERE ICAO_llegada = 'SEGU' ORDER BY hora_salida ASC";
                                $segu_arrivals_exe = mysqli_query($conexion,$segu_arrivals_sentence);

                                foreach($segu_arrivals_exe as $flights_seqm){ ?>

                                    <tr>
                                    <td><img class="logo_airline" src="assets/airlines/<?php switch($flights_seqm['logo_aerolinea']){
                                            case "TAE":
                                                echo "TAE";
                                                break;
                                            case "LNE":
                                                echo "LNE";
                                                break;
                                            case "CMP":
                                                echo "CMP";
                                                break;
                                            case "GLG":
                                                echo "GLG";
                                                break;
                                            case "UPS":
                                                echo "UPS";
                                                break;
                                            case "KLM":
                                                echo "KLM";
                                                break;
                                            case "IBE":
                                                echo "IBE";
                                                break;
                                            case "MPH":
                                                echo "MPH";
                                                break;
                                            case "HC":
                                                echo "PF";
                                                break;
                                            case "N":
                                                echo "PF";
                                                break;
                                            case "CLX":
                                                echo "CLX";
                                                break;
                                            case "LCO":
                                                echo "LCO";
                                                break;
                                            case "QTR":
                                                echo "QTR";
                                                break;
                                            case "UAE":
                                                echo "UAE";
                                                break;
                                        }
                                        

                                        ?>.png" alt=""></td>
                                        <td><?php echo $flights_seqm['numero_vuelo']; ?></td>
                                        <td><img style="border-radius: 5px; weight: 40px; height: 27px" src="https://flagcdn.com/w40/<?php echo strtolower($flights_seqm['pais_salida'])?>.png" alt=""></td>
                                        <td><?php echo $flights_seqm['ICAO_salida'].' - '.$flights_seqm['aeropuerto_salida']; ?></td>
                                        <td><?php echo $flights_seqm['hora_salida'].'z'; ?></td>
                                        <td><?php if($flights_seqm['hora_llegada'] == ""){
                                            echo "-----------";
                                        }else{
                                            echo $flights_seqm['hora_llegada'].'z';
                                        }; ?></td>
                                        <td><?php if($flights_seqm['spot'] == ""){
                                            echo "--";
                                            }else{
                                                echo $flights_seqm['spot'];
                                        }; ?></td>
                                        <td><?php echo $flights_seqm['tipo_aeronave']; ?></td>
                                        <td>
                                            <?php 
                                            
                                            $id_vuelo = $flights_seqm['id'];

                                            if($flights_seqm['reservacion'] == 0){

                                                $id_vuelo = base64_encode($id_vuelo);
                                                $id_vuelo = base64_encode($id_vuelo);
                                                $id_vuelo = base64_encode($id_vuelo);
                                                $id_vuelo = base64_encode($id_vuelo);

                                                if($seleccion_de_vuelo == true){
                                                    echo "<a href='php/book_flight.php?id_vuelo=$id_vuelo' class='rfe-button available-button'>Available</a>";
                                                }else{
                                                    echo "<a class='rfe-button available-button no-event'>Available</a>";
                                                }
                                            
                                            }else if($flights_seqm['reservacion'] == 1 && $flights_seqm['confirmacion'] == 0){
                                                
                                                echo "<a href='' class='rfe-button waiting-button'>Waiting confirmation</a>";
                                            
                                            }else if($flights_seqm['reservacion'] == 1 && $flights_seqm['confirmacion'] == 1){
                                                
                                                echo "<a href='' class='rfe-button booked-button'>Booked by <strong>".$flights_seqm['vid']."</strong></a>";
                                            }
                                            
                                            ?>
                                        </td>
                                    </tr>
                                
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>











            </div>
        </div>
    </div>
</section>

<?php

if(isset($_GET["status"])){
    $status = $_GET["status"];

    if($status == "booked"){
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Successfully scheduled flight',
                text: 'Your flight has been scheduled. Please, check your email and confirm the flight (Check the SPAM folder in case it does not appear in the main section)',
            })
        </script>";
    }
    if($status == "nobooked"){
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Someone else already took this flight',
                text: 'Looks like someone else booked this flight. Try another or contact a staff through discord)',
            })
        </script>";
    }
    if($status == "exceeded"){
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'You cannot schedule more flights',
                text: 'You have exceeded the maximum number of flights that you can register in the event. If you think it is an error, contact a Staff at discord by tagging the Webmaster)',
            })
        </script>";
    }
    if($status == "noemail"){
        echo "<script>
            Swal.fire({
                icon: 'warning',
                title: 'You have not registered an email',
                text: 'To receive the confirmation email, you must add a valid email. Confirm it on this page or on the dashboard in the profile section)',
            })
        </script>";
    }
}



?>

<script src="js/rfe.js"></script>
<script src="js/rfe_confirm_email.js"></script>

    
</body>
</html>
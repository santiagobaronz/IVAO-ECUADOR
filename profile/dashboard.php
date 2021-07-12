<?php require 'modules/sessions.php'; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Meta Data -->

        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        />
        <title>Dashboard de <?= $_SESSION['nombre'].' '.$_SESSION['apellido']; ?></title>


        <!-- Style Links -->

        <link rel="icon" href="../assets/img/logo.ico" />
        <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" href="../dist/flexboxgrid.min.css" />
        <link rel="stylesheet" href="../css/fonts.css" />

        <!-- WebSite Scripts -->

        <script src="../js/jquery-3.6.0.js"></script>

    </head>

    <body>
    <!-- Initial page load -->

    <section class="contenedor-dashboard">

        <?php  require 'modules/menu.php'; ?>

        <div class="contents open menu-full-width" id="contents-id">

            <div class="menu-top">
                <img src="assets/menu1.png" alt="" class="menu-icon" id="icon-menu-toggle">
            </div>

            <div class="content-inside">
                <div class="content-fist-info">
                    <div class="icon-div">
                        <span class="icon-airplane icon-white icon-cfi"></span>
                    </div>
                    <div class="text-cfi">
                        <p class="wlc-text">Bienvenid@ de nuevo <?php echo $_SESSION['nombre'] ?></p>
                        <p class="wlc-menu">Este es el inicio del dashboard</p>
                    </div>

                    <?php
                    
                    include '../php/connect.php';

                    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE vid = '$vid'");
                    
                    foreach($verificar_correo as $user_info){
                        if($user_info["correo_electronico"] == null){ ?>

                    <div class="confirm-email">
                        <div class="confirm-email-box" id="box_update_mail">
                            <p id="text_update_mail"><?php echo $user_info["nombre"]?>, no has confirmado tu email.</p>
                            <input id="input_update_mail" class="input_update_mail" type="text" style="display: none;" placeholder="Escribe tu email aquí...">
                            <button id="btn_update_mail">Confirmar ahora</button>
                            <button id="btn_confirm_mail" style="display: none;">Actualizar email</button>
                        </div>
                    </div>

                    <?php } } ?>



                </div>
            </div>

            <?php
            
            if(isset($_GET["section"])){
                $seccion = $_GET["section"];
            }
            
            ?>

            <div class="content-menu">
                <div class="menu-home">
                    <ul>
                        <li id="li_inicio_db" <?php if(isset($seccion)){if($seccion == "inicio"){echo "class='active-link'";};}else{echo "class='active-link'";}; ?>>Inicio</li>
                        <li id="li_novedades_db" <?php if(isset($seccion)){if($seccion == "news"){echo "class='active-link'";};}; ?>>Novedades</li>
                        <li><a href="https://webeye.ivao.aero/" target="blank" style="text-decoration:none; color: #A4A4A4;">Mapa en vivo</a></li>
                        <li id="li_calendario_db" <?php if(isset($seccion)){if($seccion == "calendar"){echo "class='active-link'";};}; ?>>Calendario</li>
                        <li id="li_estadisticas_db" <?php if(isset($seccion)){if($seccion == "statistics"){echo "class='active-link'";};}; ?>>Estadisticas</li>
                        <li id="li_perfil_db" <?php if(isset($seccion)){if($seccion == "profile"){echo "class='active-link'";};}; ?>>Perfil IVAO</li>
                    </ul>
                </div>
                <?php include 'modules/alert-img.php'; ?>
            </div>

            <div class="sections-dashboard">

                <div class="inicio" id="p_inicio_db" <?php if(isset($seccion)){if($seccion != "inicio"){echo "style='display:none'";};}; ?>>

                    <?php require 'modules/statistics.php'; ?>
                    
                    <?php
                        require_once "../php/connect.php";
                        $sql_noticias = "select * from noticias order by id desc limit 1";
                        $res_noticias = mysqli_query($conexion, $sql_noticias);
                        while ($noticias = mysqli_fetch_array($res_noticias)) {

                            $nombre_evento = $noticias['titulo'];
                            $descripcion_evento = $noticias['detalle'];
                            $img_evento = $noticias['link_imagen'];
                            $descripcion_imagen = $noticias['desc_imagen'];
                            $fecha_evento = $noticias['fecha_larga'];
                            $estado = $noticias['estado'];
                            $link_evento = $noticias["link_evento"];


                        }
                    ?>
                    
                    <div class="events">
                        <h3 class="events-title">Información más reciente de la división</h3>
                        <div class="events-cards">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card-unitary-events">
                                        <img src="<?php echo $img_evento; ?>" alt="<?php echo $descripcion_imagen; ?>" class="img_events">
                                        <p class="event-date <?php if($estado=='Finalizado'){echo 'event-ended';}else if($estado=='Activo'){echo 'active-event';}?>"><?php echo $fecha_evento; ?></p>
                                        <div class="info-event">
                                            <h3 class="event-title"><?php echo $nombre_evento; ?></h3>
                                            <p class="event-desc"><?php echo $descripcion_evento; ?></p>
                                            <a href="<?php echo $link_evento; ?>" class="event-btn">Ver más información del evento</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card-unitary-calendar">
                                        <div class="title-calendar">
                                            <span class="icon-calendar icon-gray menu-icon"></span>
                                            <h3>Proximos eventos de la división</h3>
                                            <p>Consulta los proximos eventos programados de la división a continuación:</p>
                                        </div>    

                                        <?php 
                                        
                                        $fecha_hoy = date('Y-m-d');
                                        require_once "../php/connect.php";
                                        $sql_calendario = "select * from calendario where fecha_corta >= '$fecha_hoy' order by fecha_corta asc limit 5";
                                        $res_calendario = mysqli_query($conexion, $sql_calendario);
                                        $total_calendario = mysqli_num_rows($res_calendario);
                                        while ($calendario = mysqli_fetch_array($res_calendario)) {

                                            

                                            $objFecha = new DateTime($calendario['fecha_corta']);
                                            $mes= $objFecha->format('n');
                                            $dia= $objFecha->format('d');
                                            $año= $objFecha->format('Y');
                                        
                                        ?>

                                        <div class="calendary-cards-date">
                                            <div class="card-event-date">
                                                <div class="day-event">
                                                    <p><?php echo $dia;?></p>
                                                </div>
                                                <div class="info-event-details">
                                                    <p><?php echo $calendario['nombre_evento']; ?></p>
                                                    <!-- Recomendado 32 caracteres, no más por que no se ven en el calendario del home -->
                                                    <p><?php 
                                                    
                                                    switch($mes){
                                                        case 1:
                                                            echo 'Enero';
                                                            break;
                                                        case 2:
                                                            echo 'Febrero';
                                                            break;
                                                        case 3:
                                                            echo 'Marzo';
                                                            break;
                                                        case 4:
                                                            echo 'Abril';
                                                            break;
                                                        case 5:
                                                            echo 'Mayo';
                                                            break;
                                                        case 6:
                                                            echo 'Junio';
                                                            break;
                                                        case 7:
                                                            echo 'Julio';
                                                            break;
                                                        case 8:
                                                            echo 'Agosto';
                                                            break;
                                                        case 9:
                                                            echo 'Septiembre';
                                                            break;
                                                        case 10:
                                                            echo 'Octubre';
                                                            break;
                                                        case 11:
                                                            echo 'Noviembre';
                                                            break;
                                                        case 12:
                                                            echo 'Diciembre';
                                                            break;
                                                    } ?>, <?php echo $año ?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <?php } ?>

                                        <?php 
                                        if($total_calendario <= 4){
                                            echo "<p class='no-more-events'>No se han encontrado más eventos programados. Para ver todos los eventos, da <a href='dashboard.php?section=calendar'>click aquí</a></p>";
                                        }
                                        ?>
                                        
                                        
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card-unitary-social-network">
                                        <div class="title-social-network">
                                            <span class="icon-share2 icon-gray menu-icon"></span>
                                            <h3>Novedades de nuestro Facebook</h3>
                                        </div>
                                        <div class="fb-page fb-section-dashboard" data-href="https://www.facebook.com/IvaoEcuador/" data-tabs="timeline" data-width="450" data-height="430" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="metar-section">
                        <h3 class="metar-title">Búsqueda de información METAR y TAF</h3>
                        <div class="metar-finder-box">
                            <div class="metar-finder-box-input">
                                <p>Consultar METAR</p>
                                <input type="text" class="metar-finder" placeholder="Ingresa el código ICAO del aeropuerto a consultar..." id="metar-finder">
                                <span class="icon-search icon-search-metar icon-white" id="btn-icon"></span>
                                <button type="submit" id="btn-button"></button>
                            </div>
                            <div class="resultado-metar-box" id="metar-box">
                                <div class="resultado-metar" id="resultado-metar"></div>
                                <span class='icon-cross icon-metar' id='icon-delete-metar'></span>
                            </div>
                        </div>

                        <div class="taf-finder-box">
                            <div class="taf-finder-box-input">
                                <p>Consultar TAF</p>
                                <input type="text" class="taf-finder" placeholder="Ingresa el código ICAO del aeropuerto a consultar..." id="taf-finder">
                                <span class="icon-search icon-search-taf icon-white" id="btn-icon-taf"></span>
                                <button type="submit" id="btn-button-taf"></button>
                            </div>
                            <div class="resultado-taf-box" id="taf-box">
                                <div class="resultado-taf" id="resultado-taf"></div>
                                <span class='icon-cross icon-taf' id='icon-delete-taf'></span>
                            </div>
                        </div>
                    </div>

                    <div class="online-users">
                        <h3>Pilotos y controladores aéreos conectados</h3>
                        <div class="online-users-box">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="online-pilots-national">
                                        <table>
                                            <caption><img src="assets/plane-departure-solid.svg" alt="" class="icon-user-box">Salidas | Departures</caption>
                                            <thead>
                                                <tr>
                                                    <th>Vuelo</th>
                                                    <th>Salida</th>
                                                    <th>Llegada</th>
                                                    <th>Hora salida</th>
                                                    <th>Estado actual</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                include 'php/flights_atc.php';

                                                foreach($arrayPilotosSalidas as $salidas_nacionales){ ?>
                                                
                                                <tr class="column-user-box">
                                                    <td width="150px"><?php echo $salidas_nacionales["CallSign"]?></td>
                                                    <td><?php echo $salidas_nacionales["Origen"]?></td>
                                                    <td><?php echo $salidas_nacionales["Destino"]?></td>
                                                    <td><?php echo $salidas_nacionales["DepartureTime"]?></td>
                                                    <td><?php if($salidas_nacionales["Estado"] == 0){echo "En vuelo";}else{echo "En plataforma";} ?></td>
                                                </tr>
                                                <?php } 
                                                
                                                foreach($arrayPilotosSalidasInternacionales as $salidas_internacionales){ ?>

                                                <tr class="column-user-box">
                                                    <td width="150px"><?php echo $salidas_internacionales["CallSign"]?></td>
                                                    <td><?php echo $salidas_internacionales["Origen"]?></td>
                                                    <td><?php echo $salidas_internacionales["Destino"]?></td>
                                                    <td><?php echo $salidas_internacionales["DepartureTime"]?></td>
                                                    <td><?php if($salidas_internacionales["Estado"] == 0){echo "En vuelo";}else{echo "En plataforma";} ?></td>
                                                </tr>


                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="online-pilots-international">
                                        <table>
                                            <caption><img src="assets/plane-arrival-solid.svg" alt="" class="icon-user-box">Llegadas | Arrivals</caption>
                                            <thead>
                                                <tr>
                                                    <th>Vuelo</th>
                                                    <th>Salida</th>
                                                    <th>Llegada</th>
                                                    <th>Hora salida</th>
                                                    <th>Estado actual</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php

                                                foreach($arrayPilotosLLegadas as $llegadas_nacionales){ ?>
                                                
                                                <tr class="column-user-box">
                                                    <td width="150px"><?php echo $llegadas_nacionales["CallSign"]?></td>
                                                    <td><?php echo $llegadas_nacionales["Origen"]?></td>
                                                    <td><?php echo $llegadas_nacionales["Destino"]?></td>
                                                    <td><?php echo $llegadas_nacionales["DepartureTime"]?></td>
                                                    <td><?php if($llegadas_nacionales["Estado"] == 0){echo "En vuelo";}else{echo "En plataforma";} ?></td>
                                                </tr>
                                                <?php } 
                                                
                                                foreach($arrayPilotosLLegadasInternacionales as $llegadas_internacionales){ ?>

                                                <tr class="column-user-box">
                                                    <td width="150px"><?php echo $llegadas_internacionales["CallSign"]?></td>
                                                    <td><?php echo $llegadas_internacionales["Origen"]?></td>
                                                    <td><?php echo $llegadas_internacionales["Destino"]?></td>
                                                    <td><?php echo $llegadas_internacionales["DepartureTime"]?></td>
                                                    <td><?php if($llegadas_internacionales["Estado"] == 0){echo "En vuelo";}else{echo "En plataforma";} ?></td>
                                                </tr>


                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if(count($arrayAtc) != 0){ ?>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="atc-user-list">
                                            <table>
                                                <caption><img src="assets/broadcast-tower-solid.svg" alt="" class="icon-user-box">Control ATC | ATC Control</caption>
                                                <thead>
                                                    <tr>
                                                        <th>Posición</th>
                                                        <th>Frecuencia</th>
                                                        <th>METAR de la estación</th>
                                                        <th>Cartas</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    foreach($arrayAtc as $atc_online){ ?>
                                                    
                                                    <tr class="column-user-box">
                                                        <td><?php echo $atc_online["CallSign"]?></td>
                                                        <td><?php echo $atc_online["Frecuencia"]?></td>
                                                        <td><?php $icao = $atc_online["Cartas"];
                                                            $url = 'http://wx.ivao.aero/metar.php?id='.$icao;
                                                            $page = file_get_contents($url);
                                                            echo $page;
                                                            ?>
                                                        </td>
                                                        <td><?php echo $atc_online["Cartas"] ?></td>
                                                    </tr>

                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="novedades" id="p_novedades_db" <?php if(isset($seccion)){if($seccion != "news"){echo "style='display:none'";};}else{echo "style='display:none'";}; ?>>
                    <h3 class="news-title">Lista de novedades de la división</h3>
                    <?php

                    $listar_novedades = "SELECT * FROM novedades ORDER BY id DESC";
                    $ejecucion_novedades = mysqli_query($conexion,$listar_novedades);

                    while($lista_novedades = mysqli_fetch_array($ejecucion_novedades)){ ?>

                        <div class="news-box">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-3 col-xs-3">
                                    <img src="<?php echo $lista_novedades["img_novedad"]?>" alt="" class="news-img">
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-3 col-xs-3">
                                    <div class="news-box-text">
                                        <h3><?php echo $lista_novedades["titulo_novedad"] ?></h3>
                                        <p><?php echo $lista_novedades["descripcion_novedad"] ?></p>
                                        <p><strong>Más información en:</strong> <a target="blank" class="news-links" href="<?php echo $lista_novedades["link_novedad"] ?>"><?php echo $lista_novedades["link_novedad"] ?></a></p>
                                        <p><i>Publicado el: <?php echo $lista_novedades["fecha_novedad"] ?></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php } ?>
                </div>

                <div class="mapa_en_vivo">
                </div>

                <div class="calendario" id="p_calendario_db" <?php if(isset($seccion)){if($seccion != "calendar"){echo "style='display:none'";};}else{echo "style='display:none'";};; ?>>
                    <h3 class="calendar-title">Calendario de eventos de la división</h3>
                    <div class="row row-title">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <div class="empty-square">
                                <span class="icon-calendar icon-white icon-calendar-section"></span>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <div class="row-title-calendar">
                                <h3>CALENDARIO</h3>
                            </div>
                        </div>
                    </div>

                    <?php 
                        require 'modules/calendar_events.php';
                    ?>




                </div>
                
                <div class="estadisticas" id="p_estadisticas_db" <?php if(isset($seccion)){if($seccion != "statistics"){echo "style='display:none'";};}else{echo "style='display:none'";};; ?>>
                    <?php require 'modules/statistics.php'; ?>
                    <h3 class="statistics-title">Estadísticas de la división</h3>
                    <div class="general-statistics">
                        <img src="assets/statistics_image.jpg" alt="" class="statistics-image">
                        <img src="assets/logo_brand_text.png" alt="" class="statistics-logo">
                        <div class="unitary-stats">
                            <div class="unitary-stats-box">
                            <p>518</p>
                            <p>Usuarios registrados</p>
                            </div>
                            <div class="unitary-stats-box">
                            <p>79</p>
                            <p>Usuarios activos</p>
                            </div>
                            <div class="unitary-stats-box">
                            <p>104075h</p>
                            <p>Horas de la división</p>
                            </div>
                        </div>
                    </div>
                    <div class="tours-statistics">
                        <img src="assets/statistics_image2.jpg" alt="" class="statistics-image">
                        <div class="unitary-stats2">
                            <div class="unitary-stats-box">
                            <p>10</p>
                            <p>Tours activos</p>
                            </div>
                            <div class="unitary-stats-box">
                            <p>5</p>
                            <p>Eventos para puntos</p>
                            </div>
                            <div class="unitary-stats-box">
                            <p>103</p>
                            <p>Medallas entregadas</p>
                            </div>
                        </div>
                        <img src="assets/tours.png" alt="" class="statistics2-logo">
                    </div>
                </div>

                <div class="perfil_ivao" id="p_perfil_db" <?php if(isset($seccion)){if($seccion != "profile"){echo "style='display:none'";};}else{echo "style='display:none'";};; ?>>
                    <?php 
                        require 'modules/profile_data.php';
                    ?>
                    <h3 class="profile-title">Tu perfil de IVAO Ecuador</h3>
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="box-user-info">
                                <p class="desc-profile-section">Hola <strong><?php echo $userData_name; ?></strong>, bienvenid@ a la sección de tu perfil. Aquí podrás encontrar la información vinculada a tu cuenta, así mismo la posibilidad de agregar un correo electrónico para validar tu cuenta y poderte registrar en eventos exclusivos de la división así como recibir correos relacionados con nuevos eventos y actividades de IVAO ECUADOR.</p>
                                <div class="unitary-box-user">
                                    <p>Nombres y apellidos del usuario</p>
                                    <p><?php echo $userData_name.' '.$userData_apellido; ?></p>
                                </div>
                                <div class="unitary-box-user">
                                    <p>Correo electrónico</p>
                                    <p id="user_info_email"><?php if($userData_correo_electronico == null){
                                        echo "No se ha registrado ningún correo electrónico. Para registrar uno, usa el módulo de la derecha o en la parte superior del dashboard.";
                                        }else{
                                            echo $userData_correo_electronico;
                                        }  
                                        ?>
                                    </p>
                                </div>
                                <div class="unitary-box-user">
                                    <p>VID</p>
                                    <p><?php echo $userData_vid; ?></p>
                                </div>
                                <div class="unitary-box-user">
                                    <p>Horas como Piloto</p>
                                    <p><?php echo $userData_horasPILOT.' horas'; ?></p>
                                </div>
                                <div class="unitary-box-user">
                                    <p>Horas como ATC</p>
                                    <p><?php echo $userData_horasATC.' horas'; ?></p>
                                </div>
                                <p class="profile-label-options">Opciones de usuario:</p>
                                <div class="unitary-box-user">
                                    <p>Notificaciones de Email</p>
                                    <p>Recibe notificaciones cuando hay un nuevo evento en la división</p>
                                    <input type="checkbox" id="checkbox_emails" <?php if($userData_correo_electronico == null){echo 'readonly="readonly" onclick="javascript: return false;"';}; ?><?php if($userData_enviar_correos == 1){echo "checked";}?>>
                                </div>
                                <button class="profile-save-changes" type="submit" id="save_profile_changes" >Guardar Cambios</button>
                                <div id="changes_saved"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="box-user-profile">
                                <img src="assets/default-user.png" alt="" class="img-user-profile">
                                <p><?php echo $userData_name.' '.$userData_apellido; ?></p>
                                <p id="user_profile_email"><?php if($userData_correo_electronico == null){
                                        echo "No se ha registrado ningún correo electrónico.";
                                        }else{
                                            echo $userData_correo_electronico;
                                        }  
                                        ?>
                                </p>
                                <?php if($userData_correo_confirmado == 1){ ?>
                                    <div class="check-box checkbox-true" id="checkbox_true">
                                        <img src="assets/verificated.png" alt="" class="checkbox-info checkbox-img">
                                        <p class="checkbox-info checkbox-text">Tu cuenta esta verificada</p>
                                    </div>
                                <?php }else{ ?>
                                    <div class="check-box checkbox-false" id="checkbox_false">
                                        <img src="assets/no-verificated.png" id="account_not_verified_img" alt="" class="checkbox-info checkbox-img">
                                        <p class="checkbox-info checkbox-text" id="account_not_verified_p">Tu cuenta no esta verificada</p>
                                    </div>
                                    <div class="confirm-account" id="confirm_account">
                                        <p>Para confirmar tu cuenta, ingresa un correo electrónico válido.</p>
                                        <div class="confirm-account-form">
                                            <input type="email" id="confirm_account_input">
                                            <button type="submit" id="confirm_account_button">Confirmar</button>
                                        </div>
                                        <p class="mail-disclaimer">Al confirmar, tu correo será guardado y a él se enviarán notificaciones referentes a nuevos eventos y novedades de la división. Para dejar de recibir estos correos, desactiva las notificaciones de correo en tu perfil.</p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>

            </div>
        </div>
    </section>


<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v10.0" nonce="hDOx6cZf"></script>


    <script src="js/main.js"></script>
    </body>
</html>
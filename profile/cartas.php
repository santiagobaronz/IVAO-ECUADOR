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
        <title>Cartas de Ecuador</title>


        <!-- Style Links -->

        <link rel="icon" href="../assets/img/logo.ico" />
        <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" href="../dist/flexboxgrid.min.css" />
        <link rel="stylesheet" href="../css/fonts.css" />

        <!-- WebSite Scripts -->

        <script src="../js/jquery-3.6.0.js"></script>

    </head>
<body>

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

        <div class="charts-section">
            <?php include 'modules/alert-img.php'; ?>
            <h3 class="charts-title"> Cartas aeronauticas de Ecuador</h3>
            <p class="charts-description">La carta aeronáutica se define como la representación de una porción de la tierra, su relieve y construcciones, diseñada especialmente para satisfacer los requisitos de la navegación aérea. Las cartas aeronáuticas contenidas en la AIP del Ecuador son editadas por la Dirección General de Aviación Civil, a través de la Gestión de Información Aeronáutica - Cartografía, para ser utilizadas por la aviación civil nacional e internacional.</p>
            <div class="charts-section-box">
                <div class="row">


                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/BALTRA.jpg" alt="Aeropuerto de BALTRA" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SEGS - BALTRA</p>
                                <a href="../sources/charts/SEGS - BALTRA.pdf" target="blank">Ver Carta de SEGS</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/CATAMAYO.jpg" alt="Aeropuerto de CATAMAYO" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SECA - CATAMAYO</p>
                                <a href="../sources/charts/SECA - CATAMAYO.pdf" target="blank">Ver Carta de SECA</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/COCA.jpg" alt="Aeropuerto de COCA" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SECO - COCA</p>
                                <a href="../sources/charts/SECO - COCA.pdf" target="blank">Ver Carta de SECO</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/CUENCA.jpg" alt="Aeropuerto de CUENCA" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SECU - CUENCA</p>
                                <a href="../sources/charts/SECU - CUENCA.pdf" target="blank">Ver Carta de SECU</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/GUAYAQUIL.jpg" alt="Aeropuerto de GUAYAQUIL" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SEGU - GUAYAQUIL</p>
                                <a href="../sources/charts/SEGU - GUAYAQUIL.pdf" target="blank">Ver Carta de SEGU</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/JUMANDY.jpeg" alt="Aeropuerto de JUMANDY" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SEJD - JUMANDY</p>
                                <a href="../sources/charts/SEJD - JUMANDY.pdf" target="blank">Ver Carta de SEJD</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/LATACUNGA.jpg" alt="Aeropuerto de LATACUNGA" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SELT - LATACUNGA</p>
                                <a href="../sources/charts/SELT - LATACUNGA.pdf" target="blank">Ver Carta de SELT</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/MACAS.jpg" alt="Aeropuerto de MACAS" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SEMC - MACAS</p>
                                <a href="../sources/charts/SEMC - MACAS.pdf" target="blank">Ver Carta de SEMC</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/MANTA.jpg" alt="Aeropuerto de MANTA" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SEMT - MANTA</p>
                                <a href="../sources/charts/SEMT - MANTA.pdf" target="blank">Ver Carta de SEMT</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/NUEVALOJA.jpg" alt="Aeropuerto de NUEVA LOJA" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SENL - NUEVA LOJA</p>
                                <a href="../sources/charts/SENL - NUEVA LOJA.pdf" target="blank">Ver Carta de SENL</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/QUITO.jpg" alt="Aeropuerto de QUITO" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SEQM - QUITO</p>
                                <a href="../sources/charts/SEQM - QUITO.pdf" target="blank">Ver Carta de SEQM</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/SALINAS.jpg" alt="Aeropuerto de SALINAS" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SESA - SALINAS</p>
                                <a href="../sources/charts/SESA - SALINAS.pdf" target="blank">Ver Carta de SESA</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/SANCRISTOBAL.jpg" alt="Aeropuerto de SAN CRISTOBAL" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SEST - SAN CRISTOBAL</p>
                                <a href="../sources/charts/SEST - SAN CRISTOBAL.pdf" target="blank">Ver Carta de SEST</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/SANTAROSA.jpg" alt="Aeropuerto de SANTA ROSA" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SERO - SANTA ROSA</p>
                                <a href="../sources/charts/SERO - SANTA ROSA.pdf" target="blank">Ver Carta de SERO</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/SANVICENTE.jpg" alt="Aeropuerto de SAN VICENTE" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SESV - SAN VICENTE</p>
                                <a href="../sources/charts/SESV - SAN VICENTE.pdf" target="blank">Ver Carta de SESV</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/SHELL.jpeg" alt="Aeropuerto de SHELL" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SESM - SHELL</p>
                                <a href="../sources/charts/SESM - SHELL.pdf" target="blank">Ver Carta de SESM</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/TACHINA.jpg" alt="Aeropuerto de TACHINA" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SETN - TACHINA</p>
                                <a href="../sources/charts/SETN - TACHINA.pdf" target="blank">Ver Carta de SETN</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/TARAPOA.jpg" alt="Aeropuerto de TARAPOA" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SETR - TARAPOA</p>
                                <a href="../sources/charts/SETR - TARAPOA.pdf" target="blank">Ver Carta de SETR</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="chart-box">
                            <img src="assets/airports/TULCAN.jpg" alt="Aeropuerto de TULCAN" class="chartbox-img">
                            <div class="chartbox-text">
                                <p>SETU - TULCAN</p>
                                <a href="../sources/charts/SETU - TULCAN.pdf" target="blank">Ver Carta de SETU</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>


<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v10.0" nonce="hDOx6cZf"></script>

    
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>

    <!-- Meta Data -->

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Events - IVAO Ecuador</title>

    <!-- Style Links -->

    <link rel="icon" href="../assets/img/logo.ico" />
	  <link rel="stylesheet" href="../css/supercss.css" />
    <link rel="stylesheet" href="../css/fonts.css" />
    <link rel="stylesheet" href="../dist/flexboxgrid.min.css" />
    <link rel="stylesheet" href="css/events.css">

    <!-- WebSite Scripts -->

        <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>

        <script src="../js/get_up.js"></script>
        <script src="../js/main.js"></script>
        <script src="../js/scroll.js"></script>
        <script src="../js/cont_user.js"></script>

</head>


<?php include '../php/presets/menu.php' ?>

<body>

    <div id="contenedor_carga">
        <div id="carga"><span class="icon-airplane"></span></div>
    </div>

    <section class="eventosimg">
        <div class="conimgeven" ><h1>Check out the latest events in the division!</h1></div>
    </section>

  
<div class="container-size">

    <section>
        <div class="firstinfo">
            <div class="titleevents">
                <h1>Here are all the events of the division!</h1>
            </div>
            <div class="descriptionevents">
                <p>Get to know our events, see their details and their rewards, we are eager to see you in each one of them participating and enjoying </p>
            </div>
        </div>
    </section>


    <!-- PHP and Mysql data -->

    <?php
require_once "../php/connect.php";
$sql = "select * from noticias order by id desc";
$res = mysqli_query($conexion, $sql);

while ($noticias = mysqli_fetch_array($res)) {
    ?>
        <section class="noticias_list">

            <div class="events_list">

                <div class="row">

                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <img class="imagen_evento" src="<?php echo $noticias['link_imagen']; ?>" alt="<?php echo $noticias['desc_imagen']; ?>">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="espec_evento">
                            <h1><?php echo $noticias['titulo']; ?></h1>
                            <p class="intro"><?php echo $noticias['detalle']; ?></p>
                            <p class="fecha_evento"> <b>Event date: </b><?php echo $noticias['fecha_larga']; ?></p>
                            <p class="hora_evento"> <b>Event time: </b><?php echo $noticias['hora']; ?> Zulu</p>
                            <p class="lugar_evento"> <b>Event place:</b> <?php echo $noticias['lugares']; ?></p>
                            <p class=" estado_evento"><b>Event status:</b> <?php echo $noticias['estado']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php }?>

    </div>

      <!-- Footer -->

        <?php include '../php/presets/footer.php'?>

    <!-- Page Load Script -->

    <script>
      window.onload = function () {
        var contenedor = document.getElementById("contenedor_carga");

        contenedor.style.visibility = "hidden";
        contenedor.style.opacity = "0";
      };
    </script>
  </body>
</html>
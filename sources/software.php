<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Meta Data -->

    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <title>Software - IVAO Ecuador</title>

    <!-- Style Links -->

    <link rel="icon" href="../assets/img/logo.ico" />
	  <link rel="stylesheet" href="../css/supercss.css" />
    <link rel="stylesheet" href="../css/fonts.css" />
    <link rel="stylesheet" href="../dist/flexboxgrid.min.css" />
    <link rel="stylesheet" href="css/sources.css" />
    <link rel="stylesheet" href="css/sectors.css" />

    <!-- WebSite Scripts -->

    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ></script>

    <script src="../js/get_up.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/scroll.js"></script>
    <script src="../js/cont_user.js"></script>
  </head>

  <body>
    <!-- Initial page load -->

    <div id="contenedor_carga">
      <div id="carga"><span class="icon-airplane"></span></div>
    </div>

    <!-- Header info | Nav section -->

    <?php include '../php/presets/menu.php' ?>

    <div class="img_software">
      <section class="banner_software">
        <div class="banner-content_software">
          <h1>
            Download the necessary software to increase your desire to fly!
          </h1>
        </div>
      </section>
    </div>

    <!-- Banner section -->

    <div class="container-size">

    <section>
      <div class="title_software">
        <h1>Enjoy the Software that Ivao provides!</h1>
        <p>
          Download the different tools that Ivao offers to carry the simulation
          through the skies. Remember also that on this same page You can find
          the Ecuador Sector Files updated by our developers.
        </p>
      </div>
    </section>

    <!-- Software information-->

    <section>
      <div class="programas">
        <div class="row">
          <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
            <img
              src="../assets/img/sd-ivac.jpg"
              alt=""
              class="img_software_small"
            />
            <h1 class="t_soft">Ivao ATC Client</h1>
            <p class="info_soft">
              The Ivao ATC Client is a tool designed to air traffic controllers,
              with functionalities related to those of the reality. This tool
              allows drivers to air traffic locate in which position is the
              aircraft, what is its height, its speed and many other things.
            </p>
            <a href="https://www.ivao.aero/softdev/ivac.asp" class="boton_vermas" target="_blank">
              <p>
                Learn more about this tool
              </p></a
            >
          </div>
          <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
            <img
              src="../assets/img/sd-ivap.jpg"
              alt=""
              class="img_software_small"
            />
            <h1 class="t_soft">Ivao Pilot Client</h1>
            <p class="info_soft">
              The Ivao Pilot Client is a targeted tool for those Pilots who wish
              to be part of the pilot community in Ivao. This tool allows you to
              connect to a server with who will be able to contact the different
              control units air on the net, see meteorological information of
              its airports And many other things.
            </p>
            <a href="https://www.ivao.aero/softdev/ivap.asp" class="boton_vermas" target="_blank">
              <p>Learn more about this tool</p></a
            >
          </div>
          <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
            <img
              src="../assets/img/utilidades.jpg"
              alt=""
              class="img_software_small"
            />
            <h1 class="t_soft">Network Utilites</h1>
            <p class="info_soft abajo">
              Within the network utilities provided by Ivao we can
              find libraries with large amounts of paintings from
              reality aircraft, a multi-layered interface to connect
              devices to the IVAO network through a single account,
              ATC training simulators and much more.
            </p>
            <a href="https://www.ivao.aero/softdev/ivai.asp" class="boton_vermas" target="_blank">
              <p>Learn more about this tool</p></a
            >
          </div>
        </div>
      </div>
    </section>

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

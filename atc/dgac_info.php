<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Meta Data -->

    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <title>DGAC Info - IVAO Ecuador</title>

    <!-- Style Links -->

    <link rel="icon" href="../assets/img/logo.ico" />
	  <link rel="stylesheet" href="../css/supercss.css" />
    <link rel="stylesheet" href="../css/fonts.css" />
    <link rel="stylesheet" href="../dist/flexboxgrid.min.css" />
    <link rel="stylesheet" href="css/2.css" />

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

    <div class="img_atcoperations">
      <section class="banner_atcoperations">
        <div class="banner-content_atcoperations">
          <h1>
            Discover our DGAC Manual
          </h1>
        </div>
      </section>
    </div>

    <div class="container-size">

    <div class="info_section">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="img_section">
            <img src="../assets/img/dgac.jpg" alt="" class="img_f" />
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="text_section">
            <h1>Check our Phraseology Manual to Pilots and ATC</h1>
            <p>
              Hello Pilots and ATC, below you can see and download the
              phraseology manual that you can use in all your operations.
              Remember that the correct use of communications improves the
              simulation on the network. In this manual, you will find some
              topics like:
            </p>
            <ul>
              <li>Abbreviations.</li>
              <li>Transfers.</li>
              <li>IFR and VFR operations.</li>
              <li>Authorizations.</li>
              <li>And more!</li>
            </ul>
            <p>Download the document here:</p>
            <a href="documents/DGAC - Manual de fraseología aeronáutica del Ecuador.pdf" target="_blank">Download the Phraseology Manual</a>
            <br>
            <hr>
            <br>
            <a href="documents/Manual-de-Gestión-del-Tránsito-Aéreo-NATS-MA-001.pdf" target="_blank" >Managment Manual of the Air Traffic</a>
            <br>
            <hr>
            <br>
            <a href="documents/DGAC - Procedimiento guía vectorial SEQM pista 36.pdf">Download the SEQM vector guide</a>
          </div>
        </div>
      </div>
    </div>

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

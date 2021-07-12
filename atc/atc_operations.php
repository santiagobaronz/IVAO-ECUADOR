<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Meta Data -->

    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <title>ATC Operations - IVAO Ecuador</title>

    <!-- Style Links -->

    <link rel="icon" href="../assets/img/logo.ico" />
	  <link rel="stylesheet" href="../css/supercss.css" />
    <link rel="stylesheet" href="../css/fonts.css" />
    <link rel="stylesheet" href="../dist/flexboxgrid.min.css" />
    <link rel="stylesheet" href="css/1.css" />

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
            Discover our ATC Operations
          </h1>
        </div>
      </section>
    </div>

    <div class="container-size">

    <div class="info_section">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="img_section">
            <img src="../assets/img/atcoperations.jpg" alt="" class="img_f" />
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="text_section">
            <h1>Check our ATC Operations Manual (QuickView for ATC)</h1>
            <p>
              Learn about how to be an ATC in Ecuador in our Local procedures
              documentation. In this document you will find some information like:
            </p>
            <ul>
              <li>Ecuador airspace.</li>
              <li>Flight levels.</li>
              <li>Radar separation.</li>
              <li>Special procedures for Quito TMA.</li>
              <li>SID, STAR and Approach procedures of every airport of Ecuador</li>
              <li>Communications, Airfield Informations and Navaids</li>
              <li>And more!</li>
            </ul>
            <p>Download the document here:</p>
            <a href="documents/IVAO Ecuador-QuickViewforATC.xlsx" target="_blank" >Download the ATC Operations Manual (QuickView for ATC)</a>
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

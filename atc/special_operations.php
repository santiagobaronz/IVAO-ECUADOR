<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Meta Data -->

    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <title>Special Operations - IVAO Ecuador</title>

    <!-- Style Links -->

    <link rel="icon" href="../assets/img/logo.ico" />
	  <link rel="stylesheet" href="../css/supercss.css" />
    <link rel="stylesheet" href="../css/fonts.css" />
    <link rel="stylesheet" href="../dist/flexboxgrid.min.css" />
    <link rel="stylesheet" href="css/4.css" />

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
            Discover our Special Operations
          </h1>
        </div>
      </section>
    </div>

    <div class="container-size">

    <div class="info_section">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="img_section">
            <img
              src="../assets/img/special-operations.jpg"
              alt=""
              class="img_f"
            />
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="text_section">
            <h1>Check the Special Operations information of Ecuador</h1>
            <p>
              We invite you to observe the special operations of Ecuador. Discover
              topics about traffic patterns, altitudes and flight levels,
              airspace classes more.
            </p>
            <p>
              Remember that this information is important to increase simulation
              levels and ensure that good procedures are executed.
            </p>
            <p>
              If you want to watch this document, just click below:
            </p>
            <a href="documents/ECUADOR SPECIAL OPERATIONS ORDER C ENGLISH.pdf"
            target="_blank">Download the Special Operation information of Ecuador (English)</a>
            <br>
            <hr>
            <br>
            <a href="documents/ECUADOR ORDEN OPERACIONES ESPECIALES C ESPAÑOL.pdf"
            target="_blank">Descarga la información de Operaciones Especiales de Ecuador (Español)</a>
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

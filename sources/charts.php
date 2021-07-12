<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Meta Data -->

    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <title>Charts - IVAO Ecuador</title>

    <!-- Style Links -->

    <link rel="icon" href="../assets/img/logo.ico" />
	  <link rel="stylesheet" href="../css/supercss.css" />
    <link rel="stylesheet" href="../css/fonts.css" />
    <link rel="stylesheet" href="../dist/flexboxgrid.min.css" />
    <link rel="stylesheet" href="css/sources.css" />
    <link rel="stylesheet" href="css/charts.css" />

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
    <div id="contenedor_carga">
      <div id="carga"><span class="icon-airplane"></span></div>
    </div>

    <?php include '../php/presets/menu.php' ?>


    <div class="img_cartas">
      <section class="banner_cartas">
        <div class="banner-content_cartas">
          <h1>
            Ops! This section is undergoing maintenance
          </h1>
        </div>
      </section>
    </div>

    <section>
      <div class="container-size">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <img src="../assets/img/logo.png" alt="Logo de Ivao Ecuador" class="logo-charts">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h3 class="title-charts"> Ivao Ecuador division is looking for alternatives so that you can access the aeronautical charts of Ecuador</h3>
          </div>
        </div>
      </div>
    </section>

  
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

<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Meta Data -->

    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <title>Sector Files - IVAO Ecuador</title>

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

    <div class="img_atcoperations">
      <section class="banner_atcoperations">
        <div class="banner-content_atcoperations">
          <h1 class="title-sectorfiles">
            Download the Sector Files of Ecuador
          </h1>
        </div>
      </section>
    </div>

    <div class="container-size">

    <section>
        <div class="first_info">
            <h1>
                Download the file to you need for you Software
            </h1>
            <p>
                We designed this sector files for everybody that wants to control in Ecuador with any Software like Aurora o Ivac1.
            </p>
        </div>
    </section>

    <div class="files">

    <section>
        <div class="sector_file">
          <div class="row">
            <div class="col-lg-8 col-md-5 col-sm-12 col-xs-12">
              <div class="info_sector">
                <p>
                  To download the latest Sector file to <b>Ivac1</b> click download!
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
              <div class="btn_sector">
                <a href="sectorf/Ivac1 - Sector File - Ecuador.rar" download="SectorFileIvac1Ecuador-2020"> Download</a>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section>
        <div class="sector_file">
          <div class="row">
            <div class="col-lg-8 col-md-5 col-sm-12 col-xs-12">
              <div class="info_sector">
                <p>
                  To download the latest Sector file to
                  <b>Aurora</b> click download!
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
              <div class="btn_sector">
                <a href="sectorf/Aurora - Sector File - Ecuador.zip" download="SectorFileAuroraEcuador-2020"> Download</a>
              </div>
            </div>
          </div>
        </div>
    </section>

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

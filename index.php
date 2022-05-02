<?php 

  require "php/login_ivao.php";

  if(isset($_SESSION['cookie_name'])){
    $_SESSION['nombre'] = utf8_decode($user_array->firstname);
    $_SESSION['apellido'] = utf8_decode($user_array->lastname);
    $_SESSION['vid'] = utf8_decode($user_array->vid);
    $_SESSION['rating'] = utf8_decode($user_array->rating);
    $_SESSION['ratingatc'] = utf8_decode($user_array->ratingatc);
    $_SESSION['ratingpilot'] = utf8_decode($user_array->ratingpilot);
    $_SESSION['division'] = utf8_decode($user_array->division);
    $_SESSION['pais'] = utf8_decode($user_array->country);
    $_SESSION['skype'] = utf8_decode($user_array->skype);
    $_SESSION['horas_atc'] = utf8_decode($user_array->hours_atc);
    $_SESSION['horas_piloto'] = utf8_decode($user_array->hours_pilot);
    $_SESSION['staff'] = utf8_decode($user_array->staff);
}

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Meta Data -->

    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <title>IVAO Ecuador</title>


    <!-- Style Links -->

    <link rel="icon" href="assets/img/logo.ico" />
	  <link rel="stylesheet" href="css/supercss.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="dist/flexboxgrid.min.css" />

    <!-- WebSite Scripts -->

    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ></script>

    <script src="js/get_up.js"></script>
    <script src="js/main.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/cont_user.js"></script>
  </head>

  <body>

  
    <!-- Initial page load -->

    <div id="contenedor_carga">
      <div id="carga"><span class="icon-airplane"></span></div>
    </div>

    <!-- Header info | Nav section -->


    
    <?php include 'php/presets/menu.php' ?>

    <!-- Banner Section -->

    <section class="banner">
      <div class="banner-content">
        <h1>Welcome to IVAO Ecuador Division</h1>
        <a href="#informacion1">
          <span></span>
          <span></span>
          <span></span>
          <span></span>LEARN MORE</a
        >
      </div>
    </section>

    <div class="container-size">

    <!-- Ivao come back again-->

    <section>
      <div class="new_info">
        <p>
          IVAO Ecuador is coming back. Come and join us to this great aviation
          adventure.
        </p>
      </div>
    </section>

    





    <!-- Info about Ivao-->

    <section class="banner2" id="informacion1">
      <div class="banner-content2">
        <div class="con_text1" id="animado5">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="info_ivao">
                <h1>Willing to know more about us?</h1>

                <h3>What is IVAO?</h3>

                <p class="acordeon_contenido">
                  IVAO, International Virtual Aviation Organization, is a dedicated,
                  independent and free service created in 1998 for all those who
                  want to participate and enjoy flight simulation online. IVAO was
                  created to provide quality support to all its members.
                </p>

                <h3>
                  Our Mission
                </h3>

                <p class="acordeon_contenido">
                  Provide a unique experience “as real as it gets” with
                  closed-reality procedures for virtual pilots and controllers,
                  improving their skills with training and activity in the area.
                </p>

                <h3>Our Goal</h3>

                <p class="acordeon_contenido">
                  To increase the activity in Ecuador in order to be considered as
                  a reference division in Latin America and the world with quality
                  members and support. To become one of the most important point of
                  interest in the network for events and training.
                </p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <img src="assets/img/logo.png" alt="Logo de Ivao Ecuador" class="logo-first-info">
            </div>
          </div>
          <!-- Responsive Information -->

          <div class="acordeon">
            <h1>Willing to know more about us?</h1>
            <div class="acordeon__item">
              <input type="radio" name="acordeon" id="item1" />
              <label for="item1" class="acordeon__titulo">What is IVAO?</label>
              <p class="acordeon__contenido">
                IVAO, International Virtual Aviation Organization, is a
                dedicated, independent and free service created in 1998 for all
                those who want to participate and enjoy flight simulation
                online. IVAO was created to provide quality support to all its
                members.
              </p>
            </div>
            <div class="acordeon__item">
              <input type="radio" name="acordeon" id="item2" />
              <label for="item2" class="acordeon__titulo"
                >The mission of Ivao Ecuador</label
              >
              <p class="acordeon__contenido">
                Provide a unique experience “as real as it gets” with
                closed-reality procedures for virtual pilots and controllers,
                improving their skills with training and activity in the area.
              </p>
            </div>
            <div class="acordeon__item">
              <input type="radio" name="acordeon" id="item3" />
              <label for="item3" class="acordeon__titulo"
                >The vision of Ivao Ecuador</label
              >
              <p class="acordeon__contenido">
                To increase the activity in Ecuador in order to be considered as
              a reference division in Latin America and the world with quality
              members and support. To become one of the most important point of
              interest in the network for events and training.
              </p>
            </div>
            <img src="assets/img/global.png" alt="" class="globo" />
            <p class="volar_d"><b>Flying amuses us!</b></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Ivao ecuador rules -->

    <section>
      <div class="normas">
        <div class="row">
          <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
            <div class="space_rules">
              <p id="animado4">
                We invite you to learn about the regulations of our division!
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <div class="bmore-btn2">
              <a href="" class="title-learn-more">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Ivac Info -->

    <section>
      <div class="software">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img_software">
              <img src="assets/img/sd-ivac.jpeg" alt="Imagen Software" class="img-software-ivac"/>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="info_software">
              <h1 id="animado8">
                Discover the most efficient software used for controlling in the network
              </h1>

              <p>
              The IVAO ATC Client, known as AURORA, is a program developed specifically for IVAO, based on the real radars which allows you to control on the network.
              </p>

              <p>
              AURORA is a feature rich application that provides a comprehensive set of tools for positions ranging from delivery to central controllers. This client of free software allows you to stay connected and coordinate with our online pilots and other ATC.
              </p>

              <a href="https://ivao.aero/software/aurora" class="boton_vermas"
                ><p>Learn more about Aurora software!</p></a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Users Info -->

    <section>
      <div class="contenedor_contador">
        <h1 id="animado6">Discover our statistics!</h1>

        <div class="row">
          <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12">
            <div class="contador ocultar">
              <img src="assets/img/users.png" alt="" class="img_info_users" />
              <div class="contador_cantidad" data-cantidad-total="507">0</div>
              <h2>Registered users</h2>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12">
            <div class="contador ocultar">
              <img src="assets/img/pilot.png" alt="" class="img_info_users" />
              <div class="contador_cantidad" data-cantidad-total="82">0</div>
              <h2>
                Pilots
              </h2>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12">
            <div class="contador ocultar">
              <img src="assets/img/control.png" alt="" class="img_info_users" />
              <div class="contador_cantidad" data-cantidad-total="82">0</div>
              <h2>Air Traffic Controllers</h2>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12">
            <div class="contador ocultar">
              <img src="assets/img/gstaff.png" alt="" class="img_info_users" />
              <div class="contador_cantidad" data-cantidad-total="6">0</div>
              <h2>Staff's</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Ivap Info -->

    <section>
      <div class="software2">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="info_software2">
              <h1 id="animado7">
                Discover the new tools that Ivao offers for pilots!
              </h1>

              <p>
              The IVAO Pilot Client, known as ALTITUDE, is a complement that Allows flight simulation programs to connect to the IVAO network.
              </p>

              <p>
              ALTITUDE enables pilots to effectively communicate with ATC units and automatically change the frequencies of communication. Squawk codes, transponder mode and METAR information are also some of the many functions available to the pilot through ALTITUDE
              </p>

              <a href="https://ivao.aero/software/altitude" class="boton_vermas">
                <p>Try this Pilot Software now!</p></a
              >
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img_software2">
              <img src="assets/img/cessna.jpg" alt="Avión Cessna 152" />
            </div>
          </div>
        </div>
      </div>
    </section>

    </div>

    <!-- Message Join Us -->

    <section>
      <div class="register_msg">
        <a href="https://ivao.aero/members/person/register.htm"
          ><p id="animado9">
            What are you waiting for to join this great community? Click here
            and sign up now!
          </p>
        </a>
      </div>
    </section>

    <!-- Footer -->

    <?php include 'php/presets/footer.php'?>

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

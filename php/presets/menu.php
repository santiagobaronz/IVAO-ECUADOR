
<!DOCTYPE html>
<html lang="en">
<body>
<header>
      <div class="menu_bar">
        <a href="https://ec.ivao.aero"
          ><img
            src="../../assets/img/logo.png"
            alt="Logo de la página de IVAO"
            class="logom"
        /></a>
        <a class="bt-menu"
          ><span class="icon-menu"></span>
          <p class="titulom">IVAO Ecuador</p></a
        >
      </div>

      <nav>
        <div class="logo_div">
          <a href="https://ec.ivao.aero"
            ><img
              src="../../assets/img/logo.png"
              alt="Logo de la página de IVAO"
              class="logop"
          /></a>
          <h1 class="titulo">IVAO Ecuador</h1>
        </div>

        <ul>
          <li>
            <a href="https://ec.ivao.aero"><span class="icon-home3"></span><b>Home</b></a>
          </li>

          <li class="submenu">
            <p>
              <span class="icon-bookmark tool_fix"></span><b>IVAO EC</b>
              <span class="caret icon-arrow-down6"></span>
            </p>
            <ul class="children">
              <li>
                <a href="https://ivao.aero/" target="_blank">Ivao Web Site</a>
              </li>
              <li>
                <a href="https://doc.ivao.aero/rules2:regulations" target="_blank">Rules & Regulations</a>
              </li>
              <li>
                <a href="../../atc/documents/GuiaNovatos.pdf">Beginners guide (Spanish)</a>
              </li>
              <li>
                <a href="https://ec.ivao.aero/events/events.php">Events</a>
              </li>
              <li>
                <a href="https://tours.at.ivao.aero/index.php" target="_blank">Report Events | Tours</a>
              </li>
              <li>
                <a href="https://discord.com/invite/haJ7YTc" target="_blank">Discord</a>
              </li>
              <li>
                <!--<a href="https://ec.ivao.aero/admin_panel/login.php">Staff</a>-->
              </li>
              <li>
                <a href="#" target="_blank"
                  >About us</a
                >
              </li>
            </ul>
          </li>



          <li class="submenu">
            <p>
              <span class="icon-airplane tool_fix"></span><b>Pilot</b>
              <span class="caret icon-arrow-down6"></span>
            </p>
            <ul class="children">
              <li><a href="https://wiki.ivao.aero/en/home/training/main/pilot_documentation" target="_blank">Training</a></li>
            </ul>
          </li>

          <li class="submenu">
            <p>
              <span class="icon-users tool_fix"></span><b>ATC</b>
              <span class="caret icon-arrow-down6"></span>
            </p>
            <ul class="children">
              <li><a href="https://ec.ivao.aero/atc/atc_operations.php">ATC Operations</a></li>
              <li><a href="https://wiki.ivao.aero/en/home/training/main/atc_documentation" target="_blank">Training</a></li>
              <li><a href="../../atc/documents/IVAO Ecuador - Lineamientos para Exámenes ATC.pdf" target="_blank">Guidelines for ATC Exams</a></li>
              <li><a href="https://ec.ivao.aero/atc/gca.php">GCA</a></li>
              <li><a href="https://ec.ivao.aero/atc/local_procedures.php">Local procedures</a></li>
              <li><a href="https://ec.ivao.aero/atc/dgac_info.php">DGAC - Phraseology manual</a></li>
            </ul>
          </li>

          <li class="submenu">
            <p>
              <span class="icon-download tool_fix"></span><b>Resources</b>
            </p>
            <ul class="children">
              <li><a href="http://charts.ec.ivao.aero/">Charts</a></li>
              <li><a href="https://ec.ivao.aero/sources/software.php">Software</a></li>
              <li><a href="https://training.ec.ivao.aero/">Training Request</a></li>
              <li><a href="https://ec.ivao.aero/atc/special_operations.php">Special Operations</a></li>
              <li><a href="https://ec.ivao.aero/sources/sectorfiles.php">Sector Files</a></li>
              <li><a href="http://www.ais.aviacioncivil.gob.ec/ifis3/">Ecuador AIP</a></li>
              <li><a href="http://www.ais.aviacioncivil.gob.ec/">Ecuador IFIS</a></li>
            </ul>
          </li>
          
            <?php if(!isset($_SESSION['cookie_name'])) { ?>
              <li>
                <a href="https://ivao.aero/members/person/register.htm" target="_blank"><span class="icon-accessibility"></span><b>Sign up</b></a>
              </li>
              <li>
                <a href="https://login.ivao.aero/index.php?url=https://ec.ivao.aero"><span class="icon-user"></span><b>Login</b></a>
              </li>
            <?php } else { ?>
          <li class="submenu">
            <a href="#"><span class="icon-user"></span><b><?= $_SESSION['nombre'].' ('.$_SESSION['vid'].')' ?></b></a>
            <ul class="children">
              <li><a href="https://ec.ivao.aero/profile/dashboard.php">Zona privada</a></li>
              <li><a href="https://ec.ivao.aero/profile/dashboard.php?section=profile">Configuraciones</a></li>
              <li><a href="https://ec.ivao.aero/php/log_out.php">Cerrar sesión</a></li>
            </ul>
          </li>
            <?php } ?>
          </li>
        </ul>
      </nav>
    </header>
</body>
</html>


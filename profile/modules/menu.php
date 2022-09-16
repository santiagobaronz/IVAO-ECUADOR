<div class="sidebar" id="sidebar">
            <div class="sidebar-title">
                <h1>Ivao Ecuador</h1>
            </div>
            <div class="sidebar-logo-info">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <img src="../assets/img/logo.png" alt="">
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                        <div class="info-side">
                            <p class="info-side-name"><?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']; ?></p>
                            <div class="on-icon"></div>
                            <p class="info-side-online">Online</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="side-search">
                <form action="">
                    <input type="text" placeholder="Buscar...">
                    <span class="icon-search icon-white"></span>
                    <button type="submit"></button>
                </form>
            </div>

            <div class="sidebar-links">
                <ul>
                    <li class="header">MENÚ DE NAVEGACIÓN</li>
                    <li><div class="item-links"><span class="icon-earth icon-gray menu-icon"></span><a href="dashboard.php">Inicio</a></div></li>
                    <li><div class="item-links"><span class="icon-stack icon-gray menu-icon"></span><a href="http://charts.ec.ivao.aero/">Cartas de navegación</a></div></li>
                    <li class="submenu" id="menu-toggle">
                        <div class="item-links"><span class="icon-book icon-gray menu-icon"></span><a>Operaciones</a><span class="icon-arrow-down2 icon-white menu-icon-dropdown" id="icon-submenu"></div>
                    </li>
                        <ul class="submenu-items" id="side-nav">
                            <li><span class="icon-radio-unchecked icon-gray submenu-icon"></span><a class="link-menu-items" href="../atc/documents/ManualdeOperacionesATC.pdf" target="blank">Operaciones (Español)</a></li>
                            <li><span class="icon-radio-unchecked icon-gray submenu-icon"></span><a class="link-menu-items" href="../atc/documents/LocalProceduresInformation.pdf" target="blank">Operations (English)</a></li>
                            <li><span class="icon-radio-unchecked icon-gray submenu-icon"></span><a class="link-menu-items" href="http://www.ais.aviacioncivil.gob.ec/ifis3/" target="blank">AIP Ecuador</a></li>
                        </ul>

                    <li><div class="item-links"><span class="icon-folder-open icon-gray menu-icon"></span><a href="">Escenarios descargables</a></div></li>
                    <li><div class="item-links"><span class="icon-calendar icon-gray menu-icon"></span><a href="dashboard.php?section=calendar">Eventos de división</a></div></li>
                    <li><div class="item-links"><span class="icon-spinner5 icon-gray menu-icon"></span><a href="https://tours.at.ivao.aero/index.php?div=EC" target="blank">Reportar evento</a></div></li>
                    <li><div class="item-links"><span class="icon-equalizer icon-gray menu-icon"></span><a href="dashboard.php?section=profile">Configuraciones</a></div></li>
                </ul>
            </div>
            
            <div class="sidebar-options">
                <ul>
                    <li class="header">OPCIONES FINALES</li>
                    <li><span class="icon-home icon-gray menu-icon"></span><a href="https://ec.ivao.aero">Volver al inicio</a></li>
                    <li><span class="icon-user icon-gray menu-icon"></span><a href="dashboard.php?section=profile">Ver perfil</a></li>
                    <li><span class="icon-switch icon-gray menu-icon"></span><a href="https://ec.ivao.aero/php/log_out.php">Cerrar sesión</a></li>
                </ul>
            </div>
        </div>

        <script>
        $(document).ready(function(){
            $("#menu-toggle").click(function(){
                $("#side-nav").slideToggle(1000);
                $("#icon-submenu").toggleClass("menu-icon-rotate");
            });
            $("#icon-menu-toggle").click(function(){
                $("#contents-id").toggleClass("open");
                $("#contents-id").toggleClass("menu-full-width");
            });
        });
    </script>
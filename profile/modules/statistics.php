<div class="estadisticas-inicio">
                        <div class="stats-card">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                    <div class="pilot-hours card-unitary-stats data-hours">
                                        <img src="assets/reloj2.png" alt="" class="icon-stats">
                                        <div class="stats-text">
                                            <p class="data-cards"><?php echo round($_SESSION['horas_piloto']/60/60)?></p>
                                            <h3>Horas como piloto</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                    <div class="atc-hours card-unitary-stats data-hours">
                                        <img src="assets/reloj2.png" alt="" class="icon-stats icon-stats-rotation">
                                        <div class="stats-text">
                                            <p class="data-cards"><?php echo round($_SESSION['horas_atc']/60/60)?></p>
                                            <h3>Horas como ATC</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                    <div class="pilot-rating card-unitary-stats">
                                        <img src="assets/sombrero-de-piloto2.png" alt="" class="icon-stats">
                                        <div class="stats-text">
                                            <p class="data-cards">
                                            <?php 
                                            switch ($_SESSION['ratingpilot']){
                                                case 2:
                                                    echo "FS1";
                                                    break;
                                                case 3:
                                                    echo "FS2";
                                                    break;
                                                case 4:
                                                    echo "FS3";
                                                    break;
                                                case 5:
                                                    echo "PP";
                                                    break;
                                                case 6:
                                                    echo "SPP";
                                                    break;        
                                                case 7:
                                                    echo "CP";
                                                    break;
                                                case 8:
                                                    echo "ATP";
                                                    break;
                                                case 9:
                                                    echo "SFI";
                                                    break;
                                                case 9:
                                                    echo "CFI";
                                                    break;
                                            }
                                            ?>
                                            </p>
                                            <h3>Rango como piloto</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                    <div class="atc-rating card-unitary-stats">
                                        <img src="assets/torre-de-control.png" alt="" class="icon-stats">
                                        <div class="stats-text">
                                            <p class="data-cards">
                                            <?php
                                            switch ($_SESSION['ratingatc']){
                                                case 2:
                                                    echo "AS1";
                                                    break;
                                                case 3:
                                                    echo "AS2";
                                                    break;
                                                case 4:
                                                    echo "AS3";
                                                    break;
                                                case 5:
                                                    echo "ADC";
                                                    break;
                                                case 6:
                                                    echo "APC";
                                                    break;        
                                                case 7:
                                                    echo "ACC";
                                                    break;
                                                case 8:
                                                    echo "SEC";
                                                    break;
                                                case 9:
                                                    echo "SAI";
                                                    break;
                                                case 9:
                                                    echo "CAI";
                                                    break;
                                            }
                                            ?>
                                            </p>
                                            <h3>Rango como ATC</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
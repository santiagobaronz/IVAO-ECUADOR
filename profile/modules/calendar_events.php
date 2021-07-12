<?php 

                    // Crear otro array pero con el mes como elemento y luego comparar

                    $array_enero = array();
                    $array_febrero = array();
                    $array_marzo = array();
                    $array_abril = array();
                    $array_mayo = array();
                    $array_junio = array();
                    $array_julio = array();
                    $array_agosto = array();
                    $array_septiembre = array();
                    $array_octubre = array();
                    $array_noviembre = array();
                    $array_diciembre = array();
                                        
                    require_once "../php/connect.php";
                    $sql_calendar_section = "select * from calendario order by fecha_corta";
                    $res_calendar_section = mysqli_query($conexion, $sql_calendar_section);
                    $total_calendar_section = mysqli_num_rows($res_calendar_section);
                    while ($calendario = mysqli_fetch_array($res_calendar_section)) {

                        
                        $objFecha = new DateTime($calendario['fecha_corta']);
                        $mes= $objFecha->format('n');
                        $dia= $objFecha->format('d');
                        $año= $objFecha->format('Y');

                        $array_calendario = array(
                            "NombreEvento"=>$calendario["nombre_evento"],
                            "DescripcionEvento"=>$calendario["descripcion_evento"],
                            "ImagenEvento"=>$calendario["imagen_evento"],
                            "CategoriaEvento"=>$calendario["categoria"],
                            "Fecha"=>$calendario["fecha_corta"]
                        );

                        switch($mes){
                            case 1:
                                array_push($array_enero,$array_calendario);
                                break;
                            case 2:
                                array_push($array_febrero,$array_calendario);
                                break;
                            case 3:
                                array_push($array_marzo,$array_calendario);
                                break;
                            case 4:
                                array_push($array_abril,$array_calendario);
                                break;
                            case 5:
                                array_push($array_mayo,$array_calendario);
                                break;
                            case 6:
                                array_push($array_junio,$array_calendario);
                                break;
                            case 7:
                                array_push($array_julio,$array_calendario);
                                break;
                            case 8:
                                array_push($array_agosto,$array_calendario);
                                break;
                            case 9:
                                array_push($array_septiembre,$array_calendario);
                                break;
                            case 10:
                                array_push($array_octubre,$array_calendario);
                                break;
                            case 11:
                                array_push($array_noviembre,$array_calendario);
                                break;
                            case 12:
                                array_push($array_diciembre,$array_calendario);
                                break;
                                
                        }

                    }

                    $array_meses = array($array_diciembre,$array_noviembre,$array_octubre,$array_septiembre,$array_agosto,$array_julio,$array_junio,$array_mayo,$array_abril,$array_marzo,$array_febrero,$array_enero);

                    ?>
















                    <?php


                    for($i = 0; $i <= 11; $i++){
                        $conteo_mes = count($array_meses[$i]); //Verifica cuantos resultados hay en cada mes
                        if($conteo_mes > 0){ // Si el resultado es mayor a cero es porque hay un resultado o más y lo mostrará
                            $numero_de_mes = $i;
                            $conteo_eventos_mes = count($array_meses[$i]);
                            
                    
                    ?>

                    <div class="row row-events-calendar">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <div class="month-list">
                                <p><?php switch($numero_de_mes){
                                    case 0:
                                        echo "DIC";
                                        break;
                                    case 1:
                                        echo "NOV";
                                        break;
                                    case 2:
                                        echo "OCT";
                                        break;
                                    case 3:
                                        echo "SEP";
                                        break;
                                    case 4:
                                        echo "AGO";
                                        break;
                                    case 5:
                                        echo "JUL";
                                        break;
                                    case 6:
                                        echo "JUN";
                                        break;
                                    case 7:
                                        echo "MAY";
                                        break;
                                    case 8:
                                        echo "ABR";
                                        break;
                                    case 9:
                                        echo "MAR";
                                        break;
                                    case 10:
                                        echo "FEB";
                                        break;
                                    case 11:
                                        echo "ENE";
                                        break;
                                } ?>
                                </p>
                            </div>
                        </div>
                    
                    
                    
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <div class="row">
                                <?php
                                    for($e = 0; $e <= $conteo_eventos_mes-1; $e++){
                                ?>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="calendar-event-box">
                                            <img class="calendar-event-img" src="<?php echo $array_meses[$i][$e]["ImagenEvento"]; ?>" alt="">
                                            <div class="calendar-event-box-text">
                                                <p><?php echo $array_meses[$i][$e]["NombreEvento"]; ?></p>
                                                <p><?php echo $array_meses[$i][$e]["DescripcionEvento"]; ?></p>
                                                <p><?php 
                                                    $event_date = $array_meses[$i][$e]["Fecha"];
                                                    
                                                    $objFecha = new DateTime($event_date);
                                                    $mes= $objFecha->format('n');
                                                    $dia= $objFecha->format('d');
                                                    $año= $objFecha->format('Y');

                                                    switch($mes){
                                                        case 1:
                                                            $mes = 'Enero';
                                                            break;
                                                        case 2:
                                                            $mes = 'Febrero';
                                                            break;
                                                        case 3:
                                                            $mes = 'Marzo';
                                                            break;
                                                        case 4:
                                                            $mes = 'Abril';
                                                            break;
                                                        case 5:
                                                            $mes = 'Mayo';
                                                            break;
                                                        case 6:
                                                            $mes = 'Junio';
                                                            break;
                                                        case 7:
                                                            $mes = 'Julio';
                                                            break;
                                                        case 8:
                                                            $mes = 'Agosto';
                                                            break;
                                                        case 9:
                                                            $mes = 'Septiembre';
                                                            break;
                                                        case 10:
                                                            $mes = 'Octubre';
                                                            break;
                                                        case 11:
                                                            $mes = 'Noviembre';
                                                            break;
                                                        case 12:
                                                            $mes = 'Diciembre';
                                                            break;
                                                    }

                                                    echo '<strong>Fecha del evento:</strong> '.$dia.' de '.$mes.' de '.$año;

                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <?php
                    
                        }   
                    }
                    ?>
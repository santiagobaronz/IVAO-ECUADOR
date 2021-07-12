<?php 

    error_reporting(0);

    $aeropuertos = array('SECA','SECO','SECU','SEGS','SEGU','SEJD','SELT','SEMC','SEMT','SENL','SEQM','SERO','SESA','SESM','SEST','SESV','SETN','SETN','SETR','SETU','SEFG');
    $url_pc = 'https://api.ivao.aero/getdata/whazzup/whazzup.txt';
    $result_pc = fopen($url_pc,'r');

    while ($linea_pc = fgets($result_pc)) {
        $aux_pc[] = $linea_pc; 
    }

    for($i = 0; $i <= 7; $i++){
        unset($aux_pc[$i]);
    }

    $arrayPilotosSalidas = array();
    $arrayPilotosSalidasInternacionales = array();
    $arrayPilotosLLegadas = array();
    $arrayPilotosLLegadasInternacionales = array();
    $arrayAtc = array();

    foreach($aux_pc as $lineas){

        $userInfo = explode(":", $lineas);

        if($userInfo[3] == "PILOT"){
            if((isset($userInfo[11])) || (isset($userInfo[13])) ){
                $varOrigen = $userInfo[11];
                $varDestino = $userInfo[13];
            }else{
                $varOrigen = "";
                $varDestino = "";
            }

            $resultadoOrigen = array_search($varOrigen, $aeropuertos);
            $resultadoDestino = array_search($varDestino, $aeropuertos);

            if($resultadoOrigen){
                $tempPiloto = array(
                    "VID"=>$userInfo[1],
                    "CallSign"=>$userInfo[0],
                    "Tipo"=>$userInfo[3],
                    "Origen"=>$userInfo[11],
                    "Destino"=>$userInfo[13],
                    "Ruta"=>$userInfo[30],
                    "RMK"=>$userInfo[29],												
                    "DepartureTime"=>$userInfo[22].'z',
                    "ArrivalTime"=>$userInfo[24].':'.$userInfo[25],
                    "Registro"=>$userInfo[37],
                    "Estado"=>$userInfo[46]
                );
                if($resultadoDestino){
                    array_push($arrayPilotosSalidas, $tempPiloto);	
                }else{
                    array_push($arrayPilotosSalidasInternacionales, $tempPiloto);
                }
            }
            if($resultadoDestino){  
                $tempPiloto = array(
                    "VID"=>$userInfo[1],
                    "CallSign"=>$userInfo[0],
                    "Tipo"=>$userInfo[3],
                    "Origen"=>$userInfo[11],
                    "Destino"=>$userInfo[13],
                    "Ruta"=>$userInfo[30],
                    "RMK"=>$userInfo[29],												
                    "DepartureTime"=>$userInfo[22].'z',
                    "ArrivalTime"=>$userInfo[24].':'.$userInfo[25],
                    "Registro"=>$userInfo[37],
                    "Estado"=>$userInfo[46]							
                );
                if($resultadoOrigen){
                    array_push($arrayPilotosLLegadas, $tempPiloto);
                }else{
                    array_push($arrayPilotosLLegadasInternacionales, $tempPiloto);
                }
            }
        }else{
            foreach($aeropuertos as $aeropuerto){
                if((strncmp($userInfo[0], $aeropuerto, 4) === 0)){
                    $tempATC = array(
                        "VID"=>$userInfo[1],
                        "CallSign"=>$userInfo[0],
                        "Frecuencia"=>$userInfo[4],
                        "Tiempo"=>$userInfo[37],
                        "Cartas"=>$aeropuerto
                    );
                    array_push($arrayAtc, $tempATC);
                }
            }
        }

    }

    /*foreach($arrayPilotosSalidas as $salidas_nacionales){
        echo $salidas_nacionales["CallSign"].' desde '.$salidas_nacionales["Origen"].' hasta '.$salidas_nacionales["Destino"].'<br>';
    }
    foreach($arrayPilotosSalidasInternacionales as $salidas_internacionales){
        echo $salidas_internacionales["CallSign"].' desde '.$salidas_internacionales["Origen"].' hasta '.$salidas_internacionales["Destino"].'<br>';
    }
    foreach($arrayPilotosLLegadas as $llegadas_nacionales){
        echo $llegadas_nacionales["CallSign"].' desde '.$llegadas_nacionales["Origen"].' hasta '.$llegadas_nacionales["Destino"].'<br>';
    }
    foreach($arrayPilotosLLegadasInternacionales as $llegadas_internacionales){
        echo $llegadas_internacionales["CallSign"].' desde '.$llegadas_internacionales["Origen"].' hasta '.$llegadas_internacionales["Destino"].'<br>';
    }
    foreach($arrayAtc as $atc_online){
        echo $atc_online["CallSign"].' desde '.$atc_online["Frecuencia"].' hasta '.$atc_online["Tipo"].' = '.$atc_online['Cartas'].'<br>';
    }*/
                        
?>
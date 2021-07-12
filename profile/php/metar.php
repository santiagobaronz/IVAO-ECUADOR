<?php

$icao = $_POST['icao'];
$url = 'http://wx.ivao.aero/metar.php?id='.$icao;
$page = file_get_contents($url);

if($page == null){
    echo $icao." no es un ICAO válido y no pudo ser encontrado.";
}else{
    echo $page;
}

/*<?php 

                        $aeropuertos = ['SECA','SECO','SECU','SEGS','SEGU','SEJD','SELT','SEMC','SEMT','SENL','SEQM','SERO','SESA','SESM','SEST','SESV','SETN','SETN','SETR','SETU'];
                        $url_pc = 'https://api.ivao.aero/getdata/whazzup/whazzup.txt';
                        $result_pc = fopen($url_pc,'r');

                        while ($linea_pc = fgets($result_pc)) {
                            $aux_pc[] = $linea_pc; 
                        }

                        foreach($aux_pc as $lineas){
                            $coincidencia_pc = strpos($valor, $aeropuertos);
                        }
                        
                        
                        ?> 
                        
                        
                        
                        
                        */

?>

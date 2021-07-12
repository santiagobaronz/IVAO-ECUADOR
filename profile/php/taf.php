<?php
    $icao_taf = $_POST['icao'];
    $archivo = fopen('http://wx.ivao.aero/taf.php','r');
    while ($linea = fgets($archivo)) {
        $aux[] = $linea; 
    }

    fclose($archivo);

    $num_lineas = count($aux);

    foreach($aux as $valor){
        
        $coincidencia = strpos($valor, $icao_taf);
        if($coincidencia === 0){
            echo $valor;
        }
    }
    
?>
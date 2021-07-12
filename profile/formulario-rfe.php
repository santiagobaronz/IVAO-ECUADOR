<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario RFE</title>

    <style>

        body{
            font-family: 'Gill Sans Extrabold', Helvetica, sans-serif;
        }

        table tbody tr:nth-child(even){
            background-color: #ccc;
        }

        form input{
            width: 400px;
        }


    </style>
</head>
<body>

    <h1>Formulario de registro de vuelos</h1>

    <form action="registros_vuelos.php" method="POST">
        <label for="">Logo Aerolinea (Primeras letras del Callsign):</label>
        <input type="text" name="logo">

        <br>
        <br>

        <label for="">Callsign:</label>
        <input type="text" name="callsign">

        <br>
        <br>

        <label for="">ICAO Salida:</label>
        <input type="text" name="icao_salida">

        <br>
        <br>

        <label for="">Nombre del aeropuerto de salida:</label>
        <input type="text" name="nombre_salida">

        <br>
        <br>

        <label for="">ICAO Llegada:</label>
        <input type="text" name="icao_llegada">

        <br>
        <br>

        <label for="">Nombre del aeropuerto de llegada:</label>
        <input type="text" name="nombre_llegada">

        <br>
        <br>

        <label for="">Ruta:</label>
        <input type="text" name="ruta">

        <br>
        <br>

        <label for="">Hora salida:</label>
        <input type="text" name="hora">

        <br>
        <br>

        <label for="">Hora llegada:</label>
        <input type="text" name="hora_llegada">

        <br>
        <br>

        <label for="">Spot:</label>
        <input type="text" name="spot">

        <br>
        <br>

        <label for="">Tipo Aeronave:</label>
        <input type="text" name="aeronave">

        <br>
        <br>

        <input type="submit" style="padding: 20px 90px;">
    </form>

    <h1>Tabla de ultimos vuelos ingresados</h1>

    <table style="margin-top: 30px;">
        <thead>
            <tr>
                <th style="padding-right: 50px">Id</th>
                <th style="padding-right: 50px">Logo Aerolinea</th>
                <th style="padding-right: 50px">Numero de Vuelo</th>
                <th style="padding-right: 50px">ICAO Salida</th>
                <th style="padding-right: 50px">Aeropuerto Salida</th>
                <th style="padding-right: 50px">ICAO Llegada</th>
                <th style="padding-right: 50px">Aeropuerto llegada</th>
                <th style="padding-right: 50px">Ruta</th>
                <th style="padding-right: 50px">Hora Salida</th>
                <th style="padding-right: 50px">Hora Llegada</th>
                <th style="padding-right: 50px">Spot</th>
                <th style="padding-right: 50px">Tipo Aeronave</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once "../php/connect.php";
                $sql_booking = "select * from rfe_event order by id desc";
                $res_booking = mysqli_query($conexion, $sql_booking);
                while ($booking = mysqli_fetch_array($res_booking)) { ?>

                <tr>
                    <td><?php echo $booking["id"]?></td>
                    <td><?php echo $booking["logo_aerolinea"]; ?></td>
                    <td><?php echo $booking["numero_vuelo"]; ?></td>
                    <td><?php echo $booking["ICAO_salida"]; ?></td>
                    <td><?php echo $booking["aeropuerto_salida"]; ?></td>
                    <td><?php echo $booking["ICAO_llegada"]; ?></td>
                    <td><?php echo $booking["aeropuerto_llegada"]; ?></td>
                    <td><?php echo $booking["ruta"]; ?></td>
                    <td><?php echo $booking["hora_salida"]; ?></td>
                    <td><?php echo $booking["hora_llegada"]; ?></td>
                    <td><?php echo $booking["spot"]; ?></td>
                    <td><?php echo $booking["tipo_aeronave"]; ?></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>

    
</body>
</html>
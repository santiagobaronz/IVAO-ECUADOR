<?php

    define('cookie_name', 'ivao_token');
    define('login_url', 'http://login.ivao.aero/index.php');
    define('api_url', 'http://login.ivao.aero/api.php');
    define('url', 'https://ec.ivao.aero/');

    session_set_cookie_params(60*60*24*14);
    session_start();

    //if the token is set in the link
    if(isset($_GET['IVAOTOKEN'])) {
        $_SESSION['cookie_name'] = $_GET['IVAOTOKEN'];
        header('Location: '.url);
    }

        //check if the cookie is set and/or is correct
        if(isset($_SESSION['cookie_name'])) {
            $user_array = json_decode(file_get_contents(api_url.'?type=json&token='.$_SESSION['cookie_name']));
            if($user_array->result) {
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
        }

?>
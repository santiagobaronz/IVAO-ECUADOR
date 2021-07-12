'use strict';

    //Variables METAR
    var btn_icon_metar = document.getElementById("btn-icon"),
    btn_button_metar = document.getElementById("btn-button"),
    resultado_metar = document.getElementById("resultado-metar"),
    icon_delete_metar = document.getElementById("icon-delete-metar"),
    metar_box = document.getElementById("metar-box");

    //Variables TAF
    var btn_icon_taf = document.getElementById("btn-icon-taf"),
    btn_button_taf = document.getElementById("btn-button-taf"),
    resultado_taf = document.getElementById("resultado-taf"),
    icon_delete_taf = document.getElementById("icon-delete-taf"),
    taf_box = document.getElementById("taf-box");

    //Funciones para Metar

    function MostrarMetar(){

        var metar_finder = document.getElementById("metar-finder").value;
        if(metar_finder.length != 4){
            resultado_metar.innerHTML = "El ICAO esta incompleto o no ha sido rellenado, este debe tener 4 letras. Verifica e intenta de nuevo."
        }else{
            var icao = metar_finder;
            $.post('php/metar.php', { icao: icao }, function(data) {
                metar_box.style.display = "block";
                resultado_metar.style.display = "inline-block";
                resultado_metar.innerHTML = data;
            });
        }
    }

    function EliminarMetar(){
        metar_box.style.display = "none";
        resultado_metar.style.display = "none";
        document.getElementById("metar-finder").value = "";
    }

    // Funciones para TAF

    function MostrarTAF(){

        var taf_finder = document.getElementById("taf-finder").value;
        if(taf_finder.length != 4){
            resultado_taf.innerHTML = "El ICAO esta incompleto o no ha sido rellenado, este debe tener 4 letras. Verifica e intenta de nuevo."
        }else{
            var icao = taf_finder;
            $.post('php/taf.php', { icao: icao }, function(data) {
                taf_box.style.display = "block";
                resultado_taf.style.display = "inline-block";
                resultado_taf.innerHTML = data;
            });
        }
    }

    function EliminarTAF(){
        taf_box.style.display = "none";
        resultado_taf.style.display = "none";
        document.getElementById("taf-finder").value = "";
    }

    btn_button_metar.addEventListener("click",MostrarMetar,false);
    btn_icon_metar.addEventListener("click",MostrarMetar,false);
    icon_delete_metar.addEventListener("click",EliminarMetar,false);

    btn_button_taf.addEventListener("click",MostrarTAF,false);
    btn_icon_taf.addEventListener("click",MostrarTAF,false);
    icon_delete_taf.addEventListener("click",EliminarTAF,false);



    // Boton mostrar más información sobre el dashboard

    var btn_open_db = document.getElementById("btn-more"),
        box_about_db = document.getElementById("about-db-ec"),
        btn_close_db = document.getElementById("icon-close-abde");

    function AbrirPopUp(){
        box_about_db.style.display = "block";
    }

    function CerrarPopUp(){
        box_about_db.style.display = "none";
    }

    btn_open_db.addEventListener("click",AbrirPopUp,false);
    btn_close_db.addEventListener("click",CerrarPopUp,false);

/* Cambio de pagina en inicio dashboard */

var li_inicio_db = document.getElementById("li_inicio_db"),
    li_novedades_db = document.getElementById("li_novedades_db"),
    li_calendario_db = document.getElementById("li_calendario_db"),
    li_estadisticas_db = document.getElementById("li_estadisticas_db"),
    li_perfil_db = document.getElementById("li_perfil_db");

var links_db = [li_inicio_db,li_novedades_db,li_calendario_db,li_estadisticas_db,li_perfil_db];

var p_inicio_db = document.getElementById("p_inicio_db"),
    p_novedades_db = document.getElementById("p_novedades_db"),
    p_calendario_db = document.getElementById("p_calendario_db"),
    p_estadisticas_db = document.getElementById("p_estadisticas_db"),
    p_perfil_db = document.getElementById("p_perfil_db"); 

var paginas_db = [p_inicio_db,p_novedades_db,p_calendario_db,p_estadisticas_db,p_perfil_db];

function CambiarPagina(pagina,link){

    for(var i = 0;i <= 4; i++){
        if(paginas_db[i] != pagina){
            paginas_db[i].style.display = "none";
            links_db[i].classList.remove("active-link");
        }
    }

    pagina.style.display = "block";
    link.classList.add("active-link");

}

li_inicio_db.addEventListener("click",function(){CambiarPagina(p_inicio_db, li_inicio_db)},false);
li_novedades_db.addEventListener("click",function(){CambiarPagina(p_novedades_db, li_novedades_db)},false);
li_calendario_db.addEventListener("click",function(){CambiarPagina(p_calendario_db, li_calendario_db)},false);
li_estadisticas_db.addEventListener("click",function(){CambiarPagina(p_estadisticas_db, li_estadisticas_db)},false);
li_perfil_db.addEventListener("click",function(){CambiarPagina(p_perfil_db, li_perfil_db)},false);

/* Guardar información del perfil */

var save_profile_changes = document.getElementById("save_profile_changes");

save_profile_changes.addEventListener("click",function(){
    var checkbox_emails = document.getElementById("checkbox_emails").checked;

    if(checkbox_emails){
        var checkbox_info = true;
    }else{
        var checkbox_info = false;
    };
    
    $.post('php/profile_changes.php', {checkbox: checkbox_info}, function(data){
        var changes_saved = document.getElementById("changes_saved");
        changes_saved.style.display = "inline-block";
        changes_saved.innerHTML = "<p style='font-weight: normal;' >"+data+"</p>";
    });

},false);


    /* Actualizar correo electronico */

var btn_update_mail = document.getElementById("btn_update_mail"),
    text_update_mail = document.getElementById("text_update_mail"),
    box_update_mail = document.getElementById("box_update_mail"),
    input_update_mail = document.getElementById("input_update_mail"),
    btn_confirm_mail = document.getElementById("btn_confirm_mail"),
    confirm_account_section = document.getElementById("confirm_account"),
    confirm_account_input = document.getElementById("confirm_account_input"),
    confirm_account_button = document.getElementById("confirm_account_button"),
    user_profile_email = document.getElementById("user_profile_email"),
    user_info_email = document.getElementById("user_info_email"),
    checkbox_false = document.getElementById("checkbox_false"),
    account_not_verified_img = document.getElementById("account_not_verified_img"),
    account_not_verified_p = document.getElementById("account_not_verified_p");

function ActualizarEmail(){
    text_update_mail.style.display = "none";
    input_update_mail.style.display = "inline-block";
    btn_update_mail.style.display = "none";
    btn_confirm_mail.style.display = "inline-block";
    
    // Guardar datos 

    btn_confirm_mail.addEventListener("click",function(){
        input_update_mail = document.getElementById("input_update_mail").value;
        if(input_update_mail.length > 8){
            let email = input_update_mail;
            $.post('php/confirm_mail.php', {email: email}, function(data) {
                box_update_mail.style.display = "none";
                checkbox_false.style.width = "280px";
                account_not_verified_img.src = "assets/verificated.png";
                account_not_verified_p.innerHTML = "Tu cuenta esta verificada";
                confirm_account_section.innerHTML = "<p style='text-align:center;'>Actualiza la página para que los cambios se visualicen correctamente.</p>";
                user_profile_email.innerHTML = input_update_mail;
                user_info_email.innerHTML = input_update_mail;
            });
        }
    },false);
}

if(btn_update_mail != undefined){
    btn_update_mail.addEventListener("click",ActualizarEmail,false)
};

function ActualizarEmailDesdePerfil(){
    confirm_account_input = document.getElementById("confirm_account_input").value;
    if(confirm_account_input.length > 8){
        let email = confirm_account_input;
        $.post('php/confirm_mail.php',{email: email}, function(data){
            checkbox_false.style.width = "280px";
            account_not_verified_img.src = "assets/verificated.png";
            account_not_verified_p.innerHTML = "Tu cuenta esta verificada";
            box_update_mail.style.display = "none";
            user_profile_email.innerHTML = confirm_account_input;
            user_info_email.innerHTML = confirm_account_input;
            confirm_account_section.innerHTML = "<p style='text-align:center;'>Actualiza la página para que los cambios se visualicen correctamente.</p>";
        });
    }
}


if(confirm_account_button != undefined){
    confirm_account_button.addEventListener("click",ActualizarEmailDesdePerfil,false);
}

window.addEventListener('mouseup', function(event){
    if(event.target != box_update_mail && event.target.parentNode != box_update_mail){
        text_update_mail.style.display = "inline-block";
        input_update_mail.style.display = "none";
        btn_update_mail.style.display = "inline-block";
        btn_confirm_mail.style.display = "none";
    }
});



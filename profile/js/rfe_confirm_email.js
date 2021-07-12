/* Actualizar email */

var box_rfe_email = document.getElementById("box-confirm-email-rfe"),
    input_rfe_email = document.getElementById("input-confirm-email-rfe"),
    btn_rfe_email = document.getElementById("btn-confirm-email-rfe");


btn_rfe_email.addEventListener("click",function(){
    input_rfe_email = document.getElementById("input-confirm-email-rfe").value;
    if(input_rfe_email.length > 8){
        email_rfe = input_rfe_email;
        $.post('php/confirm_mail.php',{email: email_rfe}, function(data){
            box_rfe_email.style.display = "none";
        });
    }
},false);
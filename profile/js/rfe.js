'use strict';

var airport_seqm = document.getElementById("airport_seqm"),
    airport_segu = document.getElementById("airport_segu"),
    seqm_departures_link = document.getElementById("seqm_departures_link"),
    seqm_arrivals_link = document.getElementById("seqm_arrivals_link"),
    seqm_departures_list = document.getElementById("seqm_departures_list"),
    seqm_arrivals_list = document.getElementById("seqm_arrivals_list"),
    SEQM_book = document.getElementById("SEQM_book"),
    SEGU_book = document.getElementById("SEGU_book");

airport_seqm.addEventListener("click",function(){
    SEGU_book.style.display = "none";
    SEQM_book.style.display = "block";
    airport_segu.classList.remove("active-airport");
    airport_segu.classList.add("no-active-airport");
    airport_seqm.classList.remove("no-active-airport");
    airport_seqm.classList.add("active-airport");
},false);

airport_segu.addEventListener("click",function(){
    SEQM_book.style.display = "none";
    SEGU_book.style.display = "block";
    airport_seqm.classList.remove("active-airport");
    airport_seqm.classList.add("no-active-airport");
    airport_segu.classList.remove("no-active-airport");
    airport_segu.classList.add("active-airport");
},false);

seqm_departures_link.addEventListener("click",function(){
    seqm_arrivals_list.style.display = "none";
    seqm_arrivals_link.classList.remove("active_section");
    seqm_departures_list.style.display = "block";
    seqm_departures_link.classList.add("active_section");
},false);

seqm_arrivals_link.addEventListener("click",function(){
    seqm_departures_list.style.display = "none";
    seqm_departures_link.classList.remove("active_section");
    seqm_arrivals_list.style.display = "block";
    seqm_arrivals_link.classList.add("active_section");
},false);


/* Seccion extra */

var segu_departures_link = document.getElementById("segu_departures_link"),
    segu_arrivals_link = document.getElementById("segu_arrivals_link"),
    segu_departures_list = document.getElementById("segu_departures_list"),
    segu_arrivals_list = document.getElementById("segu_arrivals_list");

segu_departures_link.addEventListener("click",function(){
    segu_arrivals_list.style.display = "none";
    segu_arrivals_link.classList.remove("active_section");
    segu_departures_list.style.display = "block";
    segu_departures_link.classList.add("active_section");
},false);

segu_arrivals_link.addEventListener("click",function(){
    segu_departures_list.style.display = "none";
    segu_departures_link.classList.remove("active_section");
    segu_arrivals_list.style.display = "block";
    segu_arrivals_link.classList.add("active_section");
},false);




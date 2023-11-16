document.getElementById("btm_registro").addEventListener("click", register);
document.getElementById("btm_iniciar_sesion").addEventListener("click", iniciarSesion);
window.addEventListener("resize", anchopagina);

var formulario_login=document.querySelector(".formulario_login");
var formulario_register=document.querySelector(".formulario_register");
var contenedor_login_register=document.querySelector(".contenedor_login_register");
var caja_trasera_login=document.querySelector(".caja_trasera_login");
var caja_trasera_register=document.querySelector(".caja_trasera_register");

function anchopagina(){
    if(window.innerWidth>850){
        caja_trasera_login.style.display="block";
        caja_trasera_register.style.display="block";
    
    }else{
        caja_trasera_register.style.display="block";
        caja_trasera_register.style.opacity="1";
        caja_trasera_login.style.display="none";
        formulario_login.style.display="block";
        formulario_register.style.display="none";
        contenedor_login_register.style.left="0px";
    }
}

anchopagina();
function iniciarSesion(){
    if(window.innerWidth > 850){
        formulario_register.style.display="none";
        contenedor_login_register.style.left ="10px";
        formulario_login.style.display="block";
        caja_trasera_register.style.opacity="1";
        caja_trasera_login.style.opacity="0";  
    }else{
        formulario_register.style.display="none";
        contenedor_login_register.style.left ="8px";
        formulario_login.style.display="block";
        caja_trasera_register.style.display="block";
        caja_trasera_login.style.display="none";
    }
    

}

function register(){
    if(window.innerWidth>850){
        formulario_register.style.display="block";
        contenedor_login_register.style.left ="410px";
        formulario_login.style.display="none";
        caja_trasera_register.style.opacity="0";
        caja_trasera_login.style.opacity="1";
    }else{
        formulario_register.style.display="none";
        contenedor_login_register.style.left ="8px";
        formulario_login.style.display="block";
        caja_trasera_register.style.display="block";
        caja_trasera_login.style.display="none";
        caja_trasera_login.style.opacity="1";

    }
    

}
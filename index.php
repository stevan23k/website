<?php


    session_start();
    

    if(isset($_SESSION ['usuario'])){
        header("location: bienvenida.php");
    }


?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regitro</title>
    <link rel="stylesheet" href="acceds/css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        
        <div class="contenedor">
            <div class="caja_trasera">

                <div class="caja_trasera_login">
                    <h3>¿ ya tienes cuenta ?</h3>
                    <p>inicia sesion para entrar</p>
                    <button id="btm_iniciar_sesion"> iniciar sesion</button>

                </div>
                <div class="caja_trasera_register">
                    <h3>aun no tengo una cuenta</h3>
                    <p>registrate para iniciar sesion</p>
                    <button id="btm_registro"> registrarse</button>
                </div>
            </div>
            <!--formularios-->
            <div class="contenedor_login_register">
                <!--formulario de login-->
                <form action="php/login.php" class="formulario_login" method="POST">
                    <h2>iniciar sesion</h2>
                    <input type="text" placeholder="correo electronico" name="correo">
                    <input type="password" placeholder="contraseña" name="clave">
                    <button>entrar</button> 
                </form>
                <!--formulario de registro-->
                <form action="php/registro_usuarios_be.php" method="POST" class="formulario_register">
                    <h2>crear nueva cuenta</h2>
                    <input type="text" placeholder="nombre completo" name="nombre_completo">
                    <input type="usuario" placeholder="usuario" name="usuario">
                    <input type="email" placeholder="correo electronico" name="correo">
                    <input type="password" placeholder="contraseña" name="clave">
                    <input type="password" placeholder="confirmar contraseña">
                    <button>registrarme</button>
                    
                </form>
            </div>
        </div>
    </main>
    <script src="acceds/js/scrip.js"> </script>
</body>
</html>
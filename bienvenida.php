<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
            
                alert(" porfavor inicie session");
                window.location="index.php";
            </script>
        ';
        session_destroy();
        die();

    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenida</title>
    <link rel="stylesheet" href="acceds/css/estilos_bienvenidos.css">
</head>
<body>
    <h1>bienvenido muchacho</h1>
    <form action="php/cerrar_session.php" class="cerrar_sesion">
        <button>cerrar sesion</button>
    </form>
</body>
</html>
<?php


    include 'conexion_bd.php';

    $nombre_completo= $_POST['nombre_completo'];
    $usuario= $_POST['usuario'];
    $correo= $_POST['correo'];
    $clave= $_POST['clave'];
    $clave= hash('sha512', $clave);


    $query = "INSERT INTO usuarios(nombre_completo, usuario, correo, clave) 
                VALUES('$nombre_completo', '$usuario', '$correo', '$clave') ";
    
    //verificacion de correo en base de datos
    $verificar_correo= mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");


    if(mysqli_num_rows($verificar_correo) >0 ){
        echo'
            <script>
                alert("el correo ya existe");
                window.location="../index.php";
            </script>
        ';
        exit();
    }
    //verificacion de usuario en base de datos
    $verificar_usuario= mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");


    if(mysqli_num_rows($verificar_usuario) >0 ){
        echo'
            <script>
                alert("el usuario ya existe");
                window.location="../index.php";
            </script>
        ';
        exit();
    }
    
    $ejecutar=mysqli_query($conexion, $query);

    

    if($ejecutar){
        echo'
            <script>
                alert("usuario registrado exitosamente");
                window.location="../index.php";
            </script>
        ';
    }else{
        echo'
            <script>
                alert("intentelo nuevamente, ususario no registrado");
                window.location="../index.php";
            </script>
        '; 
    }

    mysqli_close($conexion);
?>
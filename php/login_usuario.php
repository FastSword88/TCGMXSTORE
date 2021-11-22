<?php
    //Inicia una sesion 
    session_start();
    //Utiliza comprobacion.php (puente a la base de datos).
    include 'comprobacion.php';


    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);
    //$_SESSION['usuario'] = false;

    //Consulta la base de datos para comprobar la existencia del usuario.
    $validar_login = mysqli_query($conexion, "SELECT * FROM datos WHERE email ='$correo' and Contrasena = '$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: ../index.php");
        exit();

    }else{
        echo'
        <script>
            alert("Usuario inexistente favor de verificar");
            window.location = "./sesion.php";
        </script>
        ';
        exit();
    }
?> 
<?php
    
    //Utiliza comprobacion.php (puente a la base de datos).
    include 'comprobacion.php';
  
   //Asignacion de variables $_POST lo publica dentro del servidor
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    //Inserta en la BD los datos del usuario
    $query = "INSERT INTO datos(Nombre, Email, Usuario, Contrasena) VALUES('$nombre', '$correo', '$usuario', '$contrasena')";

    //Verifica que no haya correos clonados
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM datos WHERE Email='correo'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo'
        <script>
            alert("Este correo ya esta registrado, prueba con otro");
            window.location = "sesion.php";
        </script>
        ';
        exit();
    }  


    //Verifica que no haya usuarios clonados.
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM datos WHERE Usuario='usuario'");
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo'
        <script>
            alert("Este usuario ya esta registrado, prueba con otro");
            window.location = "sesion.php";
        </script>
        ';
        exit();
    }

    //Realiza la ejecucion de los querys anteriores
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
        <script>
            window.location = "sesion.php"
        </script>
        ';
    }else{
        echo '
            <script>
            alert("Intentelo de nuevo")
            window.location = "sesion.php"
            </script>
        ';
    }
    
    //Cierra la conexion.
    mysqli_close($conexion);

?>
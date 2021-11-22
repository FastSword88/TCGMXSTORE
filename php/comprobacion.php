<?php
    //Crea una coneccion con la base de datos.
    $conexion = mysqli_connect("localhost","root","","tcgmx");

    //Esto prueba que estes conectado a la base.
    if($conexion){
       echo "conectado exitosamente";
    }else{
       echo "no se ha podido conectar a la base de datos";
    }

?>
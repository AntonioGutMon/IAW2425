<?php
    //Conexion con BD
    $servername = "sql308.thsite.top";
    $username = "thsi_38097483";
    $password = "";
    $bd = "thsi_38097483_php";
    $enlace = mysqli_connect($servername, $username, $password, $bd);
    if (!$enlace){
        die("Ocurrio un problema con la conexión" . mysqli_connect_error());
    }

    //Construccion de la Query
    $query = "DELETE FROM usuarios WHERE id=3";

    //Ejecución de la query
    $resultado = mysqli_query($enlace, $query);

    //Procesamiento de los resultados
    if($resultado){
        echo "Delete realizado correctamente";
    }
    else{
        echo "Error en el delete";
    }

    //Cierre de la conexión
    mysqli_close($enlace);
?>
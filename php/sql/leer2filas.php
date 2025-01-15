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
    $query = "SELECT * FROM usuarios LIMIT 2";

    //Ejecución de la query
    $resultado = mysqli_query($enlace, $query);

    //Procesamiento de los resultados
    if (mysqli_num_rows($resultado) > 0){
        //Al menos tengo un registro
        while($fila = mysqli_fetch_assoc($resultado)){
            echo "Nombre: " . $fila["nombre"] . "<br>" . "Apellido: " . $fila["apellido"] . "<br>" . "Email: " . $fila["email"] . "<br>";
        }
    }
    else{
        echo "No hubo resultados en la tabla";
    }

    //Cierre de la conexión
    mysqli_close($enlace);
?>
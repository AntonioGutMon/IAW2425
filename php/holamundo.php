<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Una web con php</title>
</head>
<body>
    <h1>Encabezado</h1>
    <?php 
        echo "<p>Mensaje creado con la instrucción echo</p>"; 
        print "<p>Mensaje creado con la instrucción print</p>";
        $cadena1 = "<p>Hola mundo";
        $cadena2 = " desde PHP</p>";
        echo $cadena1 . $cadena2; //Concatenar 1
        echo "$cadena1$cadena2"; //Concatenar 2
    ?>
</body>
</html>

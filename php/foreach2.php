<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
<?php
    $diccionario = array("hola"=>"hello", "coche"=>"car", "puerta"=>"door", "ordenador"=>"computer", "bye"=>"adios" );
    echo "<h1>Diccionario Español-Inglés</h1>";
    echo "<ul>";
    foreach ($diccionario as $palabraEspanol => $palabraIngles){
        echo "<li>$palabraEspanol se traduce como $palabraIngles</li>";
    }
    echo "</ul>";
?>
</body>
</html>
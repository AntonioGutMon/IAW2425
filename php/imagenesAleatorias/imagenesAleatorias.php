<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagen Aleatoria</title>
    <style>
        div{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        img {
            width: auto;
            height: auto;
        }
        h1{
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
<?php 
    $array = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p");
    $random = rand(0,15);
    $tripulante = $array[$random];
?>
    <h1>Bleach girls:</h1><div>
    <img src="<?= $tripulante; ?>.jpeg" alt=""></div>

</body>
</html>
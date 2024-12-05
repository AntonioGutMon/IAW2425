<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramide</title>
</head>
<body>
    <form action="bernat.php">
        <input type="number" name="caja" placeholder="Introduce numero positivo">
        <input type="submit" value="enviar">
    </form>
<?php
    $numero = isset($_GET["caja"]);
    if ($numero > 0){
        for($i=1; $i < $numero; $i++){
            for($j=1; $j < $numero; $j++){
                echo "* ";
            }
            echo "<br>";
        }
    }
?>
</body>
</html>
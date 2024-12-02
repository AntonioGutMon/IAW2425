<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
<?php
    $palabras = ["c", "b", "a"];
    sort($palabras);
    $totalPalabras = count($palabras);
    for($i=0; $i<=$totalPalabras-1;$i++){
        echo "$palabras[$i] <br>";
    }
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webscrapping 2</title>
</head>
<body>
    <?php
        $text = file_get_contents("eltiempo.html");
        $resultado = explode("<td>",$text);
        echo $resultado[4];
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El tiempo</title>
</head>
<body>
    <?php
        $url = "https://www.eltiempo.es/sevilla.html";
        $text = file_get_contents($url);
        $resultado = explode('<span class="degrees" data-temperature=',$text);
        print_r($resultado[0])
    ?>
</body>
</html>
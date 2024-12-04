<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobales</title>
</head>
<body>
    <?php 
        echo 'Te estas conectando desde la IP: ' . $_SERVER['REMOTE_ADDR'] . '<br>';
        echo 'Tu navegador esta catalogado como ' . $_SERVER['HTTP_USER_AGENT']. '<br>';
        echo 'Vienes de la pagina ' . $_SERVER['HTTP_REFERER'] . '<br>';
        echo '<a href="superglobales.php">Click para ir a superglobales.php y que funcione el referer</a>'
    ?>
</body>
</html>
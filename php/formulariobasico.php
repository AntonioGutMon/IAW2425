<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario normal</title>
</head>
<body>
    <form action="">
        <input type="text" name="caja">
        <input type="submit" value="Enviar">
    </form>
    <?php 
        if(isset($_GET["caja"])){
            echo 'Hola ' . htmlspecialchars($_GET["caja"]) . ' !';
        }
    ?>
</body>
</html>
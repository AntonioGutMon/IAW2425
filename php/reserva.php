<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
</head>
<body>
    <form action="reserva.php">
        <label for="">Nombre: </label><input name="nombre" type="text"><br>
        <label for="">Apellidos: </label><input name="apellidos" type="text"><br>
        <label for="">Correo: </label><input name="email" type="email"><br>
        <label for="">DNI: </label><input name="DNI" type="text"><br>
        <label for="">Dia de entrada: </label><input name="entrada" type="date"><br>
        <label for="">Nº de dias: </label><input name="dias" type="number"><br>
        <label for="">Habitación: </label><select name="habitacion">
            <option value="1">Simple(30€)</option>
            <option value="2">Doble(35€)</option>
            <option value="3">Triple(80€)</option>
            <option value="4">Suite(100€)</option>
        </select><br>
        <input type="submit" value="Enviar" id="enviar">    
    </form>
    <?php

        if(isset($_GET["nombre"]) && isset($_GET["apellidos"]) && isset($_GET["email"]) && isset($_GET["entrada"]) && isset($_GET["dias"]) && isset($_GET["habitacion"])){
            
            $nombre = htmlspecialchars($_GET["nombre"]);
            $apellidos = htmlspecialchars($_GET["apellidos"]);
            $email = htmlspecialchars($_GET["email"]);
            $entrada = htmlspecialchars($_GET["entrada"]);
            $dias = htmlspecialchars($_GET["dias"]);
            $habitacion = htmlspecialchars($_GET["habitacion"]);

            if(is_numeric($dias) && $dias>0){
                echo "Nombre: " . $nombre . "<br>";
                echo "Apellidos: " . $apellidos . "<br>";
                echo "Correo: " . $email . "<br>";
                echo "Dia de entrada: " . $entrada . "<br>";
                echo "Nº de dias: " . $dias . "<br>";
                echo "Habitación " . $habitacion . "<br>";
            }
            else{
                echo "<br><p>Introduce un numero valido de días</p>";

            }
        }
        else{
            echo "<br><p>Te falta algo por rellenar o marcar</p>";
        }

    ?>
    <script>
        document.getElementById("enviar").addEventListener("click", function enviar(event){
            event.preventDefault()
        })
    </script>
</body>
</html>
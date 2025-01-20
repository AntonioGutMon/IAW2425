<?php
// Conexión a la base de datos
$servername = "sql308.thsite.top";
$username = "thsi_38097483";
$password1 = "!ucfTmzQ";
$database = "thsi_38097483_php";
$enlace = mysqli_connect($servername, $username, $password1, $database);

// Verificar conexión
if (!$enlace) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar campos vacíos
    if (empty($_POST['nombre']) || empty($_POST['password'])) {
        die("Error: Todos los campos son obligatorios.");
    }

    // Saneamiento de las entradas
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Buscar usuarios
    $query = "SELECT nombre, password FROM usuarios WHERE nombre='$nombre'";
    $resultado = mysqli_query($enlace, $query);

    // Obtener los resultados
    if (mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);
        // Verificar la contraseña
        if (password_verify($password, $usuario['password'])) {
            echo "Inicio de sesión exitoso.";
            // Sesion iniciada
        } else {
            die("Error: Contraseña incorrecta.");
        }
    } else {
        die("Error: El usuario no existe.");
    }
}

mysqli_close($enlace);
?>

<!-- Formulario de registro -->
<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <form method="POST" action="login.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password"><br>
        <button type="submit">Loguearse</button>
    </form>
</body>
</html>
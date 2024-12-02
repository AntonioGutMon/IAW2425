<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
<?php
    $refranes = array(
        "A quien madruga, Dios le ayuda.",
        "Más vale tarde que nunca.",
        "Camarón que se duerme se lo lleva la corriente.",
        "No dejes para mañana lo que puedas hacer hoy.",
        "En boca cerrada no entran moscas.",
        "El que mucho abarca, poco aprieta.",
        "Dime con quién andas y te diré quién eres.",
        "A caballo regalado no se le mira el diente.",
        "Ojos que no ven, corazón que no siente.",
        "El que tiene boca, se equivoca."
    );
    echo "<ul>";
    foreach ($refranes as $refran)
        echo "<li>$refran</li>";
    echo "</ul>";
?>
</body>
</html>
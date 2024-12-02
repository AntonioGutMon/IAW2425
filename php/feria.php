<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feria</title>
</head>
<body>
<?php
    $fechahoy = date('Y-m-d');
    $fecha_inicio = date_create('2025-05-06');
    $fecha_hoy = date_create($fechahoy);
    $contador = date_diff($fecha_inicio, $fecha_hoy);
    $formato = '%a';
    echo "Quedan " . $contador->format($formato) . " dias para la feria";
?>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha Anterior</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['dia']) && isset($_POST['mes']) && isset($_POST['anio'])) {
       
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];
        
        
        $fecha_anterior = date('Y/m/d', strtotime("$anio/$mes/$dia -1 day"));
        
        
        echo "<h2>Fecha Anterior</h2>";
        echo "<p>La fecha ingresada es: $dia/$mes/$anio</p>";
        echo "<p>La fecha del dis anterior es: $fecha_anterior</p>";
    } else {
        
        header("Location: ejercicio10.php");
        exit();
    }
    ?>
    <a href="ejercicio10.php">Regresar</a>
</body>
</html>

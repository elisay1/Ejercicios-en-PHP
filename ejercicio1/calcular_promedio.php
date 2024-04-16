<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Promedio</title>
</head>
<body>
    <?php
    // Verificar si los datos han sido enviados
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $nombre = ucwords($nombre); // Convertimos
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        
        // Calcular el promedio
        $promedio = ($nota1 + $nota2 + $nota3) / 3;
        
        // Determinar si el alumno está aprobado o desaprobado
        $estado = ($promedio >= 10) ? "Aprobado" : "Desaprobado";
               
        echo "<h2>Resultado</h2>";
        echo "<p>El Alumno: $nombre obtuvo el promedio de $promedio y su condicion es <strong>$estado</strong>.</p>";
    } else {

        header("Location: ejercicio1.php");
        exit();
    }
    ?>
    <a href="ejercicio1.php">Regresar</a>
</body>
</html>

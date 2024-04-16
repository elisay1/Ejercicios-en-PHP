<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Determinar Calificación</title>
</head>
<body>
    <?php
    // Verificar si los datos han sido enviados
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calificacion'])) {
        $calificacion = $_POST['calificacion'];
        
        // Determinamos la calificación
        $descripcion = '';
        switch ($calificacion) {
            case 'A':
                $descripcion = 'EXCELENTE';
                break;
            case 'B':
                $descripcion = 'BUENO';
                break;
            case 'C':
                $descripcion = 'REGULAR';
                break;
            case 'D':
                $descripcion = 'MALO';
                break;
            case 'E':
                $descripcion = 'PÉSIMO';
                break;
            default:
                $descripcion = 'NO VALIDO';
                break;
        }
        
        echo "<h2>Resultado</h2>";
        echo "<p> $descripcion</p>";
    } else {
        header("Location: ejercicio3.php");
        exit();
    }
    ?>
    <a href="ejercicio3.php">Regresar</a>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Verificación</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        
        if ($numero > 0) {
            $condicion = "POSITIVO";
        } elseif ($numero < 0) {
            $condicion = "NEGATIVO";
        } else {
            $condicion = "CERO";
        }
        
        echo "<h2>Resultado</h2>";
        echo "<p>El número $numero es <strong>$condicion</strong>.</p>";
    } else {
        header("Location: ejercicio7.php");
        exit();
    }
    ?>
    <a href="ejercicio7.php">Regresar</a>
</body>
</html>

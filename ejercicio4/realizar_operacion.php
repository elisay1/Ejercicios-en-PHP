<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Operación</title>
</head>
<body>
    <?php
    // Verificar si los datos han sido enviados
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operacion'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];
        
        $resultado = 0;
        $mensaje_error = '';
        switch ($operacion) {
            case 'suma':
                $resultado = $numero1 + $numero2;
                $operador = '+';
                break;
            case 'resta':
                $resultado = $numero1 - $numero2;
                $operador = '-';
                break;
            case 'multiplicacion':
                $resultado = $numero1 * $numero2;
                $operador = '*';
                break;
            case 'division':
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                    $operador = '/';
                } else {
                    $mensaje_error = 'No se puede dividir entre cero';
                }
                break;
            default:
                $mensaje_error = 'Operación no válida';
                break;
        }
        
        if ($mensaje_error === '') {
            echo "<h2>Resultado</h2>";
            echo "<p>La $operacion de  $numero1 $operador $numero2 = $resultado</p>";
        } else {
            echo "<p>ERROR: $mensaje_error</p>";
        }
    } else {
        header("Location: ejercicio4.php");
        exit();
    }
    ?>
    <a href="ejercicio4.php">Regresar</a>
</body>
</html>

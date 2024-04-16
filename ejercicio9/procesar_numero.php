<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Procesamiento</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        
        $ultimo_digito = $numero % 10;
        
        $tipo_operacion = '';
        $resultado = 0;
        
        switch ($ultimo_digito) {
            case 2:
            case 5:
            case 8:
                $resultado = $numero * $numero;
                $tipo_operacion = 'cuadrado';
                break;
            case 4:
            case 7:
            case 9:
                $resultado = $numero * 5;
                $tipo_operacion = 'multiplicación';
                break;
            default:
                $resultado = $numero / 10;
                $tipo_operacion = 'igual';
                break;
        }
        
        echo "<h2>Resultado</h2>";
        echo "<p>El $tipo_operacion de $numero es: $resultado</p>";
    }
?>

    <a href="ejercicio9.php">Regresar</a>
</body>
</html>

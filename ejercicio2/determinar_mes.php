<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Determinar Mes Seleccionado</title>
</head>
<body>
    <?php
    // Verificar si los datos han sido enviados
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoger el mes seleccionado
        $mes = $_POST['mes'];
        
        //  Se determina el nombre del mes
        $nombre_mes = '';
        switch ($mes) {
            case 1:
                $nombre_mes = 'Enero';
                break;
            case 2:
                $nombre_mes = 'Febrero';
                break;
            case 3:
                $nombre_mes = 'Marzo';
                break;
            case 4:
                $nombre_mes = 'Abril';
                break;
            case 5:
                $nombre_mes = 'Mayo';
                break;
            case 6:
                $nombre_mes = 'Junio';
                break;
            case 7:
                $nombre_mes = 'Julio';
                break;
            case 8:
                $nombre_mes = 'Agosto';
                break;
            case 9:
                $nombre_mes = 'Septiembre';
                break;
            case 10:
                $nombre_mes = 'Octubre';
                break;
            case 11:
                $nombre_mes = 'Noviembre';
                break;
            case 12:
                $nombre_mes = 'Diciembre';
                break;
            default:
                $nombre_mes = 'No válido';
                break;
        }
        
        // Mostrar 
        echo "<h2>Resultado</h2>";
        echo "<p>Elegiste el mes de: $nombre_mes</p>";
    } else {
        header("Location: ejercicio2.php");
        exit();
    }
    ?>
    <a href="ejercicio2.php">Regresar</a>
</body>
</html>

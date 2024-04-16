<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número de Días en el Mes</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['mes']) && isset($_POST['anio'])) {
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];
        
        $bisiesto = (($anio % 4 == 0) && ($anio % 100 != 0)) || ($anio % 400 == 0);
        
        
        $dias = 0;
        switch ($mes) {
            case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                $dias = 31;
                break;
            case 4: case 6: case 9: case 11:
                $dias = 30;
                break;
            case 2:
                $dias = ($bisiesto) ? 29 : 28;
                break;
            default:
                echo "<p>Mes no válido.</p>";
                break;
        }
        
        
        echo "<p>El mes tiene $dias días.</p>";
    } else {
        header("ejercicio5.php");
        exit();
    }
    ?>
    <a href="ejercicio5.php">Regresar</a>
</body>
</html>

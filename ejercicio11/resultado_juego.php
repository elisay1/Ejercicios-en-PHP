<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Juego</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['jugador1']) && isset($_POST['jugador2'])) {
        $jugador1 = strtoupper($_POST['jugador1']); 
        $jugador2 = strtoupper($_POST['jugador2']); 
        
        
        if ($jugador1 == $jugador2) {
            $resultado = "Empate";
        } elseif (($jugador1 == 'P' && $jugador2 == 'T') || ($jugador1 == 'P' && $jugador2 == 'R') || ($jugador1 == 'R' && $jugador2 == 'P')) {
            $resultado = "Jugador 2, Roca rompe tijeras";
        } elseif (($jugador1 == 'T' && $jugador2 == 'P') || ($jugador1 == 'R' && $jugador2 == 'T') || ($jugador1 == 'P' && $jugador2 == 'R')) {
            $resultado = "Jugador 1, Tijera corta papel";
        } else {
            $resultado = "El papel cubre la roca";
        }
        
        echo "<h2>Resultado del Juego</h2>";
        echo "<p>Gana <strong>$resultado</strong> </p>";
    } else {
        header("Location: ejercicio11.php");
        exit();
    }
    ?>
    <a href="ejercicio11.php">Regresar</a>
</body>
</html>

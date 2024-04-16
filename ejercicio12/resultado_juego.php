<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Juego contra la PC</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['jugador1'])) {
        $jugador1 = strtoupper($_POST['jugador1']); 
        
       
        $opciones = array("T", "P", "R");
        $jugador2 = $opciones[array_rand($opciones)];
        
        
        if ($jugador1 == $jugador2) {
            $resultado = "Empate";
        } elseif (($jugador1 == 'P' && $jugador2 == 'T') || ($jugador1 == 'P' && $jugador2 == 'R') || ($jugador1 == 'R' && $jugador2 == 'P')) {
            $resultado = "Tijeras cortan papel, gana el Jugador PC";
        } elseif (($jugador1 == 'T' && $jugador2 == 'P') || ($jugador1 == 'R' && $jugador2 == 'T') || ($jugador1 == 'P' && $jugador2 == 'R')) {
            $resultado = "Roca rompe tijeras, gana la 1";
        } else {
            $resultado = "El papel cubre la roca, gana la 1";
        }
        
        echo "<h2>Resultado del Juego contra la PC</h2>";
        echo "<p>Jugador 1 ---> $jugador1</p>";
        echo "<p>Jugador PC ---> $jugador2</p>";
        echo "<p>$resultado</p>";
    } else {
        header("Location: ejercicio12.php");
        exit();
    }
    ?>
    <a href="ejercicio12.php">Regresar</a>
</body>
</html>

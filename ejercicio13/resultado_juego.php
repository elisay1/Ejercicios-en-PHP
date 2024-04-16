<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Juego</title>
</head>
<body>
    <?php
    $opciones = array("T", "P", "R");
    $jugador1_pc = $opciones[array_rand($opciones)];
    
   
    $jugador2_pc = $opciones[array_rand($opciones)];
    
    
     if ($jugador1_pc == $jugador2_pc) {
        $resultado = "Empate";
    } elseif (($jugador1_pc == 'P' && $jugador2_pc == 'T') || ($jugador1_pc == 'P' && $jugador2_pc == 'R') || ($jugador1_pc == 'R' && $jugador2_pc == 'P')) {
        $resultado = "Tijera corta papel, gana la PC-02";
    } elseif (($jugador1_pc == 'T' && $jugador2_pc == 'P') || ($jugador1_pc == 'R' && $jugador2_pc == 'T') || ($jugador1_pc == 'P' && $jugador2_pc == 'R')) {
        $resultado = "Roca rompe tijera, gana la PC-01";
    } else {
        $resultado = "El papel cubre la roca, gana la PC-02";
    }
    
    echo "<h2>Resultado del Juego</h2>";
    echo "<p>PC-01: $jugador1_pc</p>";
    echo "<p>PC-02: $jugador2_pc</p>";
    echo "<p>$resultado</p>";
    ?>
    <a href="ejercicio13.php">Regresar</a>
</body>
</html>

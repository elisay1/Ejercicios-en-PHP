<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego: Roca, Papel y Tijeras</title>
</head>
<body>
    <h2>Juego: Roca, Papel y Tijeras</h2>
    <form action="resultado_juego.php" method="post">
        <label for="jugador1">Jugador 1:</label>
        <input type="text" id="jugador1" name="jugador1" maxlength="1" pattern="[RPT]" title="Ingrese R, P o T" required><br><br>
        
        <label for="jugador2">Jugador 2:</label>
        <input type="text" id="jugador2" name="jugador2" maxlength="1" pattern="[RPT]" title="Ingrese R, P o T" required><br><br>
        
        <input type="submit" value="Jugar">
        <input type="reset" value="Reiniciar">
    </form>
</body>
</html>

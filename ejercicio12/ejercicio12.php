<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego: Roca, Papel y Tijeras contra la PC</title>
</head>
<body>
    <h2>Juego: Roca, Papel y Tijeras contra la PC</h2>
    <form action="resultado_juego.php" method="post">
        <label for="jugador1">Jugador 1:</label>
        <input type="text" id="jugador1" name="jugador1" maxlength="1" pattern="[TPR]" title="Ingrese T, P o R" required><br><br>

        <label for="Jugador2">Jugador 2</label>&nbsp;&nbsp;&nbsp;
        <label for="PC">Sera elejido por la PC</label><br><br>
        
        <input type="submit" value="Jugar contra la PC">
    </form>
</body>
</html>

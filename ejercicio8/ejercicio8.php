<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Precio de Terreno</title>
</head>
<body>
    <h2>Calcular Precio de Terreno</h2>
    <form action="calcular_precio.php" method="post">
        <label for="zona">Ingrese Zona:</label>
        <input type="text" id="zona" name="zona" maxlength="1" required><br><br>
        
        <label for="area">Ingrese Área:</label>
        <input type="number" id="area" name="area" required><br><br>
        
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>

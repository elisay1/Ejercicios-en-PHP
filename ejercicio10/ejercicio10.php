<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Fecha Anterior</title>
</head>
<body>
    <h2>Calcular Fecha Anterior</h2>
    <form action="calcular_fecha.php" method="post">
        <label for="dia">Día:</label>
        <input type="text" id="dia" name="dia" min="1" max="31" required><br><br>
        
        <label for="mes">Mes:</label>
        <input type="text" id="mes" name="mes" min="1" max="12" required><br><br>
        
        <label for="anio">Año:</label>
        <input type="text" id="anio" name="anio" required><br><br>
        
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>

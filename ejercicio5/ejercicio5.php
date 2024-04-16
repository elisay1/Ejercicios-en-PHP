<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Número de Días en un Mes</title>
</head>
<body>
    <h2>Consultar Número de Días en un Mes</h2>
    <form action="determinar_dias.php" method="post">
        <label for="mes">Numero de mes:</label>
        <input type="number" id="mes" name="mes" min="1" max="12" required><br><br>
        
        <label for="anio">Ingrese año:</label>
        <input type="number" id="anio" name="anio" required><br><br>
        
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>

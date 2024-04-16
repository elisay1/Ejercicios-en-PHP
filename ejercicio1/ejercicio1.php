<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Notas</title>
</head>
<body>
    <h2>Calcular Promedio de Notas</h2>
    <form action="calcular_promedio.php" method="post">
        <label for="nombre">Nombre del Alumno:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" name="nota1" min="0" max="20" step="0.1" required><br><br>
        
        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" name="nota2" min="0" max="20" step="0.1" required><br><br>
        
        <label for="nota3">Nota 3:</label>
        <input type="number" id="nota3" name="nota3" min="0" max="20" step="0.1" required><br><br>
        
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>

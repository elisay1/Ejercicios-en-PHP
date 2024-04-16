<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Edad y Sexo</title>
</head>
<body>
    <h2>Verificar</h2>
    <form action="verificar_persona.php" method="post">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>
        
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo">
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
        </select><br><br>
        
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>

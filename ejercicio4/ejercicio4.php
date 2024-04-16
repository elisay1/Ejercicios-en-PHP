<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form action="realizar_operacion.php" method="post">
        <label for="numero1">Número 01:</label>
        <input type="number" id="numero1" name="numero1" required><br><br>
        
        <label for="numero2">Número 02:</label>
        <input type="number" id="numero2" name="numero2" required><br><br>
        
        <label for="operacion">Seleccione una operación:</label><br>
        <select id="operacion" name="operacion">
            <option value="suma">[1] Sumar</option>
            <option value="resta">[2] Restar</option>
            <option value="multiplicacion">[3] Multiplicación</option>
            <option value="division">[4] División</option>
        </select><br><br>
        
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>

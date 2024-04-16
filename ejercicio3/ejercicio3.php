<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Calificación</title>
</head>
<body>
    <h2>Selecciona</h2>
    <form action="determinar_calificacion.php" method="post">
        <input type="radio" id="excelente" name="calificacion" value="A">
        <label for="excelente">A. Excelente</label><br>
        
        <input type="radio" id="bueno" name="calificacion" value="B">
        <label for="bueno">B. Bueno</label><br>
        
        <input type="radio" id="regular" name="calificacion" value="C">
        <label for="regular">C. Regular</label><br>
        
        <input type="radio" id="malo" name="calificacion" value="D">
        <label for="malo">D. Malo</label><br>
        
        <input type="radio" id="pesimo" name="calificacion" value="E">
        <label for="pesimo">E. Pésimo</label><br><br>
        
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">

    </form>
</body>
</html>

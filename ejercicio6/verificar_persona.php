<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edad']) && isset($_POST['sexo'])) {
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        
        $mayor_o_menor = ($edad >= 18) ? "mayor" : "menor";
        
        
        echo "<h2>Verificación</h2>";
        echo "<p>La persona es $sexo y es $mayor_o_menor de edad.</p>";
    } else {
        
        header("Location: ejercicio6.php");
        exit();
    }
    ?>
    <a href="ejercicio6.php">Regresar</a>
</body>
</html>

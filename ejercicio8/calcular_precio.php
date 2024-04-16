<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precio de Venta del Terreno</title>
</head>
<body>
    <?php
    $precios = array(
        "A" => 70,
        "B" => 60,
        "C" => 45,
        "D" => 30
    );

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['zona']) && isset($_POST['area'])) {
        
        $zona = strtoupper($_POST['zona']); 
        $area = $_POST['area'];
        
        if (array_key_exists($zona, $precios)) {
            $precio_m2 = $precios[$zona];
            $precio_total = $precio_m2 * $area;
            
            echo "<h2>Precio de Venta del Terreno</h2>";
            echo "<p>Total a pagar por $area m², es: S/. $precio_total</p>";
        } else {
            echo "<p>¡ZONA INCORRECTA...!</p>";
        }
    } else {
        header("Location: ejercicio8.php");
        exit();
    }
    ?>
    <a href="ejercicio8.php">Regresar</a>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidadVarones = $_POST["cantidadVarones"];
    $cantidadMujeres = $_POST["cantidadMujeres"];
    $totalAlumnos = $cantidadVarones + $cantidadMujeres;
    $porcentajeVarones = ($cantidadVarones / $totalAlumnos) * 100;
    $porcentajeMujeres = ($cantidadMujeres / $totalAlumnos) * 100;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Porcentaje de Varones y Mujeres</title>
</head>
<body>
    <h1>Calculadora de Porcentaje de Varones y Mujeres</h1>

    <form method="POST">
        <label for="cantidadVarones">Cantidad de Varones:</label>
        <input type="number" id="cantidadVarones" name="cantidadVarones" required><br>

        <label for="cantidadMujeres">Cantidad de Mujeres:</label>
        <input type="number" id="cantidadMujeres" name="cantidadMujeres" required><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($porcentajeVarones) && isset($porcentajeMujeres)) {
        echo "<p>Porcentaje de Varones: $porcentajeVarones%</p>";
        echo "<p>Porcentaje de Mujeres: $porcentajeMujeres%</p>";
    }
    ?>
</body>
</html>

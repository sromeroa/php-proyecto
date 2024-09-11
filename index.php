<?php
// Incluir el archivo de configuración
include 'config.php';

// Incluir el header
include 'templates/header.php';

// Consultar la base de datos y mostrar resultados (opcional)
$sql = 'SELECT * FROM productos';
$stmt = $pdo->query($sql);
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proyecto Básico en PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Lista de Productos</h1>
<ul>
    <?php foreach ($productos as $producto): ?>
        <li><?php echo $producto['nombre']; ?> - $<?php echo $producto['precio']; ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>

<?php
// Incluir el footer
include 'templates/footer.php';
?>

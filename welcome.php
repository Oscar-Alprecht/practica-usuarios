<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
</head>
<body>
    
    <ul>
        <h2>Bienvenido, <?php echo htmlspecialchars($user['nombres']); ?>!</h2>
        <h3>Tus datos:</h3>

        <li><strong>Cédula:</strong> <?php echo htmlspecialchars($user['cedula']); ?></li>
        <li><strong>Nombres:</strong> <?php echo htmlspecialchars($user['nombres']); ?></li>
        <li><strong>Apellidos:</strong> <?php echo htmlspecialchars($user['apellidos']); ?></li>
        <li><strong>Fecha de nacimiento:</strong> <?php echo htmlspecialchars($user['fecha_nacimiento']); ?></li>
        <li><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></li>

        <p><a href="index.php">Cerrar sesión</a></p>
    </ul>

    
    <link rel="stylesheet" href="style.css">

</body>
</html>
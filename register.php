<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
</head>
<body>
    <h2>Registro</h2>
    <form action="save_user.php" method="post">
        <label>Cédula:</label><br>
        <input type="text" name="cedula" required><br><br>

        <label>Nombres:</label><br>
        <input type="text" name="nombres" required><br><br>

        <label>Apellidos:</label><br>
        <input type="text" name="apellidos" required><br><br>

        <label>Fecha de Nacimiento:</label><br>
        <input type="date" name="fecha_nacimiento" required><br><br>

        <label>Correo:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Contraseña:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Registrar">
    </form>
    <link rel="stylesheet" href="style.css">

</body>
</html>
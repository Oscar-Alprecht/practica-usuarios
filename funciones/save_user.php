<?php
require 'db.php';

$cedula = $_POST['cedula'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Verificar si el correo ya existe
$stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "El correo ya está registrado. <a href='register.php'>Volver</a>";
    exit;
}
$stmt->close();

// Insertar nuevo usuario
$stmt = $conn->prepare("INSERT INTO usuarios (cedula, nombres, apellidos, fecha_nacimiento, email, password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $cedula, $nombres, $apellidos, $fecha_nacimiento, $email, $password);

if ($stmt->execute()) {
    echo "¡Usuario registrado con éxito! <a href='index.php'>Iniciar sesión</a>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

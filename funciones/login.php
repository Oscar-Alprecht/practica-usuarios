<?php
session_start();
require 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        header("Location: welcome.php");
        exit;
    } else {
        echo "Contraseña incorrecta. <a href='../index.php'>Intentar de nuevo</a>";
    }
} else {
    echo "Correo no registrado. <a href='../index.php'>Intentar de nuevo</a>";
}

$stmt->close();
$conn->close();
?>

<?php
$host = "localhost";
$user = "root";         // Cambia si usas otro usuario
$pass = "";             // Cambia si tienes contraseña en MySQL
$dbname = "usuarios_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

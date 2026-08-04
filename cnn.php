<?php
// cnn.php - Conexión a la base de datos
// Ajustá estos datos según tu configuración de XAMPP / servidor local

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "biblioteca";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

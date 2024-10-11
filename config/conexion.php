<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';
$db   = 'usuarios';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>

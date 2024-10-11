<?php
require '../config/conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        header("Location: ../pages/register.php?mensaje=El usuario ya existe.");
    } else {
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO usuarios (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hash_password);

        if ($stmt->execute()) {
            header("Location: ../pages/login.php?mensaje=Usuario registrado con éxito.");
        } else {
            header("Location: ../pages/register.php?mensaje=Error al registrar el usuario.");
        }
    }
}
?>

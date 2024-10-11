<?php
session_start();
require '../config/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM usuarios WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hash_password);
        $stmt->fetch();
        
        if (password_verify($password, $hash_password)) {
            $_SESSION['username'] = $username;
            header("Location: ../pages/bienvenida.php");
            exit();
        } else {
            header("Location: ../pages/login.php?mensaje=Contraseña incorrecta.");
            exit();
        }
    }
}
?>

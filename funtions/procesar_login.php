<?php
session_start();
require '../config/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Conectarse a la base de datos utilizando la función de conexion.php
    $conn = conectarse();

    if ($conn) {
        // Preparar la consulta SQL para evitar inyecciones
        $stmt = $conn->prepare("SELECT id, password FROM usuarios WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $hash_password);
            $stmt->fetch();

            // Verificar la contraseña
            if (password_verify($password, $hash_password)) {
                // Si la contraseña es correcta, iniciar sesión
                $_SESSION['username'] = $username;
                header("Location: ../pages/index.php");
                exit();
            } else {
                // Si la contraseña es incorrecta
                header("Location: ../pages/login.php?mensaje=Contraseña incorrecta.");
                exit();
            }
        } else {
            // Si el usuario no existe
            header("Location: ../pages/login.php?mensaje=Usuario no encontrado.");
            exit();
        }

        // Cerrar la sentencia y la conexión
        $stmt->close();
        $conn->close();
    } else {
        // Si la conexión falla
        echo "Error conectando a la Base de Datos.";
        exit();
    }
}
?>

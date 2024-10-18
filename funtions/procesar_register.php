<?php
require '../config/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Conectarse a la base de datos utilizando la función de conexion.php
    $conn = conectarse();

    if ($conn) {
        // Preparar la consulta para verificar si el usuario ya existe
        $stmt = $conn->prepare("SELECT id FROM usuarios WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        // Si el usuario ya existe, redirigir al registro con mensaje
        if ($stmt->num_rows > 0) {
            header("Location: ../pages/register.php?mensaje=El usuario ya existe.");
        } else {
            // Crear el hash de la contraseña y registrar el nuevo usuario
            $hash_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO usuarios (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $hash_password);

            if ($stmt->execute()) {
                // Si el registro fue exitoso
                header("Location: ../pages/login.php?mensaje=Usuario registrado con éxito.");
            } else {
                // Si hubo un error al registrar el usuario
                header("Location: ../pages/register.php?mensaje=Error al registrar el usuario.");
            }
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

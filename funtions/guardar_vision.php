<?php
include '../config/conexion.php'; // Incluir el archivo de conexión
$link = conectarse(); // Conectar a la base de datos

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el texto enviado
    $nuevoTexto = mysqli_real_escape_string($link, $_POST['texto']);

    // Actualizar el texto en la tabla vision
    $sql = "UPDATE vision SET texto = '$nuevoTexto' WHERE id = 1"; // Asumiendo que solo hay un registro

    if (mysqli_query($link, $sql)) {
        echo "Cambios guardados exitosamente.";
    } else {
        echo "Error al guardar los cambios: " . mysqli_error($link);
    }
}

mysqli_close($link); // Cerrar la conexión

// Redirigir de vuelta a la página de visión
header("Location: ../pages/vision.php");
exit();

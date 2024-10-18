<?php
// Incluir el archivo de conexión
include '../config/conexion.php';

// Conectar a la base de datos
$conn = conectarse();

// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nuevo comentario de UEN del formulario
    $nuevo_uen = $_POST['uen_comentario'];

    // Actualizar la UEN en la base de datos
    $sql_update = "UPDATE uen SET uen = ? WHERE id = 1";
    $stmt = mysqli_prepare($conn, $sql_update);
    mysqli_stmt_bind_param($stmt, "s", $nuevo_uen);

    if (mysqli_stmt_execute($stmt)) {
        // UEN actualizada correctamente
    } else {
        echo "Error al actualizar la UEN: " . mysqli_error($conn);
    }

    // Cerrar la declaración
    mysqli_stmt_close($stmt);
}

// Cerrar la conexión
mysqli_close($conn);

// Redirigir de vuelta a la página de objetivos (o donde prefieras)
header("Location: ../pages/objetivos.php");
exit;
?>

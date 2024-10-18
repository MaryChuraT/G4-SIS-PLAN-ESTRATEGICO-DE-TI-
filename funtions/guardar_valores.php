<?php
include 'conexion.php'; // Incluir el archivo de conexión
$link = conectarse(); // Conectar a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $valores = $_POST['valor'];

    // Preparar la consulta para actualizar los valores en la base de datos
    for ($i = 0; $i < count($valores); $i++) {
        // Escapar los caracteres especiales para evitar inyecciones SQL
        $valor = mysqli_real_escape_string($link, $valores[$i]);
        $id = $i + 1; // Los IDs de los valores comienzan en 1

        // Actualizar el valor en la base de datos
        $sql = "UPDATE valores SET texto='$valor' WHERE id=$id";
        if (!mysqli_query($link, $sql)) {
            echo "Error al actualizar el valor: " . mysqli_error($link);
        }
    }

    // Redirigir a la página de valores después de guardar
    header("Location: valores.php");
    exit();
}

// Cerrar la conexión
mysqli_close($link);
?>

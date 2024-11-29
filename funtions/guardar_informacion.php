<?php
include("../config/conexion.php");

// Conectar a la base de datos
$link = conectarse();

// Obtener los datos del formulario
$nombre = mysqli_real_escape_string($link, $_POST['nombre']);
$descripcion = mysqli_real_escape_string($link, $_POST['descripcion']);

// Actualizar los datos en la tabla `empresa`
$updateQuery = "UPDATE empresa SET nombre='$nombre', descripcion='$descripcion' WHERE id=1";

if (mysqli_query($link, $updateQuery)) {
    echo "Los datos se han actualizado correctamente.";
} else {
    echo "Error al actualizar los datos: " . mysqli_error($link);
}

// Cerrar la conexión
mysqli_close($link);

// Redirigir de vuelta a la página de información
header("Location: ../pages/informacion.php");
exit();
?>

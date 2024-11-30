<?php
// Incluir el archivo de conexión
include '../config/conexion.php';

// Conectar a la base de datos
$conn = conectarse();

// Obtener datos del formulario
$mision = $_POST['mision'];
$estrategico1 = $_POST['estrategico1'];
$especifico11 = $_POST['especifico11'];
$especifico12 = $_POST['especifico12'];
$estrategico2 = $_POST['estrategico2'];
$especifico21 = $_POST['especifico21'];
$especifico22 = $_POST['especifico22'];
$estrategico3 = $_POST['estrategico3'];
$especifico31 = $_POST['especifico31'];
$especifico32 = $_POST['especifico32'];

// Actualizar los objetivos en la base de datos
$sql1 = "UPDATE objetivos SET estrategico='$estrategico1', especifico1='$especifico11', especifico2='$especifico12' WHERE id=1";
$sql2 = "UPDATE objetivos SET estrategico='$estrategico2', especifico1='$especifico21', especifico2='$especifico22' WHERE id=2";
$sql3 = "UPDATE objetivos SET estrategico='$estrategico3', especifico1='$especifico31', especifico2='$especifico32' WHERE id=3";

if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3)) {
    echo "Objetivos actualizados correctamente.";
} else {
    echo "Error actualizando los objetivos: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);

// Redirigir de vuelta a la página original (opcional)
header("Location: ../pages/objetivos.php");
exit;
?>

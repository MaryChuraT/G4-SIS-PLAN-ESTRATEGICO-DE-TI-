<?php
include '../config/conexion.php'; // Incluir el archivo de conexión
$link = conectarse(); // Conectar a la base de datos

// Inicializar variables para los datos
$debilidades = [];
$amenazas = [];
$fortalezas = [];
$oportunidades = [];

// Habilitar reporte de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $debilidades = $_POST['debilidades'] ?? [];
    $amenazas = $_POST['amenazas'] ?? [];
    $fortalezas = $_POST['fortalezas'] ?? [];
    $oportunidades = $_POST['oportunidades'] ?? [];

    // Convertir los valores en cadenas concatenadas
    $debilidades_texto = mysqli_real_escape_string($link, implode('|', array_filter($debilidades)));
    $amenazas_texto = mysqli_real_escape_string($link, implode('|', array_filter($amenazas)));
    $fortalezas_texto = mysqli_real_escape_string($link, implode('|', array_filter($fortalezas)));
    $oportunidades_texto = mysqli_real_escape_string($link, implode('|', array_filter($oportunidades)));

    // Verificar si ya existe un registro
    $sql_check = "SELECT COUNT(*) AS total FROM matriz_came";
    $result = mysqli_query($link, $sql_check);
    $row = mysqli_fetch_assoc($result);

    if ($row['total'] > 0) {
        // Si existe, actualizar el registro
        $sql_update = "UPDATE matriz_came 
                       SET debilidades = '$debilidades_texto',
                           amenazas = '$amenazas_texto',
                           fortalezas = '$fortalezas_texto',
                           oportunidades = '$oportunidades_texto',
                           fecha_actualizacion = NOW()
                       WHERE id = 1";
        if (!mysqli_query($link, $sql_update)) {
            echo "Error al actualizar la matriz CAME: " . mysqli_error($link);
            exit();
        }
    } else {
        // Si no existe, insertar un nuevo registro
        $sql_insert = "INSERT INTO matriz_came (debilidades, amenazas, fortalezas, oportunidades) 
                       VALUES ('$debilidades_texto', '$amenazas_texto', '$fortalezas_texto', '$oportunidades_texto')";
        if (!mysqli_query($link, $sql_insert)) {
            echo "Error al guardar la matriz CAME: " . mysqli_error($link);
            exit();
        }
    }

    // Redirigir de vuelta al archivo original (matriz_came.php)
    header("Location: ../pages/matriz_came.php");
    exit();
}

// Cerrar la conexión
mysqli_close($link);
?>

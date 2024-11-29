<?php
include '../config/conexion.php'; // Incluir el archivo de conexión
$link = conectarse(); // Conectar a la base de datos

// Inicializar variables para los datos
$debilidades = [];
$amenazas = [];
$fortalezas = [];
$oportunidades = [];

// Recuperar los datos de la matriz CAME
$sql = "SELECT * FROM matriz_came LIMIT 1";
$result = mysqli_query($link, $sql);

if ($result) {
    $data = mysqli_fetch_assoc($result);
    if ($data) {
        // Dividir los datos almacenados en las columnas en arrays
        $debilidades = explode('|', $data['debilidades']);
        $amenazas = explode('|', $data['amenazas']);
        $fortalezas = explode('|', $data['fortalezas']);
        $oportunidades = explode('|', $data['oportunidades']);
    }
} else {
    echo "Error al recuperar los datos: " . mysqli_error($link);
    exit();
}

mysqli_close($link); // Cerrar la conexión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz CAME</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #008080;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
            border-radius: 8px 8px 0 0;
        }
        .description {
            margin-top: 10px;
            font-size: 16px;
            color: #555;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #008080;
            color: white;
        }
        .section-header {
            background-color: #008080;
            color: white;
            font-weight: bold;
        }
        .textarea-cell {
            background-color: #e0f7fa;
        }
        textarea {
            width: 95%;
            height: 50px;
            resize: none;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
        }
        button {
            background-color: #008080;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        button:hover {
            background-color: #005f5f;
        }
        .footer {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
        }
        .footer button {
            background-color: #008080;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 14px;
        }
        .footer button:hover {
            background-color: #005f5f;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">11. MATRIZ CAME</div>
        <p class="description">Reflexione y anote acciones a llevar a cabo teniendo en cuenta que estas acciones deben favorecer la ejecución exitosa de la estrategia general identificada.</p>
        <form method="POST" action="../funtions/guardar_matriz_came.php">
            <table>
                <thead>
                    <tr>
                        <th>Acciones</th>
                        <th>Corregir las Debilidades</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <tr>
                            <td class="section-header"><?= $i === 0 ? 'C' : '' ?></td>
                            <td class="textarea-cell">
                                <textarea name="debilidades[]" placeholder="Debilidad <?= $i + 1 ?>"><?= $debilidades[$i] ?? '' ?></textarea>
                            </td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>

            <table>
                <thead>
                    <tr>
                        <th>Acciones</th>
                        <th>Afrontar las Amenazas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <tr>
                            <td class="section-header"><?= $i === 0 ? 'A' : '' ?></td>
                            <td class="textarea-cell">
                                <textarea name="amenazas[]" placeholder="Amenaza <?= $i + 1 ?>"><?= $amenazas[$i] ?? '' ?></textarea>
                            </td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>

            <table>
                <thead>
                    <tr>
                        <th>Acciones</th>
                        <th>Mantener las Fortalezas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <tr>
                            <td class="section-header"><?= $i === 0 ? 'M' : '' ?></td>
                            <td class="textarea-cell">
                                <textarea name="fortalezas[]" placeholder="Fortaleza <?= $i + 1 ?>"><?= $fortalezas[$i] ?? '' ?></textarea>
                            </td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>

            <table>
                <thead>
                    <tr>
                        <th>Acciones</th>
                        <th>Explotar las Oportunidades</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <tr>
                            <td class="section-header"><?= $i === 0 ? 'E' : '' ?></td>
                            <td class="textarea-cell">
                                <textarea name="oportunidades[]" placeholder="Oportunidad <?= $i + 1 ?>"><?= $oportunidades[$i] ?? '' ?></textarea>
                            </td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>

            <button type="submit">Guardar</button>
        </form>

        <div class="footer">
            <button onclick="location.href='identificacion_estrategia.php'">10. IDENTIFICACIÓN DE ESTRATEGIAS</button>
            <button onclick="location.href='resumen.php'">RESUMEN ESTRATÉGICO</button>
        </div>
    </div>
</body>
</html>

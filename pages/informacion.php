<?php
include("../config/conexion.php");

// Conectar a la base de datos
$link = conectarse();

// Consultar los datos de la empresa
$empresaQuery = "SELECT nombre, descripcion FROM empresa LIMIT 1";
$empresaResult = mysqli_query($link, $empresaQuery);
$empresa = mysqli_fetch_assoc($empresaResult);

// Obtener los datos de la empresa o usar valores predeterminados si no hay datos
$nombre_empresa = $empresa ? $empresa['nombre'] : "";
$descripcion_empresa = $empresa ? $empresa['descripcion'] : "";

// Cerrar la conexión
mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de la Empresa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: relative;
        }
        .header {
            background-color: #008080;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
        }
        .content {
            margin-top: 20px;
        }
        .example {
            background-color: #e0f7fa;
            border-left: 4px solid #008080;
            padding: 10px;
            margin: 10px 0;
        }
        .example h3 {
            margin: 0 0 10px;
            font-size: 18px;
        }
        .input-section {
            margin-top: 20px;
            padding: 10px;
            border-top: 2px solid #008080;
        }
        .input-section p {
            font-size: 14px;
            color: #008080;
            margin: 10px 0;
        }
        .input-section textarea {
            width: 100%;
            padding: 10px;
            border: 2px solid #008080;
            border-radius: 4px;
            resize: none;
            font-size: 14px;
        }
        .index-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #ef8586;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }
        .index-button:hover {
            background-color: #d76f70;
        }
        .footer {
            margin-top: 20px;
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
        }
        .footer button:hover {
            background-color: #005f5f;
        }
        .footer .next-button {
            background-color: #87CEEB;
        }
        .footer .next-button:hover {
            background-color: #00BFFF;
        }
        .save-button {
            background-color: #87CEEB;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 15px;
        }
        .save-button:hover {
            background-color: #00BFFF;
        }
    </style>
</head>
<body>

<div class="container">
    <button class="index-button" onclick="location.href='index.php'">INDICE</button>

    <div class="header">
        <h1>INFORMACIÓN DE LA EMPRESA</h1>
    </div>

    <div class="content">
        <p>El Plan Estratégico de Tecnologías de la Información – PETI, busca que la Entidad administre de manera eficiente los recursos de tecnología, los sistemas de información y la información, necesarios para la gestión de la organización.</p>
        <p>Ejemplo de un plan estratégico de TI - 
            <a href="https://www.inei.gob.pe/media/pte/PETI/Plan_Estrategico_de_Tecnologia_de_la_Informacion-PETI%20VF.PDF" target="_blank">https://www.inei.gob.pe/media/pte/PETI/Plan_Estrategico_de_Tecnologia_de_la_Informacion-PETI%20VF.PDF</a>
        </p>

        <div class="example">
            <h3>EJEMPLOS</h3>
            <p><strong>Apple Inc.</strong><br>Apple es una empresa tecnológica multinacional con sede en Cupertino, California. Se especializa en el diseño, desarrollo y comercialización de productos electrónicos, software y servicios...</p>
            <p><strong>Amazon.com, Inc.</strong><br>Amazon es una de las mayores empresas de comercio electrónico y tecnología del mundo...</p>
            <p><strong>Tesla, Inc.</strong><br>Tesla es una empresa automotriz y de energía con sede en Palo Alto, California...</p>
        </div>
    </div>

    <!-- Formulario para editar y guardar los datos -->
    <form action="../funtions/guardar_informacion.php" method="POST">
        <div class="input-section">
            <p>En este apartado escriba el nombre de la empresa</p>
            <textarea name="nombre" placeholder="Escriba el nombre de la empresa"><?php echo htmlspecialchars($nombre_empresa); ?></textarea>

            <p>En este apartado escriba una descripción breve de lo que hace la empresa</p>
            <textarea name="descripcion" rows="5" placeholder="Escriba una descripción breve de lo que hace la empresa"><?php echo htmlspecialchars($descripcion_empresa); ?></textarea>
        </div>

        <!-- Botón para guardar los cambios -->
        <div style="text-align: center;">
            <button type="submit" class="save-button">Guardar cambios</button>
        </div>
    </form>

    <div class="footer">
        <button onclick="location.href='index.php'">INDICE</button>
        <button class="next-button" onclick="location.href='mision.php'">I. MISIÓN</button>
    </div>
</div>

</body>
</html>

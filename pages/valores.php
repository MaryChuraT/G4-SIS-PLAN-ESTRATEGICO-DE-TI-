<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores</title>
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
            font-size: 16px;
        }

        .content ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        .example {
            background-color: #e0f7fa;
            border-left: 4px solid #008080;
            padding: 10px;
            margin: 10px 0;
        }

        .form-section {
            margin-top: 20px;
            background-color: #f0f0f0;
            padding: 10px;
            text-align: center;
        }

        .form-section input[type="text"] {
            width: 100%;
            height: 30px;
            border: 2px solid blue;
            border-radius: 4px;
            padding: 5px;
        }

        .footer {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        button {
            background-color: #008080;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #005f5f;
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

        .nav-buttons {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .nav-buttons button {
            background-color: #00bfff;
        }

        .nav-buttons button:hover {
            background-color: #0080ff;
        }

    </style>
</head>
<body>

    <div class="container">
        <button class="index-button" onclick="location.href='index.php'">INDICE</button>

        <div class="header">
            <h1>3. VALORES</h1>
        </div>

        <div class="content">
            <p>Los <strong>VALORES</strong> de una empresa son el conjunto de principios, reglas y aspectos culturales con los que se rige la organización. Son las pautas de comportamiento de la empresa y generalmente son pocos, entre 3 y 6. Son tan fundamentales y tan arraigados que casi nunca cambian.</p>
            <p>Ejemplo de valores:</p>
            <ul>
                <li>Integridad</li>
                <li>Compromiso con el desarrollo humano</li>
                <li>Ética profesional</li>
                <li>Responsabilidad social</li>
                <li>Innovación</li>
                <li>Etc.</li>
            </ul>

            <div class="example">
                <h3>EJEMPLOS</h3>
                <p><strong>Empresa de servicios:</strong></p>
                <ul>
                    <li>La excelencia en la prestación de servicios.</li>
                    <li>La innovación orientada a la mejora continua de procesos, productos y servicios.</li>
                    <li>La promoción del diálogo y compromiso con los grupos de interés.</li>
                </ul>

                <p><strong>Empresa productora de café:</strong></p>
                <ul>
                    <li>Nuestro valor es la búsqueda de la perfección o bien la pasión por la excelencia, entendida como amor por lo bello y bien hecho, y la ética, entendida como construcción de valor en el tiempo a través de la sostenibilidad, la transparencia, y la valorización de las personas.</li>
                </ul>

                <p><strong>Agencia de certificación:</strong></p>
                <ul>
                    <li>Integridad y ética.</li>
                    <li>Consejo y validación imparciales.</li>
                    <li>Respeto por todas las personas.</li>
                    <li>Responsabilidad social y medioambiental.</li>
                </ul>
            </div>

        </div>

        <div class="form-section">
            <p>En este apartado exponga los Valores de su empresa</p>
            <form action="guardar_valores.php" method="POST">
                <table style="width: 100%;">
                    <?php
                    include '../config/conexion.php'; // Incluir el archivo de conexión
                    $link = conectarse(); // Conectar a la base de datos

                    // Consulta para obtener los valores
                    $sql = "SELECT * FROM valores";
                    $result = mysqli_query($link, $sql);

                    // Mostrar los valores en el formulario
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr><td><input type="text" name="valor[]" value="' . $row['texto'] . '"></td></tr>';
                        }
                    } else {
                        // Si no hay valores, mostrar campos vacíos
                        for ($i = 0; $i < 6; $i++) {
                            echo '<tr><td><input type="text" name="valor[]"></td></tr>';
                        }
                    }

                    mysqli_close($link); // Cerrar la conexión
                    ?>
                </table>
                <br>
                <button type="submit">Guardar cambios</button>
            </form>
        </div>
        
        <div class="footer">
            <button onclick="location.href='vision.php'">2. VISIÓN</button> <!-- Botón de índice en la parte inferior -->
            <button onclick="location.href='objetivos.php'">4. OBJETIVOS</button>
        </div>

    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISIÓN</title>
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
        .save-button {
            background-color: #87CEEB;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .save-button:hover {
            background-color: #00BFFF;
        }
        .boton {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <button class="index-button" onclick="location.href='index.php'">ÍNDICE</button> <!-- Botón de índice -->

        <div class="header">
            <h1>2. VISIÓN</h1>
        </div>

        <div class="content">
            <p>
                La <strong>VISIÓN</strong> define lo que la empresa/organización quiere lograr en el futuro.
                <ul>
                    <li>Debe ser retadora, positiva, compartida y coherente con la misión.</li>
                    <li>Marca el fin último que la estrategia debe seguir.</li>
                    <li>Proyecta la imagen de destino que se pretende alcanzar.</li>
                </ul>
            </p>

            <p>
                La visión debe ser conocida y compartida por todos los miembros de la empresa y también por aquellos que se relacionan con ella.
            </p>

            <?php
            include '../config/conexion.php'; // Incluir el archivo de conexión
            $link = conectarse(); // Conectar a la base de datos

            // Recuperar el texto de la tabla vision
            $sql = "SELECT texto FROM vision LIMIT 1"; // Recupera solo un registro
            $result = mysqli_query($link, $sql);
            $texto = "";

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $texto = $row["texto"];
                    }
                } else {
                    $texto = "No se encontró texto en la base de datos.";
                }
            } else {
                echo "Error en la consulta: " . mysqli_error($link);
            }

            mysqli_close($link); // Cerrar la conexión
            ?>

            <!-- Iniciar el formulario -->
            <form action="../funtions/guardar_vision.php" method="POST">
                <textarea name="texto" rows="5" style="width: 100%; border-radius: 5px; padding: 10px;"><?php echo htmlspecialchars($texto); ?></textarea>
                
                <div class="boton" style="justify-content: center;">
                    <button type="submit" class="save-button">Guardar cambios</button> <!-- Botón de guardar cambios -->
                </div>
            </form>
        </div>

        <div class="footer">
            <button onclick="location.href='mision.php'">1. MISION</button> <!-- Botón de índice inferior -->
            <button onclick="location.href='valores.php'">3. VALORES</button> <!-- Botón de navegación a la siguiente página -->
        </div>
    </div>

</body>
</html>

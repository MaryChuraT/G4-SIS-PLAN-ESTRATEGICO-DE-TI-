<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misión</title>
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
            position: relative; /* Para posicionar el botón de índice */
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
            background-color: #d76f70; /* Color rosado más oscuro al pasar el mouse */
        }
        .save-button {
            background-color: #87CEEB; /* Color azul claro */
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .save-button:hover {
            background-color: #00BFFF; /* Color azul más oscuro al pasar el mouse */
        }
        .boton {
            margin-top: 20px;
            display: flex;
            justify-content: center; /* Centrar el contenido en el eje horizontal */
        }
    </style>
</head>
<body>

    <div class="container">
        <button class="index-button" onclick="location.href='index.php'">INDICE</button> <!-- Botón de índice en la parte superior izquierda -->

        <div class="header">
            <h1>1. MISIÓN</h1>
        </div>

        <div class="content">
            <p>
                La <strong>MISIÓN</strong> es la razón de ser de la empresa/organización.
                <ul>
                    <li>Debe ser clara, concisa y compartida.</li>
                    <li>Siempre orientada hacia el cliente no hacia el producto o servicio.</li>
                    <li>Refleja el propósito fundamental de la empresa en el mercado.</li>
                </ul>
            </p>

            <p>
                En términos generales describe la actividad y razón de ser de la organización y contribuye como una referencia permanente en el proceso de planificación estratégica. Se expresa a través de una oración que define el propósito fundamental de su existencia, estableciendo qué hace la empresa, por qué y para quién lo hace.
            </p>

            <div class="example">
                <h3>Ejemplos</h3>
                <p><strong>Empresa de servicios:</strong> La gestión de servicios que contribuyen a la calidad de vida de las personas y generan valor para los grupos de interés.</p>
                <p><strong>Empresa productora de café:</strong> Gracias a nuestro entusiasmo, trabajo en equipo y valores, queremos deleitar a nuestros clientes, en el mundo aman la calidad de vida, a través del mejor café que la naturaleza pueda ofrecer, ensalzado por las mejores tecnologías, por la emoción y la implicación intelectual que nacen de la búsqueda de lo bello en todo lo que hacemos.</p>
                <p><strong>Agencia de certificación:</strong> Dar a nuestros clientes alvoro económico a través de la gestión de la Calidad, la Salud y la Seguridad, el Medio Ambiente y la Responsabilidad Social de sus activos, proyectos, productos y sistemas, obteniendo como resultado la capacidad para lograr la reducción de riesgos y la mejora de los resultados.</p>
            </div>

            <p>En este apartado describe la Misión de su empresa.</p>

            <?php
            include 'conexion.php'; // Incluir el archivo de conexión
            $link = conectarse(); // Conectar a la base de datos

            // Recuperar el texto de la tabla mision
            $sql = "SELECT texto FROM mision LIMIT 1"; // Recupera solo un registro
            $result = mysqli_query($link, $sql);
            $texto = "";

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    // Salida de cada fila
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
            <form action="guardar_mision.php" method="POST">
                <textarea name="texto" rows="5" style="width: 100%; border-radius: 5px; padding: 10px;"><?php echo htmlspecialchars($texto); ?></textarea>
                
                <div class="boton" style="justify-content: center;">
                    <button type="submit" class="save-button">Guardar cambios</button> <!-- Botón de guardar cambios centrado -->
                </div>
            </form>
        </div>

        <div class="footer">
            <button onclick="location.href='index.php'">INDICE</button> <!-- Botón de índice en la parte inferior -->
            <button onclick="location.href='vision.php'">2. VISIÓN</button>
        </div>
    </div>

</body>
</html>

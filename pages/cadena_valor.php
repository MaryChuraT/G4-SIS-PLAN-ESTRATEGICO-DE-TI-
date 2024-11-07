<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autodiagnóstico de la Cadena de Valor</title>
    <style>
        /* Manteniendo los estilos originales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            width: 90%;
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            position: relative;
        }
        .header {
            background-color: #008080;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
            font-size: 24px;
            font-weight: bold;
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
        .question {
            margin: 20px 0;
        }
        .question label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .options {
            display: flex;
            gap: 10px;
        }
        .options label {
            font-weight: normal;
        }
        .submit-button, .calculate-button {
            background-color: #008080;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
            display: block;
            width: 100%;
        }
        .result-container {
            background-color: #e0f2f1;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
        .reflection-container {
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        .reflection-title {
            font-size: 16px;
            font-weight: bold;
            color: #555;
            margin-bottom: 10px;
            text-align: center;
            font-style: italic;
        }
        .textarea {
            width: 95%;
            max-width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            height: 100px;
            resize: none;
            margin: 0 auto;
            display: block;
        }
        .strengths-section, .weaknesses-section {
            margin-top: 20px;
        }
        .section-title {
            background-color: #f0f0f0;
            padding: 10px;
            font-weight: bold;
            color: #333;
            border-radius: 4px;
            text-align: center;
        }
        .input-group {
            display: flex;
            gap: 10px;
            align-items: center;
            margin-top: 10px;
        }
        .input-group label {
            width: 50px;
            font-weight: bold;
            text-align: center;
        }
        .input-group input {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        .footer-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .navigation-button {
            background-color: #008080;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        .navigation-button:hover {
            background-color: #005f5f;
        }
    </style>
</head>
<body>

<div class="container">
    <button class="index-button" onclick="location.href='index.php'">ÍNDICE</button>

    <div class="header">
        Autodiagnóstico de la Cadena de Valor Interna
    </div>

    <?php
    include '../config/conexion.php';
    $link = conectarse();

    // Guardar datos si el formulario fue enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fortaleza_1 = mysqli_real_escape_string($link, $_POST['strength1'] ?? '');
        $fortaleza_2 = mysqli_real_escape_string($link, $_POST['strength2'] ?? '');
        $debilidad_1 = mysqli_real_escape_string($link, $_POST['weakness1'] ?? '');
        $debilidad_2 = mysqli_real_escape_string($link, $_POST['weakness2'] ?? '');
        $observacion = mysqli_real_escape_string($link, $_POST['observations'] ?? '');

        // Actualizar fortalezas y debilidades
        if (!empty($fortaleza_1)) {
            $queryUpdateFortaleza1 = "UPDATE fortaleza SET texto='$fortaleza_1' WHERE id=1";
            mysqli_query($link, $queryUpdateFortaleza1);
        }
        if (!empty($fortaleza_2)) {
            $queryUpdateFortaleza2 = "UPDATE fortaleza SET texto='$fortaleza_2' WHERE id=2";
            mysqli_query($link, $queryUpdateFortaleza2);
        }
        if (!empty($debilidad_1)) {
            $queryUpdateDebilidad1 = "UPDATE debilidad SET texto='$debilidad_1' WHERE id=1";
            mysqli_query($link, $queryUpdateDebilidad1);
        }
        if (!empty($debilidad_2)) {
            $queryUpdateDebilidad2 = "UPDATE debilidad SET texto='$debilidad_2' WHERE id=2";
            mysqli_query($link, $queryUpdateDebilidad2);
        }

        // Guardar o actualizar observación
        if (!empty($observacion)) {
            $queryInsertObservacion = "INSERT INTO observaciones (texto) VALUES ('$observacion')";
            mysqli_query($link, $queryInsertObservacion);
        }

        echo "<div class='result-container'>Datos guardados correctamente.</div>";
    }

    // Cargar observación guardada, fortalezas y debilidades
    $queryUltimaObservacion = "SELECT texto FROM observaciones ORDER BY id DESC LIMIT 1";
    $resultObservacion = mysqli_query($link, $queryUltimaObservacion);
    $observacionActual = mysqli_fetch_assoc($resultObservacion)['texto'] ?? '';

    $queryFortalezas = "SELECT texto FROM fortaleza WHERE id IN (1, 2)";
    $resultFortalezas = mysqli_query($link, $queryFortalezas);
    $fortalezas = [];
    while ($row = mysqli_fetch_assoc($resultFortalezas)) {
        $fortalezas[] = $row['texto'];
    }

    $queryDebilidades = "SELECT texto FROM debilidad WHERE id IN (1, 2)";
    $resultDebilidades = mysqli_query($link, $queryDebilidades);
    $debilidades = [];
    while ($row = mysqli_fetch_assoc($resultDebilidades)) {
        $debilidades[] = $row['texto'];
    }

    mysqli_close($link);
    ?>

    <form method="post" action="">
        <?php
        // Array con las 25 oraciones del autodiagnóstico
        $oraciones = [
            "La empresa tiene una política sistematizada de cero defectos en la producción de productos/servicios.",
            "La empresa emplea los medios productivos tecnológicamente más avanzados de su sector.",
            "La empresa dispone de un sistema de información y control de gestión eficiente y eficaz.",
            "Los medios técnicos y tecnológicos de la empresa están preparados para competir en un futuro a corto, medio y largo plazo.",
            "La empresa es un referente en su sector en I+D+i.",
            "La excelencia de los procedimientos de la empresa (en ISO, etc.) son una principal fuente de ventaja competitiva.",
            "La empresa dispone de página web, y esta se emplea no sólo como escaparate virtual de productos/servicios, sino también para establecer relaciones con clientes y proveedores.",
            "Los productos/servicios que desarrolla nuestra empresa llevan incorporada una tecnología difícil de imitar.",
            "La empresa es referente en su sector en la optimización, en términos de coste, de su cadena de producción, siendo ésta una de sus principales ventajas competitivas.",
            "La informatización de la empresa es una fuente de ventaja competitiva clara respecto a sus competidores.",
            "Los canales de distribución de la empresa son una importante fuente de ventajas competitivas.",
            "Los productos/servicios de la empresa son altamente, y diferencialmente, valorados por el cliente respecto a nuestros competidores.",
            "La empresa dispone y ejecuta un sistemático plan de marketing y ventas.",
            "La empresa tiene optimizada su gestión financiera.",
            "La empresa busca continuamente mejorar la relación con sus clientes cortando los plazos de ejecución, personalizando la oferta o mejorando las condiciones de entrega.",
            "La empresa es referente en su sector en el lanzamiento de productos innovadores y servicios de éxito demostrado en el mercado.",
            "Los Recursos Humanos son especialmente responsables del éxito de la empresa, considerándolos el principal activo estratégico.",
            "Se tiene una plantilla altamente motivada, que conoce con claridad las metas, objetivos y estrategias de la organización.",
            "La empresa siempre trabaja conforme a una estrategia y objetivos claros.",
            "La gestión del circulante está optimizada.",
            "Se tiene definido claramente el posicionamiento estratégico de todos los productos de la empresa.",
            "Se dispone de una política de marca basada en la reputación generada y en la gestión de relación con el cliente.",
            "La cartera de clientes de nuestra empresa está altamente fidelizada, con el propósito de deleitarlos día a día.",
            "Nuestra política y equipo de ventas y marketing es una ventaja competitiva importante.",
            "El servicio al cliente que prestamos es una de nuestras principales ventajas competitivas respecto a nuestros competidores."
        ];

        // Generar preguntas con opciones del 1 al 5
        foreach ($oraciones as $index => $oracion) {
            echo '<div class="question">';
            echo '<label>' . ($index + 1) . '. ' . $oracion . '</label>';
            echo '<div class="options">';
            for ($i = 1; $i <= 5; $i++) {
                echo '<label><input type="radio" name="respuesta[' . $index . ']" value="' . $i . '" required> ' . $i . '</label>';
            }
            echo '</div></div>';
        }
        ?>

        <!-- Botón de calcular debajo de la última pregunta -->
        <button type="button" onclick="calcularPotencial()" class="calculate-button">Calcular Potencial de Mejora</button>
        
        <!-- Mostrar resultado del cálculo -->
        <div id="resultado-potencial" class="result-container" style="display:none;">Potencial de Mejora: <span id="potencial-porcentaje"></span>%</div>

        <!-- Observaciones -->
        <div class="reflection-container">
            <div class="reflection-title">
                Reflexione sobre el resultado obtenido. Anote aquellas observaciones que puedan ser de su interés.
            </div>
            <textarea class="textarea" name="observations" placeholder="Escribe tus observaciones aquí..."><?php echo htmlspecialchars($observacionActual); ?></textarea>
        </div>

        <!-- Fortalezas -->
        <div class="strengths-section">
            <div class="section-title">FORTALEZAS</div>
            <div class="input-group">
                <label>F1:</label>
                <input type="text" name="strength1" value="<?php echo htmlspecialchars($fortalezas[0] ?? ''); ?>" placeholder="Fortaleza 1">
            </div>
            <div class="input-group">
                <label>F2:</label>
                <input type="text" name="strength2" value="<?php echo htmlspecialchars($fortalezas[1] ?? ''); ?>" placeholder="Fortaleza 2">
            </div>
        </div>

        <!-- Debilidades -->
        <div class="weaknesses-section">
            <div class="section-title">DEBILIDADES</div>
            <div class="input-group">
                <label>D1:</label>
                <input type="text" name="weakness1" value="<?php echo htmlspecialchars($debilidades[0] ?? ''); ?>" placeholder="Debilidad 1">
            </div>
            <div class="input-group">
                <label>D2:</label>
                <input type="text" name="weakness2" value="<?php echo htmlspecialchars($debilidades[1] ?? ''); ?>" placeholder="Debilidad 2">
            </div>
        </div>

        <!-- Botón de guardar datos -->
        <button type="submit" class="submit-button">Guardar Datos</button>
    </form>

    <!-- Botones de navegación al pie de página -->
    <div class="footer-buttons">
        <button onclick="location.href='analisis_interno_externo.php'" class="navigation-button">5. ANÁLISIS INTERNO Y EXTERNO</button>
        <button onclick="location.href='cadena_de_valor.php'" class="navigation-button">6. CADENA DE VALOR</button>
    </div>
</div>

<script>
    function calcularPotencial() {
        const respuestas = document.querySelectorAll('input[type="radio"]:checked');
        let suma = 0;
        
        respuestas.forEach((respuesta) => {
            suma += parseInt(respuesta.value);
        });

        const potencial = ((suma / (respuestas.length * 5)) * 100).toFixed(2);
        document.getElementById('potencial-porcentaje').textContent = potencial;
        document.getElementById('resultado-potencial').style.display = 'block';
    }
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Estratégico de TI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            background-color: #008080;
            color: white;
            padding: 20px;
        }
        .buttons-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-top: 20px;
        }
        .buttons-grid button {
            background-color: #008080;
            color: white;
            border: none;
            padding: 15px;
            font-size: 16px;
            cursor: pointer;
        }
        .buttons-grid button:hover {
            background-color: #005f5f;
        }
        .info-button {
            background-color: #008080;
            color: white;
            border: none;
            padding: 15px;
            font-size: 16px;
            width: 100%;
            cursor: pointer;
            margin-top: 20px;
        }
        .info-button:hover {
            background-color: #005f5f;
        }
        pre {
            font-family: Arial, sans-serif;
            white-space: pre-wrap;
        }
        .left, .right {
            position: absolute;
            top: 0;
            width: 120px;
            height: auto;
        }
        .left {
            left: 0;
            width: 180px;
            height: auto;
        }
        .right {
            right: 0;
        }
    </style>
</head>
<body>

    <!-- Imagen izquierda -->
    <img src="../img/upt.png" class="left" alt="Logo izquierda">

    <!-- Imagen derecha -->
    <img src="../img/epis.png" class="right" alt="Logo derecha">

    <div class="container">
        <div class="header">
            <h1>CÓMO ELABORAR UN PLAN ESTRATÉGICO DE TECNOLOGÍAS DE INFORMACIÓN - PETI</h1>
        </div>
        
        <p>
            El éxito de las organizaciones reside en gran parte en la capacidad que tienen sus directivos en ejecutar una estrategia más que en la calidad de la estrategia en sí. Su planificación y asignación de recursos son fundamentales para el logro de la misma. En este sentido, un Plan Estratégico de TI puede entenderse como el conjunto de acciones que han de llevarse a cabo para alinear los recursos y potencialidades tecnológicos al objeto de conseguir el estado deseado, es decir, adaptación y adquisición de competitividad empresarial, alineados al plan estratégico general.
            <br>
            Esta aplicación le ayudará a reflexionar sobre la estrategia que debe llevar a cabo. Visualizará dónde quiere estar, dónde está actualmente y, qué camino tendrá que trazar para llevarle a otro estado.
        </p>

        <pre>
        Para visualizar dónde quiere estar su empresa tendrá que definir:                 
            1- Misión           
            2- Visión           
            3- Valores           

        Para entender dónde está tendrá, que llevar a cabo un doble análisis:              
            1- Análisis interno         
            2- Análisis externo           

        Para trazar el camino para ir de un punto a otro tendrá que:                
            1- Identificar la estrategia más conveniente          
            2- Determinar acciones para el facilitar el logro de la estrategia
        </pre>

        <p>
            Gracias al Plan Empresarial determinará la forma de lograr una ventaja competitiva para su proyecto de inversión.
        </p>

        <!-- Botón para INFORMACIÓN DE LA EMPRESA -->
        <button class="info-button" onclick="location.href='informacion.php'">INFORMACIÓN DE LA EMPRESA</button>

        <div class="buttons-grid">
            <button onclick="location.href='mision.php'">1. MISIÓN</button>
            <button onclick="location.href='vision.php'">2. VISIÓN</button>
            <button onclick="location.href='valores.php'">3. VALORES</button>
            <button onclick="location.href='objetivos.php'">4. OBJETIVOS</button>
            <button onclick="location.href='analisis_interno_externo.php'">5. ANÁLISIS INTERNO Y EXTERNO</button>
            <button onclick="location.href='analisis_interno.php'">6. CADENA DE VALOR</button>
            <button onclick="location.href='matriz_participacion.php'">7. MATRIZ PARTICIPACIÓN</button>
            <button onclick="location.href='fuerzas_porter.php'">8. LAS 5 FUERZAS DE PORTER</button>
            <button onclick="location.href='pest.php'">9. PEST</button>
            <button onclick="location.href='identificacion_estrategia.php'">10. IDENTIFICACIÓN ESTRATEGIA</button>
            <button onclick="location.href='matriz_came.php'">11. MATRIZ CAME</button>
        </div>

        <!-- Botón para RESUMEN DEL PLAN EJECUTIVO -->
        <button class="info-button" onclick="location.href='resumen.php'">RESUMEN DEL PLAN EJECUTIVO</button>
    </div>

</body>
</html>

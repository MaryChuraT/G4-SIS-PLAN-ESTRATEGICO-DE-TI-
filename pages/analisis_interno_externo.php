<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análisis Interno y Externo</title>
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
        .boton {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }
        .image-container {
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <button class="index-button" onclick="location.href='index.php'">INDICE</button>

    <div class="header">
        <h1>5. ANÁLISIS INTERNO Y EXTERNO</h1>
    </div>

    <div class="content">
        <p>Fijados los obejtivos estretégicos se debe analizar las distintas estrategias para lograrlos. De esta forma, las estrategias son los caminos, vías, o enfoques para alcanzar los objetivos. Responden a la pregunta ¿cómo?. </p>
        <p>Para determinar la estrategia, podriamos basarnos en el conjunto de estrategias genéricas y especificas que diferentes profesionales proponen al respecto. Esta guía, lejos de rozar la teoría, propopone llevar a cabo un análisis interno y externo de su empresa para obtener una matriz cruzada e identificar la estrategia más conveneinte a llevar a cabo. </p>
        <p>Este análisis le permitirá detectar por un lado los factores de éxito (fortalezas y oportunidades), y por otro lado, las debilidades y amenazas que una empresa debe gestionar. </p>

        <div class="image-container">
            <img src="../img/analisis1.png" alt="Gráfico Análisis Externo" style="width:500px; height:auto;">
        </div>

        <p><strong>Oportunidades:</strong> aquellos aspectos que pueden presentar una posibilidad para mejorar la rentabilidad de la empresa, aumentar la cifra de negocio y fortalecer la ventaja competitiva.</p>
        <div class="example">
            <p><strong>Ejemplos:</strong> Fuerte crecimiento, desarrollo de la externalización, nuevas tecnlogías, seguridad de la distribución, atender a grupos adiconales de clientes, crecimeinto rápìdo del mercado etc.</p>
        </div>

        <p><strong>Amenazas:</strong> son fuerzas y presiones del mercado-entorno que pueden impedir y dificultar el crecimiento de la empresa, la ejecución de la estrategia, reducir su eficacia o incrementar los riesgos en relación con el entorno y sector de actividad. </p>
        <div class="example">
            <p><strong>Ejemplos:</strong> Competencia en el mercado, aparición de nuevos competidores, reglamentación, monopolio en una materia prima, cambio en las necesidades de los consumidores, creciente poder de negociación de clientes y/o proveedores etc.</p>
        </div>

        <p><strong>Fortalezas:</strong> son capacidades, recursos, posiciones alcanzadas, ventajas competitivas que posee la empresa y que le ayudarán a aprovechar las oportunidades del mercado.</p>
        <div class="example">
            <p><strong>Ejemplos:</strong> Buena implantación en el territorio, notoriedad de la marca, capacidad de innovación, recuros financieros adecuados, ventajas en costes, lider en el mercado, buena imagen ante los consumidores etc.  </p>
        </div>

        <p><strong>Debilidades:</strong> son todos aquellos aspectos que limitan o reducen la capacidad de desarrollo de la empresa. Constituyen disficultades para la organización y deben, por tanto, ser controladas y superadas.</p>
        <div class="example">
            <p><strong>Ejemplos:</strong> Precios elevados, productos en el final de su ciclo de vida, deficiente control de los riesgos, recuros humanos poco cualificados, débil imagen en el mercado, red de distribución débil, no hay dirección estratégica clara etc.</p>
        </div>

        <p>Para elaborar el análisis FODA de su empresa, le proponemos que utilice distintos instrumentos para el análisis tanto interno como externo.</p>

        <div class="image-container">
            <img src="../img/analisis2.png" alt="Gráfico FODA" style="width:500px; height:auto;">
        </div>
    </div>

    <div class="footer">
        <button onclick="location.href='objetivos.php'">4. OBJETIVOS ESTRATÉGICOS</button>
        <button onclick="location.href='analisis_interno.php'">6. CADENA DE VALOR</button>
    </div>
</div>

</body>
</html>

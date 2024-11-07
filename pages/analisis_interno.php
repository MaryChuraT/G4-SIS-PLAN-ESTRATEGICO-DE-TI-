<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6. Análisis Interno: Cadena de Valor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            width: 90%;
            max-width: 1000px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            position: relative;
        }
        .header {
            background-color: #008080;
            color: white;
            padding: 20px;
            padding-top: 40px;
            text-align: center;
            border-radius: 8px 8px 0 0;
            font-size: 24px;
            font-weight: bold;
            position: relative;
        }
        .index-button {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #ef8586;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
        }
        .index-button:hover {
            background-color: #d76f70;
        }
        .intro-text {
            margin: 20px;
            font-size: 16px;
            line-height: 1.6;
        }
        .section-title {
            color: #008080;
            font-size: 20px;
            font-weight: bold;
            margin-top: 30px;
            text-align: center;
            border-bottom: 2px solid #e0f7fa;
            padding-bottom: 5px;
        }
        .value-chain-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
            padding: 0 20px;
        }
        .activity-column {
            flex: 1;
            min-width: 250px;
            margin: 10px;
            padding: 20px;
            background-color: #e0f7fa;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .activity-title {
            font-weight: bold;
            font-size: 16px;
            color: #005f5f;
            margin-bottom: 5px;
        }
        .activity-box {
            margin-bottom: 15px;
        }
        .margin-section {
            text-align: center;
            margin-top: 20px;
            padding: 20px;
            background-color: #fce4ec;
            border: 2px solid #e91e63;
            border-radius: 8px;
            font-weight: bold;
        }
        .note {
            margin-top: 30px;
            padding: 20px;
            background-color: #e0f2f1;
            border-left: 4px solid #008080;
            border-radius: 4px;
            font-size: 14px;
            text-align: center;
        }
        .image-container {
            text-align: center;
            margin: 30px 0;
        }
        .image-placeholder {
            width: 100%;
            max-width: 600px;
            height: 300px;
            background-color: #ddd;
            border: 1px solid #ccc;
            padding: 10px;
            color: #666;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            font-size: 14px;
            border-radius: 4px;
        }
        .footer-buttons {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            margin-top: 20px;
            border-top: 1px solid #ddd;
            background-color: #f9f9f9;
            border-radius: 0 0 8px 8px;
        }
        .footer-buttons button {
            background-color: #008080;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
        }
        .footer-buttons button:hover {
            background-color: #005f5f;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Botón de índice dentro del encabezado -->
    <div class="header">
        <button class="index-button" onclick="location.href='index.php'">ÍNDICE</button>
        6. Análisis Interno: La Cadena de Valor
    </div>

    <div class="intro-text">
        <p>Todas las actividades de una empresa forman la cadena de valor. La Cadena de Valor es una herramienta que permite a la empresa identificar aquellas actividades o fases que pueden aportarle un mayor valor añadido al producto final. Esto permite buscar fuentes de ventaja competitiva.</p>
        <p>La empresa está formada por una secuencia de actividades diseñadas para añadir valor al producto o servicio según las distintas fases, hasta que se llega al cliente final.</p>
        <p>Una cadena de valor genérica está constituida por tres elementos básicos: Actividades Primarias, Actividades de Apoyo y el Margen.</p>
    </div>

    <!-- Placeholder for Graphic 1 -->
    <div class="image-container">
    <img src="../img/cade_gen.png" alt="Gráfico de Cadena de Valor con Margen" style="width:100%; max-width:800px; height:auto; border-radius:4px;">
    </div>

    <!-- Actividades Primarias -->
    <h2 class="section-title">Actividades Primarias</h2>
    <div class="value-chain-container">
        <div class="activity-column">
            <div class="activity-box">
                <div class="activity-title">Logística de entrada</div>
                <p>Recepción, almacenamiento, manipulación de materiales, inspección interna, devoluciones, inventarios, etc.</p>
            </div>
            <div class="activity-box">
                <div class="activity-title">Operaciones</div>
                <p>Proceso de fabricación, ensamblaje, mantenimiento de equipos, mecanización, embalaje, etc.</p>
            </div>
        </div>
        <div class="activity-column">
            <div class="activity-box">
                <div class="activity-title">Logística de salida</div>
                <p>Gestión de pedidos, honorarios, almacenamiento de producto terminado, transporte, etc.</p>
            </div>
            <div class="activity-box">
                <div class="activity-title">Marketing y ventas</div>
                <p>Comercialización, selección del canal de distribución, publicidad, promoción, política de precio, etc.</p>
            </div>
            <div class="activity-box">
                <div class="activity-title">Servicios</div>
                <p>Reparaciones de productos, instalación, mantenimiento, servicios post-venta, reclamaciones, reajustes del producto, etc.</p>
            </div>
        </div>
    </div>

    <!-- Actividades de Apoyo -->
    <h2 class="section-title">Actividades de Apoyo</h2>
    <div class="value-chain-container">
        <div class="activity-column">
            <div class="activity-box">
                <div class="activity-title">Infraestructura empresarial</div>
                <p>Administración, finanzas, contabilidad, calidad, relaciones públicas, asesoría legal, gerencia, etc.</p>
            </div>
            <div class="activity-box">
                <div class="activity-title">Gestión de recursos humanos</div>
                <p>Selección, contratación, formación, incentivos, etc.</p>
            </div>
        </div>
        <div class="activity-column">
            <div class="activity-box">
                <div class="activity-title">Desarrollo tecnológico</div>
                <p>Telecomunicaciones, automatización, desarrollo de procesos e ingeniería, diseño, saber hacer, procedimientos, I+D, etc.</p>
            </div>
            <div class="activity-box">
                <div class="activity-title">Abastecimiento</div>
                <p>Compras de materias primas, consumibles, equipamientos, servicios, etc.</p>
            </div>
        </div>
    </div>

    <!-- Margen -->
    <div class="margin-section">
        Margen:<br>
        Es la diferencia entre el valor total obtenido y los costes incurridos por la empresa para desempeñar las actividades generadoras de valor
    </div>

    <!-- Placeholder for Graphic 2 -->
    <div class="image-container">
        <img src="../img/cadena.png" alt="Gráfico de Cadena de Valor con Margen" style="width:100%; max-width:800px; height:auto; border-radius:4px;">
    </div>

    <!-- Nota Final -->
    <div class="note">
        <p>A continuación le proponemos un autodiagnóstico de la cadena de valor interna para conocer porcentualmente el potencial de mejora de la cadena de valor.</p>
    </div>

    <!-- Botones de Navegación al Pie de Página -->
    <div class="footer-buttons">
        <button onclick="location.href='analisis_interno_externo.php'">5. ANÁLISIS INTERNO Y EXTERNO</button>
        <button onclick="location.href='cadena_valor.php'">Autodiagnóstico de la cadena de valor</button>
    </div>
</div>

</body>
</html>

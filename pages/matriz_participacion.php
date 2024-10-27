<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz de Participación</title>
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
        .navigation-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .navigation-button {
            background-color: #87CEEB;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .navigation-button:hover {
            background-color: #00BFFF;
        }
        .matrix-image {
            text-align: center;
            margin: 20px 0;
        }
        .matrix-description {
            margin: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
        }
        td {
            text-align: center;
        }
        .strategic-decision {
            background-color: #ef8586;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <button class="index-button" onclick="location.href='index.php'">INDICE</button>

    <div class="header">
        <h1>7. ANÁLISIS INTERNO: MATRIZ DE CRECIMIENTO - PARTICIPACIÓN BCG</h1>
    </div>

    <div class="content">
        <p>Toda empresa debe analizar de forma periodica su cartera de productos y servicios.</p>
        <p>La <strong>Matriz de crecimiento - participación</strong>, conocida como Matriz BCG, es un método gráfico de análisis de cartera de negocios desarrollado por The Boston Consulting Group en la década de 1970. Su finalidad es ayudar a priorizar recursos entre distintas áreas de negocios o Unidades Estratégicas de Análisis (UEA), es decir para determinar en qué negocios debo invertir, desinvertir o incluso abandonar.  Se trata de una sencilla matriz con cuatro cuadrantes, cada uno de los cuales propone una estrategia diferente para una unidad de negocio. Cada cuadrante viene representado por una figura o icono.</p>

        <div class="matrix-description">
            <p>El eje vertical de la matriz define el crecimiento en el mercado, y el horizontal la cuota de mercado.</p>
        </div>

        <div class="matrix-image">
            <img src="../img/bcg_matrix.png" alt="Matriz BCG" style="max-width: 100%; height: auto;">
        </div>

        

        <table>
            <tr>
                <th>Características</th>
                <th>Estrella</th>
                <th>Incógnita</th>
                <th>Vaca</th>
                <th>Perro</th>
            </tr>
            <tr>
                <td>Cuota de mercado</td>
                <td>Alta</td>
                <td>Baja</td>
                <td>Alta</td>
                <td>Baja</td>
            </tr>
            <tr>
                <td>Crecimiento del mercado</td>
                <td>Alto</td>
                <td>Alto</td>
                <td>Bajo</td>
                <td>Bajo</td>
            </tr>
            <tr>
                <td>Inversión requerida</td>
                <td>Alta</td>
                <td>Muy alta</td>
                <td>Baja</td>
                <td>Baja, desinvertir</td>
            </tr>
            <tr class="strategic-decision">
                <td>DECISIÓN ESTRATÉGICA</td>
                <td>POTENCIAR</td>
                <td>EVALUAR</td>
                <td>MANTENER</td>
                <td>REESTRUCTURAR O DESINVERTIR</td>
            </tr>
        </table>

        <p>La situación idónea es tener un cartera equilibrada, es decir, productos y/o servicios con diferentes índices de crecimiento y diferentes cuotas o niveles de participación en el mercado.</p>
    </div>

    <div class="navigation-buttons">
        <button class="navigation-button" onclick="location.href='cadena_valor.php'">6. CADENA DE VALOR</button>
        <button class="navigation-button" onclick="location.href='autodiagnostico_bcg.php'">AUTODIAGNÓSTICO BCG</button>
    </div>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autodiagnóstico BCG</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 90%;
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 0.9em;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #e0f7fa;
            color: #333;
        }
        .highlight {
            background-color: #f2f2f2;
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
        .matrix-icons {
            text-align: center;
            margin-top: 20px;
        }
        .icons img {
            width: 50px;
            margin: 10px;
        }
        .strengths-weaknesses {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .input-box {
            width: 48%;
            background-color: #f5f5f5;
            padding: 10px;
            border-radius: 5px;
        }
        .input-box input {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border-radius: 4px;
            border: 1px solid #ddd;
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
    </style>
</head>
<body>

<div class="container">
    <button class="index-button" onclick="location.href='index.php'">INDICE</button>

    <div class="header">
        <h1>Autodiagnóstico BCG</h1>
    </div>

    <div class="content">
        <p>A continuación analice su cartera de productos y /o servicios e intente clasificarlos calcular el posicionamiento de su cartera de productos en la matriz B.C.G. Para ello rellene las siguientes tablas con la mayor precisión posible.</p>

        <!-- Tabla de Previsión de Ventas -->
        <h3>Previsión de Ventas</h3>
        <table>
            <thead>
                <tr class="highlight">
                    <th>Productos</th>
                    <th>Ventas</th>
                    <th>% S/ Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Producto 1</td>
                    <td><input type="number" min="0" value="0" class="ventas" oninput="calcularTotales()"></td>
                    <td class="porcentaje">0%</td>
                </tr>
                <tr>
                    <td>Producto 2</td>
                    <td><input type="number" min="0" value="0" class="ventas" oninput="calcularTotales()"></td>
                    <td class="porcentaje">0%</td>
                </tr>
                <tr>
                    <td>Producto 3</td>
                    <td><input type="number" min="0" value="0" class="ventas" oninput="calcularTotales()"></td>
                    <td class="porcentaje">0%</td>
                </tr>
                <tr>
                    <td>Producto 4</td>
                    <td><input type="number" min="0" value="0" class="ventas" oninput="calcularTotales()"></td>
                    <td class="porcentaje">0%</td>
                </tr>
                <tr>
                    <td>Producto 5</td>
                    <td><input type="number" min="0" value="0" class="ventas" oninput="calcularTotales()"></td>
                    <td class="porcentaje">0%</td>
                </tr>
                <tr class="highlight">
                    <td>TOTAL</td>
                    <td id="totalVentas">0</td>
                    <td>100%</td>
                </tr>
            </tbody>
        </table>

        <!-- Tabla de Tasas de Crecimiento del Mercado -->
        <h3>Tasas de Crecimiento del Mercado (TCM)</h3>
        <table>
            <thead>
                <tr class="highlight">
                    <th>Períodos</th>
                    <th>Producto 1</th>
                    <th>Producto 2</th>
                    <th>Producto 3</th>
                    <th>Producto 4</th>
                    <th>Producto 5</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2012</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                </tr>
                <tr>
                    <td>2013</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                </tr>
                <tr>
                    <td>2014</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                </tr>
                <tr>
                    <td>2015</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                </tr>
                <tr>
                    <td>2016</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" class="tcm-input" oninput="calcularTCM()" placeholder="0%" />%</td>
                </tr>
            </tbody>
        </table>



        <!-- Tabla de Análisis BCG -->
        <h3>Análisis BCG</h3>
        <table>
            <thead>
                <tr class="highlight">
                    <th>BCG</th>
                    <th>Producto 1</th>
                    <th>Producto 2</th>
                    <th>Producto 3</th>
                    <th>Producto 4</th>
                    <th>Producto 5</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>TCM</td>
                    <td class="tcm-celda">0.00%</td>
                    <td class="tcm-celda">0.00%</td>
                    <td class="tcm-celda">0.00%</td>
                    <td class="tcm-celda">0.00%</td>
                    <td class="tcm-celda">0.00%</td>
                </tr>
                <tr>
                    <td>PRM</td>
                    <td class="prm-celda">0.00</td>
                    <td class="prm-celda">0.00</td>
                    <td class="prm-celda">0.00</td>
                    <td class="prm-celda">0.00</td>
                    <td class="prm-celda">0.00</td>
                </tr>
                <tr class="highlight">
                    <td>% S/VTAS</td>
                    <td class="porcentaje-tcm">0%</td>
                    <td class="porcentaje-tcm">0%</td>
                    <td class="porcentaje-tcm">0%</td>
                    <td class="porcentaje-tcm">0%</td>
                    <td class="porcentaje-tcm">0%</td>
                </tr>
            </tbody>
        </table>


        <!-- Tabla de Evolución de la Demanda Global -->
        <h3>Evolución de la Demanda Global (en miles de soles)</h3>
        <table>
            <thead>
                <tr class="highlight">
                    <th>Años</th>
                    <th>Producto 1</th>
                    <th>Producto 2</th>
                    <th>Producto 3</th>
                    <th>Producto 4</th>
                    <th>Producto 5</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2012</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                </tr>
                <tr>
                    <td>2013</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                </tr>
                <tr>
                    <td>2014</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                </tr>
                <tr>
                    <td>2015</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                </tr>
                <tr>
                    <td>2016</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                </tr>
                <tr>
                    <td>2017</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                    <td><input type="number" min="0" max="100" value="0" placeholder="0%" />%</td>
                </tr>
            </tbody>
        </table>


        <!-- Niveles de Venta de los Competidores de Cada Producto -->

        <h3>Niveles de Venta de los Competidores de Cada Producto</h3>
        <table>
            <thead>
                <tr>
                    <th colspan="2">Producto 1</th>
                    <th colspan="2">Producto 2</th>
                    <th colspan="2">Producto 3</th>
                    <th colspan="2">Producto 4</th>
                    <th colspan="2">Producto 5</th>
                </tr>
                <tr>
                    <th>Competidor</th><th>Ventas</th>
                    <th>Competidor</th><th>Ventas</th>
                    <th>Competidor</th><th>Ventas</th>
                    <th>Competidor</th><th>Ventas</th>
                    <th>Competidor</th><th>Ventas</th>
                </tr>
            </thead>
            <tbody>
                <!-- Filas de competidores para cada producto -->
                <tr>
                    <td>CP1-1</td><td><input type="number" min="0" value="0" class="competitor-1" oninput="calcularMaximos()"></td>
                    <td>CP2-1</td><td><input type="number" min="0" value="0" class="competitor-2" oninput="calcularMaximos()"></td>
                    <td>CP3-1</td><td><input type="number" min="0" value="0" class="competitor-3" oninput="calcularMaximos()"></td>
                    <td>CP4-1</td><td><input type="number" min="0" value="0" class="competitor-4" oninput="calcularMaximos()"></td>
                    <td>CP5-1</td><td><input type="number" min="0" value="0" class="competitor-5" oninput="calcularMaximos()"></td>
                </tr>
                <tr>
                    <td>CP1-2</td><td><input type="number" min="0" value="0" class="competitor-1" oninput="calcularMaximos()"></td>
                    <td>CP2-2</td><td><input type="number" min="0" value="0" class="competitor-2" oninput="calcularMaximos()"></td>
                    <td>CP3-2</td><td><input type="number" min="0" value="0" class="competitor-3" oninput="calcularMaximos()"></td>
                    <td>CP4-2</td><td><input type="number" min="0" value="0" class="competitor-4" oninput="calcularMaximos()"></td>
                    <td>CP5-2</td><td><input type="number" min="0" value="0" class="competitor-5" oninput="calcularMaximos()"></td>
                </tr>
                <tr>
                    <td>CP1-3</td><td><input type="number" min="0" value="0" class="competitor-1" oninput="calcularMaximos()"></td>
                    <td>CP2-3</td><td><input type="number" min="0" value="0" class="competitor-2" oninput="calcularMaximos()"></td>
                    <td>CP3-3</td><td><input type="number" min="0" value="0" class="competitor-3" oninput="calcularMaximos()"></td>
                    <td>CP4-3</td><td><input type="number" min="0" value="0" class="competitor-4" oninput="calcularMaximos()"></td>
                    <td>CP5-3</td><td><input type="number" min="0" value="0" class="competitor-5" oninput="calcularMaximos()"></td>
                </tr>
                <tr>
                    <td>CP1-4</td><td><input type="number" min="0" value="0" class="competitor-1" oninput="calcularMaximos()"></td>
                    <td>CP2-4</td><td><input type="number" min="0" value="0" class="competitor-2" oninput="calcularMaximos()"></td>
                    <td>CP3-4</td><td><input type="number" min="0" value="0" class="competitor-3" oninput="calcularMaximos()"></td>
                    <td>CP4-4</td><td><input type="number" min="0" value="0" class="competitor-4" oninput="calcularMaximos()"></td>
                    <td>CP5-4</td><td><input type="number" min="0" value="0" class="competitor-5" oninput="calcularMaximos()"></td>
                </tr>
                <tr>
                    <td>CP1-5</td><td><input type="number" min="0" value="0" class="competitor-1" oninput="calcularMaximos()"></td>
                    <td>CP2-5</td><td><input type="number" min="0" value="0" class="competitor-2" oninput="calcularMaximos()"></td>
                    <td>CP3-5</td><td><input type="number" min="0" value="0" class="competitor-3" oninput="calcularMaximos()"></td>
                    <td>CP4-5</td><td><input type="number" min="0" value="0" class="competitor-4" oninput="calcularMaximos()"></td>
                    <td>CP5-5</td><td><input type="number" min="0" value="0" class="competitor-5" oninput="calcularMaximos()"></td>
                </tr>
                <tr>
                    <td>CP1-6</td><td><input type="number" min="0" value="0" class="competitor-1" oninput="calcularMaximos()"></td>
                    <td>CP2-6</td><td><input type="number" min="0" value="0" class="competitor-2" oninput="calcularMaximos()"></td>
                    <td>CP3-6</td><td><input type="number" min="0" value="0" class="competitor-3" oninput="calcularMaximos()"></td>
                    <td>CP4-6</td><td><input type="number" min="0" value="0" class="competitor-4" oninput="calcularMaximos()"></td>
                    <td>CP5-6</td><td><input type="number" min="0" value="0" class="competitor-5" oninput="calcularMaximos()"></td>
                </tr>
                <tr>
                    <td>CP1-7</td><td><input type="number" min="0" value="0" class="competitor-1" oninput="calcularMaximos()"></td>
                    <td>CP2-7</td><td><input type="number" min="0" value="0" class="competitor-2" oninput="calcularMaximos()"></td>
                    <td>CP3-7</td><td><input type="number" min="0" value="0" class="competitor-3" oninput="calcularMaximos()"></td>
                    <td>CP4-7</td><td><input type="number" min="0" value="0" class="competitor-4" oninput="calcularMaximos()"></td>
                    <td>CP5-7</td><td><input type="number" min="0" value="0" class="competitor-5" oninput="calcularMaximos()"></td>
                </tr>
                <tr>
                    <td>CP1-8</td><td><input type="number" min="0" value="0" class="competitor-1" oninput="calcularMaximos()"></td>
                    <td>CP2-8</td><td><input type="number" min="0" value="0" class="competitor-2" oninput="calcularMaximos()"></td>
                    <td>CP3-8</td><td><input type="number" min="0" value="0" class="competitor-3" oninput="calcularMaximos()"></td>
                    <td>CP4-8</td><td><input type="number" min="0" value="0" class="competitor-4" oninput="calcularMaximos()"></td>
                    <td>CP5-8</td><td><input type="number" min="0" value="0" class="competitor-5" oninput="calcularMaximos()"></td>
                </tr>
                <tr>
                    <td>CP1-9</td><td><input type="number" min="0" value="0" class="competitor-1" oninput="calcularMaximos()"></td>
                    <td>CP2-9</td><td><input type="number" min="0" value="0" class="competitor-2" oninput="calcularMaximos()"></td>
                    <td>CP3-9</td><td><input type="number" min="0" value="0" class="competitor-3" oninput="calcularMaximos()"></td>
                    <td>CP4-9</td><td><input type="number" min="0" value="0" class="competitor-4" oninput="calcularMaximos()"></td>
                    <td>CP5-9</td><td><input type="number" min="0" value="0" class="competitor-5" oninput="calcularMaximos()"></td>
                </tr>
                <!-- Agrega más filas de competidores según sea necesario -->
                <tr class="highlight">
                    <td>EMPRESA</td><td id="empresa-1">0</td>
                    <td>EMPRESA</td><td id="empresa-2">0</td>
                    <td>EMPRESA</td><td id="empresa-3">0</td>
                    <td>EMPRESA</td><td id="empresa-4">0</td>
                    <td>EMPRESA</td><td id="empresa-5">0</td>
                </tr>
                <tr class="highlight">
                    <td>Mayor</td><td id="mayor-1">0</td>
                    <td>Mayor</td><td id="mayor-2">0</td>
                    <td>Mayor</td><td id="mayor-3">0</td>
                    <td>Mayor</td><td id="mayor-4">0</td>
                    <td>Mayor</td><td id="mayor-5">0</td>
                </tr>
            </tbody>
        </table>

        <!-- Sección de Iconos para la Matriz BCG -->
        <div class="matrix-icons">
            <h3>Posicionamiento de Productos</h3>
            <div class="icons">
                <img src="../img/incognita.png" alt="Incógnita">
                <img src="../img/estrella.png" alt="Estrella">
                <img src="../img/vaca.png" alt="Vaca">
                <img src="../img/perro.png" alt="Perro">
            </div>
        </div>

        <!-- Fortalezas y Debilidades -->
        <div class="strengths-weaknesses">
            <div class="input-box">
                <h4>Fortalezas</h4>
                <input type="text" placeholder="F3">
                <input type="text" placeholder="F4">
            </div>
            <div class="input-box">
                <h4>Debilidades</h4>
                <input type="text" placeholder="D3">
                <input type="text" placeholder="D4">
            </div>
        </div>
    </div>

    <!-- Botones de Navegación -->
    <div class="navigation-buttons">
        <button class="navigation-button" onclick="location.href='matriz_participacion.php'">7. BCG</button>
        <button class="navigation-button" onclick="location.href='analisis_porter.php'">8. ANÁLISIS PORTER</button>
    </div>
</div>

<script>
function calcularTotales() {
    const ventasInputs = document.querySelectorAll('.ventas');
    let total = 0;

    // Calcular el total de ventas
    ventasInputs.forEach(input => {
        total += parseFloat(input.value) || 0;
    });

    // Actualizar el total en la fila de "TOTAL"
    document.getElementById('totalVentas').textContent = total;

    // Calcular y actualizar el porcentaje para cada producto en ambas tablas
    ventasInputs.forEach((input, index) => {
        const porcentajeCelda = document.querySelectorAll('.porcentaje')[index];
        const porcentajeTCMCelda = document.querySelectorAll('.porcentaje-tcm')[index]; // Seleccionar celda de % S/VTAS
        const valor = parseFloat(input.value) || 0;
        const porcentaje = total > 0 ? ((valor / total) * 100).toFixed(2) : 0;

        porcentajeCelda.textContent = `${porcentaje}%`;
        
        // Actualizar % S/VTAS en la segunda tabla con valor entero
        porcentajeTCMCelda.textContent = `${Math.round(porcentaje)}%`;

        // Actualizar ventas de "EMPRESA" en la tabla de competidores
        document.getElementById(`empresa-${index + 1}`).textContent = valor;
    });

    // Llamada a la función calcularMaximos
    calcularMaximos();
    // Llamada a la función calcularTCM para actualizar la fila TCM
    calcularTCM();
}

function calcularMaximos() {
    for (let i = 1; i <= 5; i++) {
        const competitorInputs = document.querySelectorAll(`.competitor-${i}`);
        let max = 0;

        // Encontrar el valor máximo de cada columna de competidores
        competitorInputs.forEach(input => {
            max = Math.max(max, parseFloat(input.value) || 0);
        });

        // Actualizar el valor en la fila "Mayor" de la columna correspondiente
        document.getElementById(`mayor-${i}`).textContent = max;
    }
    
    // Llamar a calcularPRM después de actualizar "Mayor"
    calcularPRM();
}

// Función para calcular PRM
function calcularPRM() {
    for (let i = 1; i <= 5; i++) {
        const ventasProducto = parseFloat(document.querySelectorAll('.ventas')[i - 1].value) || 0; // Ventas de producto en Previsión de Ventas
        const maxCompetencia = parseFloat(document.getElementById(`mayor-${i}`).textContent) || 0; // Valor "Mayor" en la tabla de competidores
        let prm = 0;

        // Aplicar la fórmula de PRM
        if (maxCompetencia !== 0) {
            prm = ventasProducto / maxCompetencia > 2 ? 2 : ventasProducto / maxCompetencia;
        }

        // Actualizar la celda PRM correspondiente
        document.querySelectorAll('.prm-celda')[i - 1].textContent = prm.toFixed(2);
    }
}

// Nueva función para calcular TCM
function calcularTCM() {
    const productos = 5; // Número de columnas/productos
    const maximoTCM = 0.2; // Límite máximo de TCM (20%)

    for (let i = 0; i < productos; i++) {
        // Seleccionar todos los inputs de TCM correspondientes al producto i
        const tcmInputs = Array.from(document.querySelectorAll(`.tcm-input`))
            .filter((_, index) => (index % productos) === i);

        // Sumar los valores de TCM y contar cuántos valores válidos existen para calcular el promedio
        let sumaTCM = 0;
        let contador = 0;

        tcmInputs.forEach(input => {
            const valor = parseFloat(input.value) || 0;
            sumaTCM += valor;
            if (valor > 0) contador++;
        });

        // Calcular el promedio (dividir la suma por el número de valores válidos)
        const promedioTCM = contador > 0 ? (sumaTCM / contador) : 0;

        // Limitar el promedio a un máximo de 0.2 (20%) si se excede
        const tcmValorFinal = Math.min(promedioTCM / 100, maximoTCM);

        // Mostrar el TCM en la celda correspondiente en formato de porcentaje
        document.querySelectorAll('.tcm-celda')[i].textContent = `${(tcmValorFinal * 100).toFixed(2)}%`;
    }
}






</script>



</body>
</html>

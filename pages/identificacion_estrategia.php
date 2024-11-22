<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificación de Estrategias</title>
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
        }
        .header {
            background-color: #008080;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .content p {
            line-height: 1.6;
        }
        .dafo-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            table-layout: fixed;
        }
        .dafo-table td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
            vertical-align: top;
            word-wrap: break-word;
        }
        .dafo-table td[contenteditable="true"] {
            cursor: text;
            background-color: #ffffff;
        }
        .dafo-header {
            font-weight: bold;
            text-transform: uppercase;
        }
        .debilidades {
            background-color: #d9fbd9; /* Verde claro */
        }
        .amenazas {
            background-color: #d9f0fc; /* Azul claro */
        }
        .fortalezas {
            background-color: #fce4d6; /* Beige claro */
        }
        .oportunidades {
            background-color: #fff5e6; /* Naranja claro */
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
        .additional-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            text-align: center;
            font-size: 14px;
        }
        .additional-table th, .additional-table td {
            border: 1px solid #ccc;
            padding: 10px;
        }
        .additional-table th {
            background-color: #fce4d6;
        }
        .additional-table .row-header {
            background-color: #f8f9a7; /* Amarillo claro */
        }
        .additional-table .col-header {
            background-color: #ffc99f; /* Naranja claro */
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="index-button" onclick="location.href='index.php'">INDICE</button>

        <div class="header">
            <h1>10. IDENTIFICACIÓN DE ESTRATEGIAS</h1>
        </div>

        <div class="content">
            <p>
                Tras el análisis realizado habiéndose identificado las oportunidades, amenazas, fortalezas y debilidades, 
                es momento de identificar la estrategia que debe seguir su empresa para el logro de sus objetivos empresariales.
            </p>
            <p>
                Se trata de realizar una Matriz Cruzada tal y como se refleja en el siguiente formato para identificar la 
                estrategia más conveniente a llevar a cabo.
            </p>

            <table class="dafo-table">
                <tr>
                    <td class="dafo-header debilidades">DEBILIDADES</td>
                    <td class="debilidades" contenteditable="true"></td>
                </tr>
                <tr>
                    <td class="dafo-header amenazas">AMENAZAS</td>
                    <td class="amenazas" contenteditable="true"></td>
                </tr>
                <tr>
                    <td class="dafo-header fortalezas">FORTALEZAS</td>
                    <td class="fortalezas" contenteditable="true"></td>
                </tr>
                <tr>
                    <td class="dafo-header oportunidades">OPORTUNIDADES</td>
                    <td class="oportunidades" contenteditable="true"></td>
                </tr>
            </table>

            <p>
                Las fortalezas se usan para tomar ventaja en cada una de las oportunidades. <br>
                0=En total desacuerdo, 1=No está de acuerdo, 2=Está de acuerdo, 3=Bastante de acuerdo y 4=En total acuerdo.
            </p>

            <table class="additional-table">
                <thead>
                    <tr>
                        <th rowspan="2" class="row-header">FORTALEZAS</th>
                        <th colspan="4" class="col-header">OPORTUNIDADES</th>
                    </tr>
                    <tr>
                        <th>O1</th>
                        <th>O2</th>
                        <th>O3</th>
                        <th>O4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>F1</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr>
                        <td>F2</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr>
                        <td>F3</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr>
                        <td>F4</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td contenteditable="true">0</td>
                        <td contenteditable="true">0</td>
                        <td contenteditable="true">0</td>
                        <td contenteditable="true">0</td>
                    </tr>
                </tbody>
            </table>

            <p>
                Las fortalezas evaden el efecto negativo de  las amenazas.	<br>
                0=En total desacuerdo, 1=No está de acuerdo, 2=Está de acuerdo, 3=Bastante de acuerdo y 4=En total acuerdo.
            </p>

            <table class="additional-table">
                <thead>
                    <tr>
                        <th rowspan="2" class="row-header">FORTALEZAS</th>
                        <th colspan="4" class="col-header">AMENAZAS</th>
                    </tr>
                    <tr>
                        <th>A1</th>
                        <th>A2</th>
                        <th>A3</th>
                        <th>A4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>F1</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr>
                        <td>F2</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr>
                        <td>F3</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr>
                        <td>F4</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td contenteditable="true">0</td>
                        <td contenteditable="true">0</td>
                        <td contenteditable="true">0</td>
                        <td contenteditable="true">0</td>
                    </tr>
                </tbody>
            </table>

            <p>
                Superamos las debilidades tomando ventaja de las oportunidades					            <br>
                0=En total desacuerdo, 1=No está de acuerdo, 2=Está de acuerdo, 3=Bastante de acuerdo y 4=En total acuerdo.
            </p>

            <table class="additional-table">
                <thead>
                    <tr>
                        <th rowspan="2" class="row-header">DEBILIDADES</th>
                        <th colspan="4" class="col-header">OPORTUNIDADES</th>
                    </tr>
                    <tr>
                        <th>O1</th>
                        <th>O2</th>
                        <th>O3</th>
                        <th>O4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>D1</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr>
                        <td>D2</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr>
                        <td>D3</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr>
                        <td>D4</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td contenteditable="true">0</td>
                        <td contenteditable="true">0</td>
                        <td contenteditable="true">0</td>
                        <td contenteditable="true">0</td>
                    </tr>
                </tbody>
            </table>

            <p>
                Las debilidades intensifican notablemente el efecto negativo de las amenazas					            <br>
                0=En total desacuerdo, 1=No está de acuerdo, 2=Está de acuerdo, 3=Bastante de acuerdo y 4=En total acuerdo.
            </p>

            <table class="additional-table">
                <thead>
                    <tr>
                        <th rowspan="2" class="row-header">DEBILIDADES</th>
                        <th colspan="4" class="col-header">AMENAZAS</th>
                    </tr>
                    <tr>
                        <th>A1</th>
                        <th>A2</th>
                        <th>A3</th>
                        <th>A4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>D1</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr>
                        <td>D2</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr>
                        <td>D3</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr>
                        <td>D4</td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                        <td contenteditable="true"></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td contenteditable="true">0</td>
                        <td contenteditable="true">0</td>
                        <td contenteditable="true">0</td>
                        <td contenteditable="true">0</td>
                    </tr>
                </tbody>
            </table>


        </div>
        <div class="footer">
            <button onclick="location.href='pest.php'">9. PEST</button> <!-- Botón de índice en la parte inferior -->
            <button onclick="location.href='matriz_came.php'">11. Matriz Came</button>
        </div>
    </div>
</body>
</html>

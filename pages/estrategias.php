<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrategias</title>
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
        }
        .header {
            background-color: #008080;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 8px 8px 0 0;
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
        }
        .index-button:hover {
            background-color: #d76f70;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #008080;
            color: white;
        }
        input[type="number"] {
            width: 50px;
            text-align: center;
        }
        button {
            background-color: #008080;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
        }
        button:hover {
            background-color: #005f5f;
        }
        .navigation {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }
        .navigation button {
            width: 150px;
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

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <button class="index-button" onclick="location.href='index.php'">Índice</button>
            <h1>Estrategias</h1>
        </div>

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

        <form method="POST">
            <!-- Cuadro 1: Fortalezas vs Oportunidades -->
            <p>
                Las fortalezas se usan para tomar ventaja en cada una de las oportunidades. <br>
                0=En total desacuerdo, 1=No está de acuerdo, 2=Está de acuerdo, 3=Bastante de acuerdo y 4=En total acuerdo.
            </p>
            <table>
                <thead>
                    <tr>
                        <th>FORTALEZAS</th>
                        <th>O1</th>
                        <th>O2</th>
                        <th>O3</th>
                        <th>O4</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $fortalezas = ['F1', 'F2', 'F3', 'F4'];
                    $oportunidades = ['O1', 'O2', 'O3', 'O4'];
                    $valoresFO = isset($_POST['valoresFO']) ? $_POST['valoresFO'] : array_fill(0, count($fortalezas), array_fill(0, count($oportunidades), 0));
                    $totalesFO = array_fill(0, count($oportunidades), 0);
                    $totalGeneralFO = 0;

                    foreach ($fortalezas as $fIndex => $fortaleza) {
                        echo "<tr>";
                        echo "<td>$fortaleza</td>";
                        foreach ($oportunidades as $oIndex => $oportunidad) {
                            $valor = $valoresFO[$fIndex][$oIndex] ?? 0;
                            echo "<td><input type='number' name='valoresFO[$fIndex][$oIndex]' value='$valor' min='0' max='4'></td>";
                            $totalesFO[$oIndex] += $valor;
                            $totalGeneralFO += $valor;
                        }
                        echo "</tr>";
                    }
                    ?>
                    <tr>
                        <td><strong>Total</strong></td>
                        <?php
                        foreach ($totalesFO as $total) {
                            echo "<td><strong>$total</strong></td>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <td colspan="5"><strong>Total General: <?= $totalGeneralFO ?></strong></td>
                    </tr>
                </tbody>
            </table>

            <!-- Cuadro 2: Fortalezas vs Amenazas -->
            <p>
                Las fortalezas evaden el efecto negativo de  las amenazas.	<br>
                0=En total desacuerdo, 1=No está de acuerdo, 2=Está de acuerdo, 3=Bastante de acuerdo y 4=En total acuerdo.
            </p>
            <table>
                <thead>
                    <tr>
                        <th>FORTALEZAS</th>
                        <th>A1</th>
                        <th>A2</th>
                        <th>A3</th>
                        <th>A4</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $valoresFA = isset($_POST['valoresFA']) ? $_POST['valoresFA'] : array_fill(0, count($fortalezas), array_fill(0, count($oportunidades), 0));
                    $totalesFA = array_fill(0, count($oportunidades), 0);
                    $totalGeneralFA = 0;

                    foreach ($fortalezas as $fIndex => $fortaleza) {
                        echo "<tr>";
                        echo "<td>$fortaleza</td>";
                        foreach ($oportunidades as $oIndex => $oportunidad) {
                            $valor = $valoresFA[$fIndex][$oIndex] ?? 0;
                            echo "<td><input type='number' name='valoresFA[$fIndex][$oIndex]' value='$valor' min='0' max='4'></td>";
                            $totalesFA[$oIndex] += $valor;
                            $totalGeneralFA += $valor;
                        }
                        echo "</tr>";
                    }
                    ?>
                    <tr>
                        <td><strong>Total</strong></td>
                        <?php
                        foreach ($totalesFA as $total) {
                            echo "<td><strong>$total</strong></td>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <td colspan="5"><strong>Total General: <?= $totalGeneralFA ?></strong></td>
                    </tr>
                </tbody>
            </table>

            <!-- Cuadro 3: Debilidades vs Oportunidades -->
            <p>
                Superamos las debilidades tomando ventaja de las oportunidades					            <br>
                0=En total desacuerdo, 1=No está de acuerdo, 2=Está de acuerdo, 3=Bastante de acuerdo y 4=En total acuerdo.
            </p>
            <table>
                <thead>
                    <tr>
                        <th>DEBILIDADES</th>
                        <th>O1</th>
                        <th>O2</th>
                        <th>O3</th>
                        <th>O4</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $debilidades = ['D1', 'D2', 'D3', 'D4'];
                    $valoresDO = isset($_POST['valoresDO']) ? $_POST['valoresDO'] : array_fill(0, count($debilidades), array_fill(0, count($oportunidades), 0));
                    $totalesDO = array_fill(0, count($oportunidades), 0);
                    $totalGeneralDO = 0;

                    foreach ($debilidades as $dIndex => $debilidad) {
                        echo "<tr>";
                        echo "<td>$debilidad</td>";
                        foreach ($oportunidades as $oIndex => $oportunidad) {
                            $valor = $valoresDO[$dIndex][$oIndex] ?? 0;
                            echo "<td><input type='number' name='valoresDO[$dIndex][$oIndex]' value='$valor' min='0' max='4'></td>";
                            $totalesDO[$oIndex] += $valor;
                            $totalGeneralDO += $valor;
                        }
                        echo "</tr>";
                    }
                    ?>
                    <tr>
                        <td><strong>Total</strong></td>
                        <?php
                        foreach ($totalesDO as $total) {
                            echo "<td><strong>$total</strong></td>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <td colspan="5"><strong>Total General: <?= $totalGeneralDO ?></strong></td>
                    </tr>
                </tbody>
            </table>

            <!-- Guardar -->
            <button type="submit">Guardar</button>

            <!-- Síntesis de Resultados -->
<div class="container">
    <h2>Síntesis de Resultados</h2>
    <p>
                Las debilidades intensifican notablemente el efecto negativo de las amenazas					            <br>
                0=En total desacuerdo, 1=No está de acuerdo, 2=Está de acuerdo, 3=Bastante de acuerdo y 4=En total acuerdo.
            </p>
    <table>
        <thead>
            <tr>
                <th>Relaciones</th>
                <th>Tipología de estrategia</th>
                <th>Puntuación</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $resultados = [
                ['Relación' => 'FO', 'Estrategia' => 'Estrategia Ofensiva', 'Total' => $totalGeneralFO, 'Descripción' => 'Deberá adoptar estrategias de crecimiento'],
                ['Relación' => 'AF', 'Estrategia' => 'Estrategia Defensiva', 'Total' => $totalGeneralFA, 'Descripción' => 'La empresa está preparada para enfrentarse a las amenazas'],
                ['Relación' => 'AD', 'Estrategia' => 'Estrategia de Supervivencia', 'Total' => 0, 'Descripción' => 'Se enfrenta a amenazas externas sin las fortalezas necesarias para luchar con la competencia'],
                ['Relación' => 'OD', 'Estrategia' => 'Estrategia de Reorientación', 'Total' => $totalGeneralDO, 'Descripción' => 'La empresa no puede aprovechar las oportunidades porque carece de preparación adecuada'],
            ];

            foreach ($resultados as $resultado) {
                echo "<tr>";
                echo "<td>{$resultado['Relación']}</td>";
                echo "<td>{$resultado['Estrategia']}</td>";
                echo "<td><strong>{$resultado['Total']}</strong></td>";
                echo "<td>{$resultado['Descripción']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

        </form>

        <div class="navigation">
            <button onclick="location.href='pest.php'">9. PEST</button>
            <button onclick="location.href='matriz_came.php'">11. Matriz CAME</button>
        </div>
    </div>
</body>
</html>

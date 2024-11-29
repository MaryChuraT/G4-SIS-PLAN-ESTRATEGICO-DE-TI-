<?php
session_start();

// Inicializar factores y preguntas
$factores = ['Sociales', 'Medio Ambientales', 'Políticos', 'Económicos', 'Tecnológicos'];
$preguntas = [
    "Los cambios en la composición étnica de los consumidores de nuestro mercado está teniendo un notable impacto.",
    "El envejecimiento de la población tiene un importante impacto en la demanda.",
    "Los nuevos estilos de vida y tendencias originan cambios en la oferta de nuestro sector.",
    "El envejecimiento de la población tiene un importante impacto en la oferta del sector donde operamos.",
    "Las variaciones en el nivel de riqueza de la población impactan considerablemente en la demanda de los productos/servicios del sector donde operamos.",
    "La legislación fiscal afecta muy considerablemente a la economía de las empresas del sector donde operamos.",
    "La legislación laboral afecta muy considerablemente a la operativa del sector donde actuamos.",
    "Las subvenciones otorgadas por las Administraciones Públicas son claves en el desarrollo competitivo del mercado donde operamos.",
    "El impacto que tiene la legislación de protección al consumidor, en la manera de producir bienes y/o servicios es muy importante.",
    "La normativa autonómica tiene un impacto considerable en el funcionamiento del sector donde actuamos.",
    "Las expectativas de crecimiento económico generales afectan crucialmente al mercado donde operamos.",
    "La política de tipos de interés es fundamental en el desarrollo financiero del sector donde trabaja nuestra empresa.",
    "La globalización permite a nuestra industria gozar de importantes oportunidades en nuevos mercados.",
    "La situación del empleo es fundamental para el desarrollo económico de nuestra empresa y nuestro sector.",
    "Las expectativas del ciclo económico de nuestro sector impactan en la situación económica de sus empresas.",
    "Las Administraciones Públicas están incentivando el esfuerzo tecnológico de las empresas de nuestro sector.",
    "Internet, el comercio electrónico, el wireless y otras NTIC están impactando en la demanda de nuestros productos/servicios y en los de la competencia.",
    "El empleo de NTIC´s es generalizado en el sector donde trabajamos.",
    "En nuestro sector, es de gran importancia ser pionero o referente en el empleo de aplicaciones tecnológicas.",
    "En el sector donde operamos, para ser competitivos, es condición 'sine qua non' innovar constantemente.",
    "La legislación medioambiental afecta al desarrollo de nuestro sector.",
    "Los clientes de nuestro mercado exigen que seamos socialmente responsables, en el plano medioambiental.",
    "En nuestro sector, las políticas medioambientales son una fuente de ventajas competitivas.",
    "La creciente preocupación social por el medio ambiente impacta notablemente en la demanda de productos/servicios ofertados en nuestro mercado.",
    "El factor ecológico es una fuente de diferenciación clara en el sector donde opera nuestra empresa."
];

// Inicializar valores de los factores
$valores = isset($_SESSION['valores']) ? $_SESSION['valores'] : array_fill(0, count($factores), 0);

// Procesar formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $respuestas = $_POST['respuestas'] ?? [];
    $valores = array_fill(0, count($factores), 0);

    foreach ($respuestas as $pregunta => $valor) {
        $indiceFactor = (int)floor($pregunta / 5); // Asignar preguntas a factores
        $valores[$indiceFactor] += (int)$valor;
    }

    $_SESSION['valores'] = $valores;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análisis PEST</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        }
        .index-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #ef8586;
            color: white;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
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
        input[type="radio"] {
            margin: 0 10px;
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
        .footer {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .opportunities-threats {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .section {
            width: 48%;
        }
        .section h3 {
            background-color: #008080;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .section textarea {
            width: 100%;
            height: 50px;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="index.php" class="index-button">ÍNDICE</a>
        <div class="header">
            <h1>Autodiagnóstico Entorno Global P.E.S.T.</h1>
        </div>
        <form method="POST">
            <table>
                <thead>
                    <tr>
                        <th>Pregunta</th>
                        <th>0</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($preguntas as $index => $pregunta): ?>
                        <tr>
                            <td><?= $pregunta ?></td>
                            <?php for ($i = 0; $i <= 4; $i++): ?>
                                <td><input type="radio" name="respuestas[<?= $index ?>]" value="<?= $i ?>" <?= isset($_SESSION['respuestas'][$index]) && $_SESSION['respuestas'][$index] == $i ? 'checked' : '' ?> required></td>
                            <?php endfor; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button type="submit">Generar Resultados</button>
        </form>
        <canvas id="pestChart"></canvas>
        <div class="opportunities-threats">
            <div class="section">
                <h3>Oportunidades</h3>
                <textarea name="oportunidades[]"></textarea>
                <textarea name="oportunidades[]"></textarea>
            </div>
            <div class="section">
                <h3>Amenazas</h3>
                <textarea name="amenazas[]"></textarea>
                <textarea name="amenazas[]"></textarea>
            </div>
        </div>
        <div class="footer">
            <button onclick="location.href='fuerzas_porter.php'">8. ANÁLISIS PORTER</button>
            <button onclick="location.href='estrategias.php'">10. IDENTIFICACIÓN DE ESTRATEGIAS</button>
        </div>
    </div>
    <script>
        const ctx = document.getElementById('pestChart').getContext('2d');
        const pestChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?= json_encode($factores) ?>,
                datasets: [{
                    label: 'Nivel de Impacto',
                    data: <?= json_encode($valores) ?>,
                    backgroundColor: ['#76C7C0', '#4CAF50', '#FF9800', '#FFC107', '#03A9F4'],
                    borderColor: ['#00796B', '#388E3C', '#F57C00', '#FFA000', '#0288D1'],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
    </script>
</body>
</html>

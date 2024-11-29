<?php
include("../config/conexion.php");

$link = conectarse();

// Consultas para cada sección
// Misión
$misionQuery = "SELECT texto FROM mision LIMIT 1";
$misionResult = mysqli_query($link, $misionQuery);
$mision = mysqli_fetch_assoc($misionResult)['texto'];

// Visión
$visionQuery = "SELECT texto FROM vision LIMIT 1";
$visionResult = mysqli_query($link, $visionQuery);
$vision = mysqli_fetch_assoc($visionResult)['texto'];

// Valores
$valoresQuery = "SELECT texto FROM valores";
$valoresResult = mysqli_query($link, $valoresQuery);
$valores = [];
while ($row = mysqli_fetch_assoc($valoresResult)) {
    $valores[] = $row['texto'];
}

// Unidades Estratégicas
$uenQuery = "SELECT uen FROM uen LIMIT 1";
$uenResult = mysqli_query($link, $uenQuery);
$uen = mysqli_fetch_assoc($uenResult)['uen'];

// Objetivos Estratégicos
$objetivosQuery = "SELECT estrategico, especifico1, especifico2 FROM objetivos";
$objetivosResult = mysqli_query($link, $objetivosQuery);
$objetivos = [];
while ($row = mysqli_fetch_assoc($objetivosResult)) {
    $objetivos[] = $row;
}

// Análisis FODA (Debilidades y Fortalezas)
$debilidadQuery = "SELECT texto FROM debilidad";
$debilidadResult = mysqli_query($link, $debilidadQuery);
$debilidades = [];
while ($row = mysqli_fetch_assoc($debilidadResult)) {
    $debilidades[] = $row['texto'];
}

$fortalezaQuery = "SELECT texto FROM fortaleza";
$fortalezaResult = mysqli_query($link, $fortalezaQuery);
$fortalezas = [];
while ($row = mysqli_fetch_assoc($fortalezaResult)) {
    $fortalezas[] = $row['texto'];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen Ejecutivo del Plan Estratégico</title>
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
            font-size: 24px;
        }
        .section-title {
            background-color: #008080;
            color: white;
            padding: 10px;
            margin-top: 20px;
            text-align: center;
            font-size: 20px;
        }
        .section-content, .form-section {
            padding: 10px;
            border: 1px solid #008080;
            border-radius: 5px;
            margin-top: 10px;
            background-color: #f0f0f0;
        }
        textarea {
            width: 100%;
            height: 100px;
            border: 1px solid #008080;
            border-radius: 4px;
            padding: 10px;
            resize: none;
            margin-top: 5px;
            background-color: #f9f9f9;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #008080;
            text-align: center;
            padding: 10px;
        }
        .form-section input[type="text"] {
            width: 100%;
            height: 30px;
            border: 2px solid blue;
            border-radius: 4px;
            padding: 5px;
            margin-top: 5px;
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
            background-color: #ef8586;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .index-button:hover {
            background-color: #d76f70;
        }
        .acciones-table td {
            height: 30px;
            border: 1px solid blue;
        }

    </style>
</head>
<body>

<div class="container">
    <button class="index-button" onclick="location.href='index.php'">INDICE</button>
    
    <div class="header">
        <h1>Resumen Ejecutivo del Plan Estratégico</h1>
    </div>
    
    <div class="section-content">
        <p><strong>Nombre de la empresa / proyecto:</strong></p>
        <input type="text" name="nombre_proyecto" placeholder="Introduzca el nombre de la empresa / proyecto" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #008080; border-radius: 4px;">
        
        <p><strong>Fecha de elaboración:</strong></p>
        <input type="date" name="fecha_elaboracion" placeholder="Introduzca la fecha de elaboración" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #008080; border-radius: 4px;">
        
        <p><strong>Emprendedores / promotores:</strong></p>
        <textarea name="promotores" placeholder="Introduzca el/los nombre/s de el/los promotor/es del proyecto" style="width: 100%; height: 100px; padding: 10px; margin-top: 5px; border: 1px solid #008080; border-radius: 4px; resize: none;"></textarea>
    </div>

    
    <div class="section-title">MISIÓN</div>
    <div class="section-content">
        <textarea readonly><?php echo htmlspecialchars($mision); ?></textarea>
    </div>
    
    <div class="section-title">VISIÓN</div>
    <div class="section-content">
        <textarea readonly><?php echo htmlspecialchars($vision); ?></textarea>
    </div>
    
    <div class="section-title">VALORES</div>
    <div class="form-section">
        <table style="width: 100%;">
            <?php foreach ($valores as $valor): ?>
                <tr><td><input type="text" value="<?php echo htmlspecialchars($valor); ?>" readonly></td></tr>
            <?php endforeach; ?>
        </table>
    </div>
    
    <div class="section-title">UNIDADES ESTRATÉGICAS</div>
    <div class="section-content">
        <textarea readonly><?php echo htmlspecialchars($uen); ?></textarea>
    </div>
    
    <div class="section-title">OBJETIVOS ESTRATÉGICOS</div>
    <table>
        <tr>
            <th>MISIÓN</th>
            <th>OBJETIVOS GENERALES O ESTRATÉGICOS</th>
            <th>OBJETIVOS ESPECÍFICOS (2 por cada estratégico)</th>
        </tr>
        <?php foreach ($objetivos as $index => $objetivo): ?>
        <tr>
            <?php if ($index === 0): ?>
                <td rowspan="3"><textarea readonly><?php echo htmlspecialchars($mision); ?></textarea></td>
            <?php endif; ?>
            <td><textarea readonly><?php echo htmlspecialchars($objetivo['estrategico']); ?></textarea></td>
            <td>
                <textarea readonly><?php echo htmlspecialchars($objetivo['especifico1']); ?></textarea><br><br>
                <textarea readonly><?php echo htmlspecialchars($objetivo['especifico2']); ?></textarea>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div class="section-title">ANÁLISIS FODA</div>
    <table>
        <tr>
            <th>DEBILIDADES</th>
            <th>AMENAZAS</th>
            <th>FORTALEZAS</th>
            <th>OPORTUNIDADES</th>
        </tr>
        <tr>
            <td>
                <?php foreach ($debilidades as $debilidad): ?>
                    <textarea readonly><?php echo htmlspecialchars($debilidad); ?></textarea><br>
                <?php endforeach; ?>
            </td>
            <td><textarea placeholder="Amenaza 1..." readonly></textarea></td>
            <td>
                <?php foreach ($fortalezas as $fortaleza): ?>
                    <textarea readonly><?php echo htmlspecialchars($fortaleza); ?></textarea><br>
                <?php endforeach; ?>
            </td>
            <td><textarea placeholder="Oportunidad 1..." readonly></textarea></td>
        </tr>
    </table>

    <div class="section-title">ACCIONES COMPETITIVAS</div>
    <table class="acciones-table">
        <?php for ($i = 1; $i <= 16; $i++): ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><textarea></textarea></td>
        </tr>
        <?php endfor; ?>
    </table>

    <div class="section-title">CONCLUSIONES</div>
    <div class="section-content">
        <textarea placeholder="Anote las conclusiones más relevantes de su Plan."></textarea>
    </div>


</div>

</body>
</html>

<?php
mysqli_close($link);
?>

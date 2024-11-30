<?php
// Incluir Dompdf
require 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Configurar opciones de Dompdf
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true); // Permitir imágenes remotas si las tienes

$dompdf = new Dompdf($options);

// Capturar el contenido del archivo resumen.php
ob_start();
include 'resumen.php'; // Asegúrate de que la ruta sea correcta
$html = ob_get_clean();

// Reorganizar y agregar estilos adicionales para el PDF
$html = '
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
        background-color: #ffffff;
    }
    .container {
        width: 100%;
        margin: 0 auto;
        padding: 20px;
    }
    .header {
        text-align: center;
        background-color: #007bff;
        color: white;
        padding: 20px;
        font-size: 24px;
        font-weight: bold;
    }
    .section-title {
        margin-top: 20px;
        font-size: 18px;
        font-weight: bold;
        color: #007bff;
        padding-bottom: 5px;
        border-bottom: 2px solid #007bff;
    }
    .section-content {
        margin-top: 10px;
        padding: 10px;
        border-radius: 4px;
        background-color: #f8f9fa;
    }
    .section-content p {
        margin: 5px 0;
    }
    ul {
        padding-left: 20px;
        margin: 10px 0;
    }
    ul li {
        margin-bottom: 5px;
    }
    .objectives {
        margin-top: 20px;
        padding: 10px;
        border-radius: 4px;
        background-color: #e9ecef;
    }
    .objectives h3 {
        margin-bottom: 10px;
        color: #343a40;
    }
    .footer {
        margin-top: 30px;
        text-align: right;
        font-size: 12px;
        color: #555;
    }
</style>

<div class="container">
    <div class="header">Resumen Ejecutivo del Plan Estratégico</div>

    <div class="section-title">MISIÓN</div>
    <div class="section-content">
        <p>' . htmlspecialchars($mision) . '</p>
    </div>

    <div class="section-title">VISIÓN</div>
    <div class="section-content">
        <p>' . htmlspecialchars($vision) . '</p>
    </div>

    <div class="section-title">VALORES</div>
    <div class="section-content">
        <ul>';
foreach ($valores as $valor) {
    $html .= '<li>' . htmlspecialchars($valor) . '</li>';
}
$html .= '
        </ul>
    </div>

    <div class="section-title">UNIDADES ESTRATÉGICAS</div>
    <div class="section-content">
        <p>' . htmlspecialchars($uen) . '</p>
    </div>

    <div class="section-title">OBJETIVOS ESTRATÉGICOS</div>
    <div class="objectives">';
foreach ($objetivos as $index => $objetivo) {
    $html .= '
        <h3>Objetivo General ' . ($index + 1) . '</h3>
        <p>' . htmlspecialchars($objetivo['estrategico']) . '</p>
        <ul>
            <li>' . htmlspecialchars($objetivo['especifico1']) . '</li>
            <li>' . htmlspecialchars($objetivo['especifico2']) . '</li>
        </ul>';
}
$html .= '
    </div>

    <div class="section-title">ANÁLISIS FODA</div>
    <div class="section-content">
        <h4>Debilidades</h4>
        <ul>';
foreach ($debilidades as $debilidad) {
    $html .= '<li>' . htmlspecialchars($debilidad) . '</li>';
}
$html .= '
        </ul>
        <h4>Fortalezas</h4>
        <ul>';
foreach ($fortalezas as $fortaleza) {
    $html .= '<li>' . htmlspecialchars($fortaleza) . '</li>';
}
$html .= '
        </ul>
    </div>

    <div class="section-title">ACCIONES COMPETITIVAS</div>
    <div class="section-content">
        <ul>';
for ($i = 1; $i <= 16; $i++) {
    $html .= '<li>Acción Competitiva ' . $i . '</li>';
}
$html .= '
        </ul>
    </div>

    <div class="section-title">CONCLUSIONES</div>
    <div class="section-content">
        <p>Anote las conclusiones más relevantes de su Plan aquí.</p>
    </div>

    <div class="footer">
    Hora de impresión: ' . date("Y-m-d H:i:s") . '<br>
    Desarrollado por Mary Chura, Carlos Escobar y Leandro Hurtado
</div>


    
</div>

</div>
';

// Cargar el contenido HTML en Dompdf
$dompdf->loadHtml($html);

// Configurar el tamaño del papel y la orientación
$dompdf->setPaper('A4', 'portrait');

// Renderizar el PDF
$dompdf->render();

// Enviar el PDF al navegador para su descarga o visualización
$dompdf->stream("Resumen_Ejecutivo.pdf", ["Attachment" => false]); // Cambia a true para descargar directamente
?>

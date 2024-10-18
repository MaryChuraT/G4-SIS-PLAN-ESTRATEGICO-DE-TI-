<?php
// Incluir el archivo de conexión
include '../config/conexion.php';

// Conectar a la base de datos
$conn = conectarse();

// Consultar los objetivos
$sql = "SELECT * FROM objetivos";
$result = mysqli_query($conn, $sql);

// Crear un arreglo para almacenar los objetivos
$objetivos = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $objetivos[] = $row;
    }
}

// Consultar la UEN con id 1
$sql_uen = "SELECT * FROM uen WHERE id = 1";
$result_uen = mysqli_query($conn, $sql_uen);
$uen_data = mysqli_fetch_assoc($result_uen);
$uen_text = $uen_data ? $uen_data['uen'] : ''; // Obtener el texto de UEN


// Consultar la misión
$sql_mision = "SELECT * FROM mision WHERE id = 1";
$result_mision = mysqli_query($conn, $sql_mision);
$mision_data = mysqli_fetch_assoc($result_mision);
$mision_text = $mision_data ? $mision_data['texto'] : ''; // Obtener el texto de la misión

// Cerrar la conexión
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetivos</title>
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
            font-size: 24px;
        }

        .content {
            margin-top: 20px;
            font-size: 16px;
        }

        .content ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        .form-section {
            margin-top: 20px;
            background-color: #f0f0f0;
            padding: 10px;
            text-align: center;
        }

        .form-section textarea {
            width: 90%;
            height: 100px;
            border: 1px solid #008080;
            border-radius: 4px;
            padding: 10px;
            resize: none;
        }

        .form-section p {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #008080;
            text-align: center;
            padding: 10px;
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

        .nav-buttons {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .nav-buttons button {
            background-color: #00bfff;
        }

        .nav-buttons button:hover {
            background-color: #0080ff;
        }

        input, textarea {
            width: 100%;
            border: none;
            border-radius: 5px;
            padding: 8px;
            font-size: 14px;
        }

        textarea {
            resize: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <button class="index-button" onclick="location.href='index.php'">INDICE</button>

        <div class="header">
            <h1>4. OBJETIVOS ESTRATÉGICOS</h1>
        </div>

        <div class="content">
            <p>El siguiente paso es establecer los objetivos de una empresa en relación al sector al que pertenece.</p>
            <p>Un <strong>OBJETIVO ESTRATÉGICO</strong> es un fin deseado, clave para la organización y para la consecución de su visión. Para una correcta planificación construya los objetivos  formando una pirámide. Los objetivos de cada nivel indican qué es lo que quiere lograrse, siendo la estructura de objetivos que está en el nivel inmediatamente inferior la que indica el cómo. Por tanto, cada objetivo es un fin en sí mismo, pero también a la vez un medio para el logro de los objetivos del nivel superior. </p>
            <img src="../img/piramide.png" alt="Pirámide de objetivos" style="width: 100%; max-width: 400px; display: block; margin: 20px auto;">
            
            <p><strong>Objetivos estratégicos:</strong> Concretan el contenido de la misión. Suelen referirse al crecimiento, rentabilidad y a la sostenibilidad de la empresa. Su horizonte es entre 3 a 5 años. </p>
            
            <p><strong>Objetivos operativos:</strong> Son la concreción anual de los objetivos estratégicos. Han de ser claros, concisos y medibles. Se puede distinguir dos tipos de objetivos específicos: </p>

            <ul>
                <li>Funcionales: objetivos formulados por áreas o departamentos.</li>
                <li>Operativos: objetivos que se centran en operaciones y acciones concretas.</li>
            </ul>

            <img src="../img/metas.png" alt="Metas" style="display: block; margin: auto; max-width: 100%; height: auto;">

            <strong>EJEMPLOS</strong>

            <ul>
                <li>Alcanzar los niveles de ventas previstos para los nuevos productos</li>
                <li>Reducir la rotación del personal del almacén </li>
                <li>Reducir el plazo de cobro de los clientes</li>
                <li>Reducir la siniestralidad al nivel fijado</li>
                <li>Alcanzar los objetivos de beneificos previstos</li>
                <li>Mejorar la claridad de entrega de los productos en el plazo previsto</li>
            </ul>

            <p>En empresas de gran tamaño, se pueden formular los objetivos estratégicos en función de sus diferentes unidades estratégicas de negocio (UEN). Estas UEN  se hacen especialmente necesarias en las empresas diversificadas o con  multiactividad donde la heterogeneidad de los distintos negocios hace inviable un tratamiento estratégico conjunto de los mismos.</p>
            <p>Se entiende por unidad estratégica de negocio (UEN) ("strategic business unit" [SBU]) un conjunto homogéneo de actividades o negocios, desde el punto de vista estratégico, es decir, para el cual es posible formular una estrategia común y a su vez diferente de la estrategia adecuada para otras actividades y/o unidades estratégicas. La estrategia de cada unidad es autónoma, pero no independiente de las demás unidades estratégicas, puesto que se integran en la estrategia de la empresa.</p>
            
            <strong>¿Cómo podemos identificar a las UEN?</strong>
            <p>La identificación de las UEN se puede realizar a partir de las tres siguientes dimensiones:
<br>• Grupos de clientes: Que atiende al tipo de clientela al cual va destinado el producto o servicio.
<br>• Funciones: Necesidades cubiertas por el producto o servicio.
<br>• Tecnología: Forma en la cual la empresa cubre a través del producto o servicio la necesidad de la clientela.</p>

            

            <div class="form-section">
                <p>En este caso, comente sobre las distintas UEN que tiene su empresa:</p>
                <form action="guardar_uen.php" method="POST">
                    <textarea name="uen_comentario" placeholder="Escriba aquí las UEN de su empresa"><?php echo htmlspecialchars($uen_text); ?></textarea>
                    <!-- Botón para guardar cambios en la UEN -->
                    <button type="submit">Guardar UEN</button>
                </form>
            </div>

            <div class="form-section">
                <p>Reflexione sobre la misión, visión y valores, y establezca 3 objetivos estratégicos y 6 específicos:</p>
                <form action="guardar_objetivos.php" method="POST">
                    <table>
                        <tr>
                            <th>MISIÓN</th>
                            <th>OBJETIVOS GENERALES O ESTRATÉGICOS</th>
                            <th>OBJETIVOS ESPECÍFICOS (2 por cada estratégico)</th>
                        </tr>
                        <tr>
                            <td rowspan="3"><textarea placeholder="Escriba la misión..." name="mision"><?php echo htmlspecialchars($mision_text); ?></textarea></td>
                            <td>
                                <textarea placeholder="Escriba el objetivo estratégico 1..." name="estrategico1"><?php echo isset($objetivos[0]['estrategico']) ? htmlspecialchars($objetivos[0]['estrategico']) : ''; ?></textarea>
                            </td>
                            <td>
                                <textarea placeholder="Objetivo específico 1.1" name="especifico11"><?php echo isset($objetivos[0]['especifico1']) ? htmlspecialchars($objetivos[0]['especifico1']) : ''; ?></textarea><br><br>
                                <textarea placeholder="Objetivo específico 1.2" name="especifico12"><?php echo isset($objetivos[0]['especifico2']) ? htmlspecialchars($objetivos[0]['especifico2']) : ''; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea placeholder="Escriba el objetivo estratégico 2..." name="estrategico2"><?php echo isset($objetivos[1]['estrategico']) ? htmlspecialchars($objetivos[1]['estrategico']) : ''; ?></textarea>
                            </td>
                            <td>
                                <textarea placeholder="Objetivo específico 2.1" name="especifico21"><?php echo isset($objetivos[1]['especifico1']) ? htmlspecialchars($objetivos[1]['especifico1']) : ''; ?></textarea><br><br>
                                <textarea placeholder="Objetivo específico 2.2" name="especifico22"><?php echo isset($objetivos[1]['especifico2']) ? htmlspecialchars($objetivos[1]['especifico2']) : ''; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea placeholder="Escriba el objetivo estratégico 3..." name="estrategico3"><?php echo isset($objetivos[2]['estrategico']) ? htmlspecialchars($objetivos[2]['estrategico']) : ''; ?></textarea>
                            </td>
                            <td>
                                <textarea placeholder="Objetivo específico 3.1" name="especifico31"><?php echo isset($objetivos[2]['especifico1']) ? htmlspecialchars($objetivos[2]['especifico1']) : ''; ?></textarea><br><br>
                                <textarea placeholder="Objetivo específico 3.2" name="especifico32"><?php echo isset($objetivos[2]['especifico2']) ? htmlspecialchars($objetivos[2]['especifico2']) : ''; ?></textarea>
                            </td>
                        </tr>
                    </table>
                    <button type="submit">Guardar Objetivos</button>
                </form>
            </div>

            <div class="footer">
                <button onclick="location.href='valores.php'">3. VALORES</button>
                <button onclick="location.href='analisis_interno_externo.php'">5. ANÁLISIS INTERNO Y EXTERNO</button>
            </div>
        </div>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visión de la Empresa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .caja-turquesa {
            background-color: #008B8B; /* Color turquesa oscuro */
            padding: 20px;
            color: white;
            text-align: center;
            border-radius: 8px;
        }
        .caja-blanca {
            background-color: #FFFFFF; /* Color blanco */
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        textarea {
            width: 100%;
            height: 100px;
            margin-top: 10px;
        }
        .boton {
            display: inline-block;
            background-color: #008B8B; 
            color: white;
            padding: 10px 20px;
            margin: 10px auto;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            display: block; /* Centra el botón */
        }
        .boton:hover {
            background-color: #0056b3; /* Color azul oscuro al pasar el mouse */
        }
        .boton-indice {
            display: inline-block;
            background-color: #FFB6C1; /* Color rosa claro para el botón de índice */
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            cursor: pointer;
        }
        .boton-indice:hover {
            background-color: #FF69B4; /* Color rosa oscuro al pasar el mouse */
        }
        .caja-enlaces {
            display: flex;
            justify-content: center; /* Centra los enlaces */
            margin-top: 20px;
        }
        .enlace {
            background-color: #FFFFFF;
            border: 2px solid #FFFFFF; /* Bordes blancos */
            padding: 20px;
            margin: 0 15px;
            border-radius: 8px;
            text-align: center;
            width: 150px; /* Ancho fijo */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <a href="indice.php" class="boton-indice">Índice</a> <!-- Botón de índice -->

    <div class="caja-turquesa">
        <h2>2. VISION</h2>
    </div>

    <div class="caja-blanca">
        <p>La VISION de una empresa define lo que la empresa/organización quiere lograr en el futuro. Es lo que la organización aspira llegar a ser en torno a 2-3 años.</p>
        <ul>
            <li>Debe ser retadora, positiva, compartida y coherente con la misión.</li>
            <li>Marca el fin último que la estrategia debe seguir.</li>
            <li>Proyecta la imagen de destino que se pretende alcanzar.</li>
        </ul>
        <p>La visión debe ser conocida y compartida por todos los miembros de la empresa y también por aquellos que se relacionan con ella.</p>
        
        <form action="" method="POST">
            <label for="vision">En este apartado describa la Visión de su empresa:</label><br>
            <textarea id="vision" name="vision" required></textarea><br><br>
            <input type="submit" value="Enviar" class="boton">
        </form>
    </div>

    <div class="caja-enlaces">
        <div class="enlace">
            <a href="mision.php" class="boton">1. Misión</a>
        </div>
        <div class="enlace">
            <a href="valores.php" class="boton">3. Valores</a>
        </div>
    </div>

</body>
</html>

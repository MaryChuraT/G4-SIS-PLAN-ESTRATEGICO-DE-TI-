<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autodiagnóstico Porter</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #e0f7fa;
            color: #008080;
            font-weight: bold;
        }
        .section-title {
            background-color: #a0d080;
            color: #004d40;
            font-weight: bold;
            text-align: left;
        }
        .label {
            background-color: #d0e9e9;
            color: #008080;
            font-weight: bold;
            text-align: left;
        }
        .highlight-red {
            color: red;
            font-weight: bold;
        }
        .highlight-blue {
            color: blue;
            font-weight: bold;
        }
        .sub-label {
            color: gray;
            font-size: 0.9em;
            text-align: left;
            padding-left: 15px;
        }
        .conclusion {
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
        }
        .opportunities-threats {
            margin-top: 20px;
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
    </style>
</head>
<body>

    <div class="container">
        <button class="index-button" onclick="location.href='index.php'">INDICE</button>

        <div class="header">
            <h1>Autodiagnóstico Porter</h1>
        </div>

        <p>A continuación marque con una X en las casillas que estime conveniente según el estado actual de su empresa. Valore su perfil competitivo en la escala Hostil-Favorable.</p>

        <!-- Tabla 1 -->
        <table>
            <tr>
                <th colspan="2">PERFIL COMPETITIVO</th>
                <th>Hostil</th>
                <th>Nada</th>
                <th>Poco</th>
                <th>Medio</th>
                <th>Alto</th>
                <th>Muy Alto</th>
                <th class="highlight-blue">Favorable</th>
            </tr>
            <tr>
                <th colspan="9" class="section-title">Rivalidad empresas del sector</th>
            </tr>
            <tr>
                <td class="sub-label">- Crecimiento</td>
                <td class="highlight-red">Lento</td>
                <td><input type="radio" name="crecimiento_lento" value="hostil"></td>
                <td><input type="radio" name="crecimiento_lento" value="nada"></td>
                <td><input type="radio" name="crecimiento_lento" value="poco"></td>
                <td><input type="radio" name="crecimiento_lento" value="medio"></td>
                <td><input type="radio" name="crecimiento_lento" value="alto"></td>
                <td><input type="radio" name="crecimiento_lento" value="muy_alto"></td>
                <td class="highlight-blue">Rápido</td>
            </tr>
            <tr>
                <td class="sub-label">- Naturaleza de los competidores</td>
                <td class="highlight-red">Muchos</td>
                <td><input type="radio" name="competidores_muchos" value="hostil"></td>
                <td><input type="radio" name="competidores_muchos" value="nada"></td>
                <td><input type="radio" name="competidores_muchos" value="poco"></td>
                <td><input type="radio" name="competidores_muchos" value="medio"></td>
                <td><input type="radio" name="competidores_muchos" value="alto"></td>
                <td><input type="radio" name="competidores_muchos" value="muy_alto"></td>
                <td class="highlight-blue">Pocos</td>
            </tr>
            <tr>
                <td class="sub-label">- Exceso de capacidad productiva</td>
                <td class="highlight-red">Sí</td>
                <td><input type="radio" name="capacidad_si" value="hostil"></td>
                <td><input type="radio" name="capacidad_si" value="nada"></td>
                <td><input type="radio" name="capacidad_si" value="poco"></td>
                <td><input type="radio" name="capacidad_si" value="medio"></td>
                <td><input type="radio" name="capacidad_si" value="alto"></td>
                <td><input type="radio" name="capacidad_si" value="muy_alto"></td>
                <td class="highlight-blue">No</td>
            </tr>
            <tr>
                <td class="sub-label">- Rentabilidad media del sector</td>
                <td class="highlight-red">Baja</td>
                <td><input type="radio" name="rentabilidad_baja" value="hostil"></td>
                <td><input type="radio" name="rentabilidad_baja" value="nada"></td>
                <td><input type="radio" name="rentabilidad_baja" value="poco"></td>
                <td><input type="radio" name="rentabilidad_baja" value="medio"></td>
                <td><input type="radio" name="rentabilidad_baja" value="alto"></td>
                <td><input type="radio" name="rentabilidad_baja" value="muy_alto"></td>
                <td class="highlight-blue">Alta</td>
            </tr>
            <tr>
                <td class="sub-label">- Diferenciación del producto</td>
                <td class="highlight-red">Escasa</td>
                <td><input type="radio" name="diferenciacion_escasa" value="hostil"></td>
                <td><input type="radio" name="diferenciacion_escasa" value="nada"></td>
                <td><input type="radio" name="diferenciacion_escasa" value="poco"></td>
                <td><input type="radio" name="diferenciacion_escasa" value="medio"></td>
                <td><input type="radio" name="diferenciacion_escasa" value="alto"></td>
                <td><input type="radio" name="diferenciacion_escasa" value="muy_alto"></td>
                <td class="highlight-blue">Elevada</td>
            </tr>
            <tr>
                <td class="sub-label">- Barreras de salida</td>
                <td class="highlight-red">Bajas</td>
                <td><input type="radio" name="barreras_bajas" value="hostil"></td>
                <td><input type="radio" name="barreras_bajas" value="nada"></td>
                <td><input type="radio" name="barreras_bajas" value="poco"></td>
                <td><input type="radio" name="barreras_bajas" value="medio"></td>
                <td><input type="radio" name="barreras_bajas" value="alto"></td>
                <td><input type="radio" name="barreras_bajas" value="muy_alto"></td>
                <td class="highlight-blue">Altas</td>
            </tr>
        </table>

        <!-- Tabla 2 -->
        <table>
            <tr>
                <th colspan="2">PERFIL COMPETITIVO</th>
                <th>Hostil</th>
                <th>Nada</th>
                <th>Poco</th>
                <th>Medio</th>
                <th>Alto</th>
                <th>Muy Alto</th>
                <th class="highlight-blue">Favorable</th>
            </tr>
            <tr>
                <th colspan="9" class="section-title">Barreras de Entrada</th>
            </tr>
            <tr>
                <td class="sub-label">- Economías de escala</td>
                <td class="highlight-red">No</td>
                <td><input type="radio" name="economias_no" value="hostil"></td>
                <td><input type="radio" name="economias_no" value="nada"></td>
                <td><input type="radio" name="economias_no" value="poco"></td>
                <td><input type="radio" name="economias_no" value="medio"></td>
                <td><input type="radio" name="economias_no" value="alto"></td>
                <td><input type="radio" name="economias_no" value="muy_alto"></td>
                <td class="highlight-blue">Sí</td>
            </tr>
            <tr>
                <td class="sub-label">- Necesidad de capital</td>
                <td class="highlight-red">Bajas</td>
                <td><input type="radio" name="capital_bajas" value="hostil"></td>
                <td><input type="radio" name="capital_bajas" value="nada"></td>
                <td><input type="radio" name="capital_bajas" value="poco"></td>
                <td><input type="radio" name="capital_bajas" value="medio"></td>
                <td><input type="radio" name="capital_bajas" value="alto"></td>
                <td><input type="radio" name="capital_bajas" value="muy_alto"></td>
                <td class="highlight-blue">Altas</td>
            </tr>
            <tr>
                <td class="sub-label">- Acceso a la tecnología</td>
                <td class="highlight-red">Fácil</td>
                <td><input type="radio" name="tecnologia_facil" value="hostil"></td>
                <td><input type="radio" name="tecnologia_facil" value="nada"></td>
                <td><input type="radio" name="tecnologia_facil" value="poco"></td>
                <td><input type="radio" name="tecnologia_facil" value="medio"></td>
                <td><input type="radio" name="tecnologia_facil" value="alto"></td>
                <td><input type="radio" name="tecnologia_facil" value="muy_alto"></td>
                <td class="highlight-blue">Difícil</td>
            </tr>
            <tr>
                <td class="sub-label">- Reglamentos o leyes limitativos</td>
                <td class="highlight-red">No</td>
                <td><input type="radio" name="leyes_no" value="hostil"></td>
                <td><input type="radio" name="leyes_no" value="nada"></td>
                <td><input type="radio" name="leyes_no" value="poco"></td>
                <td><input type="radio" name="leyes_no" value="medio"></td>
                <td><input type="radio" name="leyes_no" value="alto"></td>
                <td><input type="radio" name="leyes_no" value="muy_alto"></td>
                <td class="highlight-blue">Sí</td>
            </tr>
            <tr>
                <td class="sub-label">- Trámites burocráticos</td>
                <td class="highlight-red">No</td>
                <td><input type="radio" name="tramites_no" value="hostil"></td>
                <td><input type="radio" name="tramites_no" value="nada"></td>
                <td><input type="radio" name="tramites_no" value="poco"></td>
                <td><input type="radio" name="tramites_no" value="medio"></td>
                <td><input type="radio" name="tramites_no" value="alto"></td>
                <td><input type="radio" name="tramites_no" value="muy_alto"></td>
                <td class="highlight-blue">Sí</td>
            </tr>
            <tr>
                <td class="sub-label">- Reacción esperada actuales competidores</td>
                <td class="highlight-red">Escasa</td>
                <td><input type="radio" name="reaccion_escasa" value="hostil"></td>
                <td><input type="radio" name="reaccion_escasa" value="nada"></td>
                <td><input type="radio" name="reaccion_escasa" value="poco"></td>
                <td><input type="radio" name="reaccion_escasa" value="medio"></td>
                <td><input type="radio" name="reaccion_escasa" value="alto"></td>
                <td><input type="radio" name="reaccion_escasa" value="muy_alto"></td>
                <td class="highlight-blue">Energética</td>
            </tr>
        </table>

        <!-- Tabla 3 -->
        <table>
            <tr>
                <th colspan="2">PERFIL COMPETITIVO</th>
                <th>Hostil</th>
                <th>Nada</th>
                <th>Poco</th>
                <th>Medio</th>
                <th>Alto</th>
                <th>Muy Alto</th>
                <th class="highlight-blue">Favorable</th>
            </tr>
            <tr>
                <th colspan="9" class="section-title">Poder de los Clientes</th>
            </tr>
            <tr>
                <td class="sub-label">- Número de clientes</td>
                <td class="highlight-red">Pocos</td>
                <td><input type="radio" name="clientes_pocos" value="hostil"></td>
                <td><input type="radio" name="clientes_pocos" value="nada"></td>
                <td><input type="radio" name="clientes_pocos" value="poco"></td>
                <td><input type="radio" name="clientes_pocos" value="medio"></td>
                <td><input type="radio" name="clientes_pocos" value="alto"></td>
                <td><input type="radio" name="clientes_pocos" value="muy_alto"></td>
                <td class="highlight-blue">Muchos</td>
            </tr>
            <tr>
                <td class="sub-label">- Posibilidad de integración ascendente</td>
                <td class="highlight-red">Pequeña</td>
                <td><input type="radio" name="integracion_pequena" value="hostil"></td>
                <td><input type="radio" name="integracion_pequena" value="nada"></td>
                <td><input type="radio" name="integracion_pequena" value="poco"></td>
                <td><input type="radio" name="integracion_pequena" value="medio"></td>
                <td><input type="radio" name="integracion_pequena" value="alto"></td>
                <td><input type="radio" name="integracion_pequena" value="muy_alto"></td>
                <td class="highlight-blue">Grande</td>
            </tr>
            <tr>
                <td class="sub-label">- Rentabilidad de los clientes</td>
                <td class="highlight-red">Baja</td>
                <td><input type="radio" name="rentabilidad_baja" value="hostil"></td>
                <td><input type="radio" name="rentabilidad_baja" value="nada"></td>
                <td><input type="radio" name="rentabilidad_baja" value="poco"></td>
                <td><input type="radio" name="rentabilidad_baja" value="medio"></td>
                <td><input type="radio" name="rentabilidad_baja" value="alto"></td>
                <td><input type="radio" name="rentabilidad_baja" value="muy_alto"></td>
                <td class="highlight-blue">Alta</td>
            </tr>
            <tr>
                <td class="sub-label">- Coste de cambio de proveedor para cliente</td>
                <td class="highlight-red">Bajo</td>
                <td><input type="radio" name="coste_bajo" value="hostil"></td>
                <td><input type="radio" name="coste_bajo" value="nada"></td>
                <td><input type="radio" name="coste_bajo" value="poco"></td>
                <td><input type="radio" name="coste_bajo" value="medio"></td>
                <td><input type="radio" name="coste_bajo" value="alto"></td>
                <td><input type="radio" name="coste_bajo" value="muy_alto"></td>
                <td class="highlight-blue">Alto</td>
            </tr>
        </table>

        <!-- Tabla 4 -->
        <table>
            <tr>
                <th colspan="2">PERFIL COMPETITIVO</th>
                <th>Hostil</th>
                <th>Nada</th>
                <th>Poco</th>
                <th>Medio</th>
                <th>Alto</th>
                <th>Muy Alto</th>
                <th class="highlight-blue">Favorable</th>
            </tr>
            <tr>
                <th colspan="9" class="section-title">Productos sustitutivos</th>
            </tr>
            <tr>
                <td class="sub-label">- Disponibilidad de Productos Sustitutivos</td>
                <td class="highlight-red">Grande</td>
                <td><input type="radio" name="sustitutivos_grande" value="hostil"></td>
                <td><input type="radio" name="sustitutivos_grande" value="nada"></td>
                <td><input type="radio" name="sustitutivos_grande" value="poco"></td>
                <td><input type="radio" name="sustitutivos_grande" value="medio"></td>
                <td><input type="radio" name="sustitutivos_grande" value="alto"></td>
                <td><input type="radio" name="sustitutivos_grande" value="muy_alto"></td>
                <td class="highlight-blue">Pequeña</td>
            </tr>
        </table>


        <!-- Sección de conclusión -->
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr>
                <td style="background-color: #e0f7fa; color: #008080; font-weight: bold; width: 15%; padding: 10px; border: 1px solid #ddd; text-align: center;">CONCLUSIÓN</td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <p style="margin: 0; padding: 10px; border: 1px solid #b59f58; background-color: #fafafa;">
                        > Estamos en un mercado altamente competitivo, en el que es muy difícil hacerse un hueco en el mercado.
                    </p>
                </td>
                <td style="background-color: #e0f7fa; color: #008080; font-weight: bold; width: 10%; padding: 10px; border: 1px solid #ddd; text-align: center;">Total</td>
                <td style="width: 5%; padding: 10px; border: 1px solid #ddd; text-align: center;">0</td>
            </tr>
        </table>

        <p>Una vez analizado el entorno próximo de su empresa, es decir análisis externo de su microentorno, identifique  las oportunidades y amenazas más relevantes que desee que se reflejen en el análisis FODA de de su Plan Estratégico. </p>

        <!-- Tabla de oportunidades y amenazas -->
        <div class="opportunities-threats">
            <table>
                <tr>
                    <th colspan="2">Oportunidades</th>
                </tr>
                <tr>
                    <td>O1:</td>
                    <td><input type="text" name="oportunidad1" style="width: 100%;"></td>
                </tr>
                <tr>
                    <td>O2:</td>
                    <td><input type="text" name="oportunidad2" style="width: 100%;"></td>
                </tr>
            </table>

            <table style="margin-top: 10px;">
                <tr>
                    <th colspan="2">Amenazas</th>
                </tr>
                <tr>
                    <td>A1:</td>
                    <td><input type="text" name="amenaza1" style="width: 100%;"></td>
                </tr>
                <tr>
                    <td>A2:</td>
                    <td><input type="text" name="amenaza2" style="width: 100%;"></td>
                </tr>
            </table>
        </div>

        <!-- Botones de navegación -->
        <div class="footer">
            <button onclick="location.href='fuerzas_porter.php'">8. ANÁLISIS PORTER</button>
            <button onclick="location.href='pest.php'">9. PEST</button>
        </div>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <?php
        if (isset($_GET['mensaje'])) {
            echo "<p>" . htmlspecialchars($_GET['mensaje']) . "</p>";
        }
        ?>
        <form action="../funtions/procesar_login.php" method="post">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Ingresar">
            <button type="button" onclick="window.location.href='register.php'">Crear Usuario</button>
        </form>
    </div>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="IMG/ICOFAV.png">
    <link rel="stylesheet" href="css/login.css">
    <title>Inicio de Sesión</title>
    <style>
        body {
            background-image: url("IMG/newyork.jpg"); /* Ruta de la imagen de fondo */
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <header>
        <?php include('menu.php'); ?>
    </header>
    <!-- Mostramos el formulario de login -->
    <main>
        <div class="container">
            <h2>Iniciar Sesión</h2>
            <form action="Verificacion_login.php" method="post">
                <input type="text" name="email" placeholder="Correo electronico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="submit" value="Ingresar">
            </form>
            <div class="back-to-home">
                <a href="registro.php">¿No tienes una cuenta? Registrate</a><br><br>
                <a href="RecuperarContraseña.php">¿Olvidaste tu contraseña?</a>
            </div>
        </div>
    </main>

</body>
</html>
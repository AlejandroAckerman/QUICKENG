<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=1.0">
    <link rel="stylesheet" href="recoverpass.css">
    <link rel="shortcut icon" href="img/icofav.png" type="image/x-icon">
    <title>Recuperar Contraseña</title>

</head>
<style>
            body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
            text-align: center;
            padding-top: 50px;
        }
        h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 20px;
        }
        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        input[type="email"] {
            width: 100%;
            height: 40px;
            margin-bottom: 20px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            margin-top:10px;
        }
        a:hover {
            background-color: #555;
        }
</style>
<body>
    <img src="img/hacker.png" alt="Recuperar Contraseña">
    <h1>Recuperar Contraseña</h1>
    <p>Introduce tu correo electrónico para recuperar tu contraseña:</p>
    <?php
    if(isset($_GET["status"]) && $_GET["status"]=="success"){
        echo '<p style="color: green;">Se ha enviado un correo a tu dirección para restablecer tu contraseña. Revisa tu bandeja de entrada o la carpeta de spam.</p>';
    }elseif(isset($_GET["status"]) && $_GET["status"]=="error"){
        echo '<p style="color: red;">Ha ocurrido un error al enviar el correo. Por favor, inténtalo de nuevo.</p>';
    }
    ?>
<form action="enviar_correo.php" method="POST">
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <input type="submit" value="Enviar correo">
    </form>
    <a href="login.php">Volver a inicio de sesión</a>
</body>
</html>

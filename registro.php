<?php

  include("conexion.php");

  // Procesar el formulario cuando se envía

 if($_POST){

    // Inicializar variables

    $nombre = $email = $password = $confirm_password = "";

    $nombre_err = $email_err = $password_err = $confirm_password_err = "";

    // Validar el nombre

    if (empty(trim($_POST["nombre"]))) {

      $nombre_err = "Por favor ingresa un nombre.";

    } else {

      $nombre = trim($_POST["nombre"]);

    }



    // Validar el email

    if (empty(trim($_POST["email"]))) {

      $email_err = "Por favor ingresa un correo electrónico.";

    } else {

      // Verificar si el email ya existe en la base de datos

      // Coloca aquí tu código para verificar el email en la base de datos

      // Si el email ya existe, asigna el siguiente mensaje a la variable $email_err

      // $email_err = "El correo electrónico ya está registrado.";

      $email = trim($_POST["email"]);

      $sql = "SELECT * FROM usuario WHERE email_usu = '$email'";

      $verificar_email = mysqli_query($db, $sql);
      
      if(mysqli_num_rows($verificar_email) > 0 ){

        $email_err = "Ya existe un usuario con ese correo"; 

      }
    

    }



    // Validar la contraseña

    if (empty(trim($_POST["password"]))) {

      $password_err = "Por favor ingresa una contraseña.";

    } elseif (strlen(trim($_POST["password"])) < 8) {

      $password_err = "La contraseña debe tener al menos 8 caracteres.";

    } else {

      $password = trim($_POST["password"]);

    }



    // Validar la confirmación de contraseña

    if (empty(trim($_POST["confirm_password"]))) {

      $confirm_password_err = "Por favor confirma la contraseña.";

    } else {

      $confirm_password = trim($_POST["confirm_password"]);

      if (empty($password_err) && ($password != $confirm_password)) {

        $confirm_password_err = "Las contraseñas no coinciden.";

      }

    }



    // Verificar si hay errores antes de insertar en la base de datos

    if (empty($nombre_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {

      // Coloca aquí tu código para insertar los datos del usuario en la base de datos

      // Si la inserción es exitosa, asigna el siguiente mensaje a la variable $mensaje

      // $mensaje = "El usuario ha sido registrado satisfactoriamente.";

      $sql = "INSERT INTO usuario VALUES(null, '$nombre', '$password', '$email', 1,1,null);";

      $guardar = mysqli_query($db, $sql);

      $registro_exitoso = true;

    }

  }

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/registro.css">

    <link rel="shortcut icon" href="img/ICOFAV.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <title>Registro de Usuario</title>

    	<style type="text/css">

		body {

			background-image: url("img/login.jpg"); /* Ruta de la imagen de fondo */

			background-size: cover;

            background-position: center center;

            background-repeat: no-repeat;

            background-attachment: fixed;

		}

	</style>

    

  <!-- Agrega el código jQuery -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  

  <script>

    // Verifica si la variable de registro_exitoso existe y es verdadera

    <?php if(isset($registro_exitoso) && $registro_exitoso): ?>

    

    // Muestra el mensaje de registro exitoso

    $(document).ready(function() {

      $('#registro-exitoso').fadeIn(500);

    });

    

    <?php endif; ?>

    

    // Cierra el mensaje de registro exitoso al hacer clic en el botón "Cerrar"

    $(document).on('click', '#registro-exitoso .cerrar', function() {

      $('#registro-exitoso').fadeOut(500);

    });

  </script>

  <!-- Agrega el código CSS para el mensaje de registro exitoso -->

  <style>

    #registro-exitoso {

      display: none;

      position: fixed;

      top: 0;

      left: 0;

      right: 0;

      bottom: 0;

      background-color: rgba(0,0,0,0.8);

      z-index: 9999;

      font-size: 25px;

      font-weight: bold;



    }

    

    #registro-exitoso .mensaje {

      position: absolute;

      top: 50%;

      left: 50%;

      transform: translate(-50%, -50%);

      background-color: white;

      padding: 70px 250px;

      border-radius: 5px;

      text-align: center;

    }

    

    #registro-exitoso .cerrar {

      position: absolute;

      top: 10px;

      right: 10px;

      font-size: 20px;

      cursor: pointer;

    }

  </style>

</head>

<body>

<?php include('menu.php'); ?>

<div class="container">

    <h2>Registro</h2>

    <form action="registro.php" method="post">

        <?php if(!empty($email_err)): ?>
          <div class="alert alert-danger">
              <?php echo $email_err; ?>
          </div>
        <?php endif; ?>

        <?php if(!empty($confirm_password_err)): ?>
          <div class="alert alert-danger">
              <?php echo $confirm_password_err; ?>
          </div>
        <?php endif; ?>

        <input type="text" name="nombre" placeholder="Nombre"><br><br>

        <input type="email" name="email" placeholder="Correo electrónico"><br><br>

        <input type="password" name="password" placeholder="Contraseña"><br><br>

        <input type="password" name="confirm_password" placeholder="Confirmar contraseña"><br><br>

        <label for="tipo">Tipo:</label>

        <select name="tipo" id="tipo" onchange="mostrarFormulario()">

            <option value="autoaprendizaje">Autoaprendizaje</option>

            <option value="profesor">Profesor</option>

            <option value="estudiante">Estudiante</option>

        </select><br><br>

        <div id="formularioAdicional" style="display: none;">

            <input type="text" name="institucion" placeholder="Institución"><br><br>

            <input type="text" name="grado" placeholder="Grado"><br><br>

  </div>

        <div>

            <input type="checkbox" name="terms" id="terms" required>

            <label for="terms">He leído y acepto los términos y condiciones y la política de privacidad</label>

        </div>

        <br>

        <div class="clearfix">

            <input type="submit" value="Registrarse">

        </div>

    </form>

</div>



    <script>

        function mostrarFormulario() {

            var tipo = document.getElementById("tipo").value;

            if (tipo == "profesor" || tipo == "estudiante") {

                document.getElementById("formularioAdicional").style.display = "block";

            } else {

                document.getElementById("formularioAdicional").style.display = "none";

            }

        }

    </script>



    <!-- Agrega el mensaje de registro exitoso -->

    <?php if(isset($registro_exitoso) && $registro_exitoso): ?>

    <div id="registro-exitoso">

        <div class="mensaje">

            <p>Registro exitoso.</p>

            <button class="cerrar">&times;</button>

        </div>

    </div>

    <?php endif; ?>

</body>

</html>
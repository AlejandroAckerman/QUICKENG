<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
	<link rel="shortcut icon" href="IMG/ICOFAV.png">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Inicio</title>
</head>
<!-- No borrar esta etiqueta es la del fondo de la pagina -->
<style>
		body {
			background-image: url("IMG/index.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			margin: 0;
			padding: 0;
		}
		
	</style>
<body>
	<div class="margenes">
	<header>
	<?php include 'menu.php'; ?>
	</header>

	<main>
	<br></br>
	<div class="index">
  <div class="index__content">
    <h2 class="index__title">
	<br></br>
	<br></br>
		¿Listo para hablar inglés con confianza? Quickeng te lleva al siguiente nivel</h2>
    <button class="index__button" onclick="window.location.href='registro.php'">¡Registrate ahora!</button>
  </div>
</div>
</main>

  <footer>
  <?php include ('footer.php') ?>
</footer>
</div>
</body>
</html>


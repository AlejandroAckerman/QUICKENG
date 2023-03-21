<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/idealesrectangulo.css">
	<link rel="shortcut icon" href="IMG/ICOFAV.png">
	<title>ideales</title>
</head>

	<!-- inicio de la pagina-->
<body>
	<!--Encabezado-->
	<header>
		<?php include 'menu.php'; ?>
	</header>

<!--Contenido main de la pagina -->
	<main>
	<br>
	<br>
	<br>
	<div class="banner">
	  <img src="IMG/viaje.png" alt="Banner Image">
	  <div class="banner-text">
	    <h2>Nuestros Ideales</h2>
	    <p>En Quickeng nos dedicamos a hacer del aprendizaje del inglés una experiencia agradable, efectiva y accesible para todos </p>
		<p>Desplázate por nuestros iconos para conocer más de nosotros</p>
	    <button class="btn" onclick="window.location.href='registro.php'">¡Regístrate ahora!</button>
	  </div>
	</div>
	
<div class="banner banner-secundario">
  <!-- Contenido del banner secundario -->
    <!-- Aquí va el contenido adicional -->
  <!--ICONOS PARA IDEALES ARRIBA  -->
	<div class="iconos">
	  <div class="fila-iconos">
	    <a><img src="IMG/IDEALES1.PNG" alt="Icono 1" style="max-width: var(--icon-width); max-height: 100px;"></a>
	    <a><img src="IMG/IDEALES2.png" alt="Icono 2" style="max-width: var(--icon-width); max-height: 100px;"></a>
	    <a><img src="IMG/IDEALES3.png" alt="Icono 3" style="max-width: var(--icon-width); max-height: 100px;"></a>
	  </div>
	    <!--ICONOS PARA IDEALES ABAJO -->
	  <div class="fila-iconos">
	    <a><img src="IMG/IDEALES4.png" alt="Icono 4" style="max-width: var(--icon-width); max-height: 100px;"></a>
	    <a><img src="IMG/IDEALES5.png" alt="Icono 5" style="max-width: var(--icon-width); max-height: 100px;"></a>
	    <a><img src="IMG/IDEALES6.png" alt="Icono 6" style="max-width: var(--icon-width); max-height: 100px;"></a>
	  </div>
	</div>
</div>


	<footer>
		<!-- Aquí va el contenido del footer -->
		<?php include ('footer.php') ?>
	</footer>
</body>
<!-- popup -->
<div id="popup" class="popup">
  <div class="popup-content">
    <button class="close-btn">&times;</button> <!-- Agrega el botón "X" aquí -->
    <div class="popup-text"></div>
  </div>
</div> 
<!-- Agrega esto al final del archivo, antes de la etiqueta body-->
<script>
// Selecciona los elementos relevantes
const iconos = document.querySelectorAll('.fila-iconos img');
const popup = document.querySelector('#popup');
const popupText = document.querySelector('.popup-text');
const closeBtn = document.querySelector('.close-btn');

// Agrega un evento de clic a cada icono
iconos.forEach((icono) => {
  icono.addEventListener('click', () => {
    // Actualiza el contenido del cuadro de texto
    if (icono.alt === 'Icono 1') {
      popupText.innerHTML = '<h3> Aprendizaje divertido </h3><p> Nos esforzamos por hacer que el aprendizaje del inglés sea una experiencia agradable y emocionante para nuestros estudiantes.</p>';
    } else if (icono.alt === 'Icono 2') {
      popupText.innerHTML = '<h3>Enfoque práctico</h3><p> Nos enfocamos en enseñar inglés que puedas aplicar en situaciones de la vida real, no solo en un aula.</p>';
    } else if (icono.alt === 'Icono 3') {
      popupText.innerHTML = '<h3>Flexibilidad</h3><p>Comprendemos que la situacion de las personas y que aveces no hay tiempo para aprender asi que dejamos que seas auutodidacta</p>';
    } else if (icono.alt === 'Icono 4') {
      popupText.innerHTML = '<h3>Inovacion</h3><p>Somos una marca diferente que revoluciona la manera de aprender el lenguaje</p>';
    } else if (icono.alt === 'Icono 5') {
      popupText.innerHTML = '<h3>Accesibilidad</h3><p>Nos esforzamos por hacer que el aprendizaje del inglés sea accesible para todos, independientemente de su situación económica o ubicación geográfica.</p>';
    } else if (icono.alt === 'Icono 6') {
      popupText.innerHTML = '<h3>Tiempo</h3><p>Sabemos la importancia del tiempo y por eso hacemos actividades que puedas hacer en periodos cortos de tiempo para que saques el maximo provecho al dia</p>';
    }


    // Muestra la ventana emergente
    popup.style.display = 'block';
  });
});

// Agrega un evento de clic al botón "X"
closeBtn.addEventListener('click', () => {
  // Oculta la ventana emergente
  popup.style.display = 'none';
});

// Agrega un evento de clic al elemento "popup"
popup.addEventListener('click', (evento) => {
  // Si se hizo clic fuera del contenido de la ventana emergente, ocúltala
  if (evento.target === popup) {
    popup.style.display = 'none';
  }
});

</script>
</html>

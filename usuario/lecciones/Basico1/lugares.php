<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lugares Básicos en Inglés</title>
</head>
<body>
	<header>
		<h1>Lugares Básicos en Inglés</h1>
	</header>
	<main>
		<section>
			<h2>¿Por qué es útil conocer estos lugares?</h2>
			<p>En inglés, existen varios lugares básicos que es útil conocer para poder comunicarse en situaciones cotidianas. Algunos de ellos son:</p>
			<ul>
				<li>Supermarket (supermercado)</li>
				<li>Library (biblioteca)</li>
				<li>Park (parque)</li>
				<li>Hospital (hospital)</li>
				<li>Store (tienda)</li>
			</ul>
		</section>
		<section>
			<h2>Practica tu inglés</h2>
			<p>Ingresa un lugar en español para saber cómo se dice en inglés:</p>
			<form>
				<label for="lugar">Lugar:</label>
				<input type="text" id="lugar" name="lugar">
				<button type="submit">Enviar</button>
			</form>
			<p id="resultado"></p>
		</section>
	</main>
	<footer>
		<p>© 2023 - Todos los derechos reservados.</p>
	</footer>

	<script>
		// Definimos los lugares en inglés y su traducción al español
		const lugares = {
			'supermercado': 'supermarket',
			'biblioteca': 'library',
			'parque': 'park',
			'hospital': 'hospital',
			'tienda': 'store'
		};

		// Obtiene la referencia al formulario
		const form = document.querySelector('form');
		// Agrega un escucha al evento submit del formulario
		form.addEventListener('submit', (event) => {
			event.preventDefault(); // Previen la recarga de la página
			const lugarElegido = document.getElementById('lugar').value.trim().toLowerCase();
			// Comprueba si el lugar ingresado está en la lista
			if (lugarElegido in lugares) {
				const lugarEnIngles = lugares[lugarElegido];
				document.getElementById('resultado').textContent = `¡Great! ¡you are goingto the  ${lugarEnIngles}! ¿do you need some indications?`;
			} else {
				document.getElementById('resultado').textContent = 'Lo siento, no reconozco ese lugar. Por favor, ingresa uno de los lugares de la lista: supermercado, biblioteca, parque, hospital, tienda';
			}
		});
	</script>
</body>
</html>
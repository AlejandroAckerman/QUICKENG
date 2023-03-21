<!DOCTYPE html>
<html>
<head>
	<title>Alfabeto en inglés</title>
	<style>
		.container {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		h1 {
			background-color: #4CAF50;
			color: white;
			padding: 10px;
			width:100%;
			text-align:center;S

		}

		h2 {
			margin-top: 30px;
		}

		p {
			margin-top: 0;
		}

		.letter {
			background-color: #f2f2f2;
			border: none;
			color: black;
			cursor: pointer;
			font-size: 16px;
			margin: 5px;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
		}

		.letter:hover {
			background-color: #ddd;
		}

		form {
			margin-top: 30px;
		}

		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}

		select {
			margin-bottom: 20px;
			padding: 5px;
			width: 100%;
		}

		button[type=submit] {
			background-color: #4CAF50;
			border: none;
			color: white;
			cursor: pointer;
			font-size: 16px;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			margin-top: 20px;
		}

		button[type=submit]:hover {
			background-color: #45a049;
		}
		
	</style>
</head>
<body>
<div class="container">
	<h1>Alfabeto en inglés</h1>

	<p>Click en las letras para escuchar su pronunciación:</p>
	<div>
		<button class="letter" onclick="pronounceLetter('a')">A</button>
		<button class="letter" onclick="pronounceLetter('b')">B</button>
		<button class="letter" onclick="pronounceLetter('c')">C</button>
		<button class="letter" onclick="pronounceLetter('d')">D</button>
		<button class="letter" onclick="pronounceLetter('e')">E</button>
		<button class="letter" onclick="pronounceLetter('f')">F</button>
		<button class="letter" onclick="pronounceLetter('g')">G</button>
		<button class="letter" onclick="pronounceLetter('h')">H</button>
		<button class="letter" onclick="pronounceLetter('i')">I</button>
		<button class="letter" onclick="pronounceLetter('j')">J</button>
		<button class="letter" onclick="pronounceLetter('k')">K</button>
		<button class="letter" onclick="pronounceLetter('l')">L</button>
		<button class="letter" onclick="pronounceLetter('m')">M</button>
		<button class="letter" onclick="pronounceLetter('n')">N</button>
		<button class="letter" onclick="pronounceLetter('o')">O</button>
		<button class="letter" onclick="pronounceLetter('p')">P</button>
		<button class="letter" onclick="pronounceLetter('q')">Q</button>
		<button class="letter" onclick="pronounceLetter('r')">R</button>
		<button class="letter" onclick="pronounceLetter('s')">S</button>
		<button class="letter" onclick="pronounceLetter('t')">T</button>
		<button class="letter" onclick="pronounceLetter('u')">U</button>
		<button class="letter" onclick="pronounceLetter('v')">V</button>
		<button class="letter" onclick="pronounceLetter('w')">W</button>
		<button class="letter" onclick="pronounceLetter('x')">X</button>
        <button class="letter" onclick="pronounceLetter('y')">Y</button>
	    <button class="letter" onclick="pronounceLetter('z')">Z</button>
</div>

<script>
	
</script>

	<h2>Preguntas y respuestas</h2>
	<p>Selecciona la opción correcta para cada pregunta:</p>
	<form id="quiz-form">
		<div>
			<label for="q1">¿Cuántas letras tiene el alfabeto en inglés?</label>
			<select id="q1">
				<option value="">Selecciona una opción</option>
				<option value="26">26</option>
				<option value="24">24</option>
				<option value="28">28</option>
			</select>
		</div>
		<div>
			<label for="q2">¿Cuál es la letra del alfabeto que viene después de la 'J'?</label>
			<select id="q2">
				<option value="">Selecciona una opción</option>
				<option value="K">K</option>
				<option value="L">L</option>
				<option value="M">M</option>
			</select>
		</div>
		<button type="submit">Enviar respuestas</button>
	</form>

	<script>
		//funcion para reroducir audio de las letras
		function pronounceLetter(letter) {
		var audio = new Audio(`https://ssl.gstatic.com/dictionary/static/sounds/20200429/${letter}--_gb_1.mp3`);
		audio.play();
	}
		// Función para validar las respuestas del formulario
		function validateQuiz() {
			const form = document.getElementById('quiz-form');
			const q1 = form.elements.q1.value;
			const q2 = form.elements.q2.value;

			if (q1 === '26' && q2 === 'K') {
				alert('¡Respuestas correctas!');
			} else {
				alert('Al menos una de las respuestas es incorrecta. Inténtalo de nuevo.');
			}

			// Para evitar que el formulario se envíe automáticamente
			return false;
		}

		// Agregar el evento 'submit' al formulario para validar las respuestas
		const form = document.getElementById('quiz-form');
		form.addEventListener('submit', validateQuiz);
	</script>

	</div>
</body>
</html>
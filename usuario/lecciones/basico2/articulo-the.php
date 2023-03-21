<!DOCTYPE html>
<html>
<head>
	<title>Explicando "The"</title>
	<meta charset="UTF-8">
	<style>
		body {
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
		}

		h1 {
			font-size: 28px;
			text-align: center;
			margin-top: 30px;
		}

		p {
			margin-bottom: 20px;
		}

		#toggle {
			display: none;
		}

		#toggle:checked ~ .explicacion {
			display: block;
		}

		.explicacion {
			display: none;
			background-color: #f5f5f5;
			padding: 10px;
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<h1>Explicando "The"</h1>
	<p>En este artículo vamos a explicar el uso de la palabra "the" en inglés.</p>
	<p>¿Quieres ver la explicación completa? Haz clic en el botón:</p>
	<label for="toggle">
		<button>Mostrar explicación</button>
	</label>
	<input type="checkbox" id="toggle">
	<div class="explicacion">
		<p>"The" es un artículo definido en inglés. Se utiliza para indicar que nos estamos refiriendo a un objeto, persona o lugar en particular.</p>
		<p>Por ejemplo:</p>
		<ul>
			<li><em>The</em> cat is on <em>the</em> mat. (El gato está en la alfombra.)</li>
			<li><em>The</em> Eiffel Tower is in <em>the</em> center of Paris. (La Torre Eiffel está en el centro de París.)</li>
			<li><em>The</em> President of the United States will give a speech. (El Presidente de los Estados Unidos dará un discurso.)</li>
		</ul>
	</div>
	<script>
		var toggle = document.getElementById("toggle");
		var button = document.querySelector("button");
		button.addEventListener("click", function() {
			if (toggle.checked) {
				toggle.checked = false;
				button.innerHTML = "Mostrar explicación";
			} else {
				toggle.checked = true;
				button.innerHTML = "Ocultar explicación";
			}
		});
	</script>
</body>
</html>
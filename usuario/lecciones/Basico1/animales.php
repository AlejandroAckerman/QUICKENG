<!DOCTYPE html>
<html>
<head>
	<title>Animals in English</title>
	<style>
		.animal-box {
			display: inline-block;
			width: 150px;
			height: 150px;
			margin: 10px;
			border: 2px solid black;
			text-align: center;
			font-size: 24px;
			font-weight: bold;
			line-height: 150px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="animal-box" onclick="showAnimal('Dog')">Dog</div>
	<div class="animal-box" onclick="showAnimal('Cat')">Cat</div>
	<div class="animal-box" onclick="showAnimal('Bird')">Bird</div>
	<div class="animal-box" onclick="showAnimal('Fish')">Fish</div>
	<div class="animal-box" onclick="showAnimal('Rabbit')">Rabbit</div>
	<div class="animal-box" onclick="showAnimal('Horse')">Horse</div>
	
	<script>
		function showAnimal(animal) {
			alert("The animal is " + animal);
		}
	</script>
	<h1>Animales en inglés</h1>

<form>
	<label for="dog">Perro:</label>
	<input type="text" id="dog" name="dog"><br>

	<label for="cat">Gato:</label>
	<input type="text" id="cat" name="cat"><br>

	<label for="bird">Pájaro:</label>
	<input type="text" id="bird" name="bird"><br>

	<label for="fish">Pez:</label>
	<input type="text" id="fish" name="fish"><br>

	<label for="horse">Caballo:</label>
	<input type="text" id="horse" name="horse"><br>

	<label for="snake">Serpiente:</label>
	<input type="text" id="snake" name="snake"><br>

  <input type="submit" id="comprobar" value="Comprobar">
</form>

</div>

<script>
// Respuestas correctas
const respuestas = {
	dog: "dog",
	cat: "cat",
	bird: "bird",
	fish: "fish",
	horse: "horse",
	snake: "snake"
};

// Validación de respuestas y cálculo de puntaje
const form = document.querySelector("form");
form.addEventListener("submit", (event) => {
	event.preventDefault();

	let puntaje = 0;
	for (const pregunta in respuestas) {
		const respuesta = document.getElementById(pregunta).value.toLowerCase();
		if (respuesta === respuestas[pregunta]) {
			puntaje++;
			document.getElementById(pregunta).classList.add("correcta");
		} else {
			document.getElementById(pregunta).classList.add("incorrecta");
		}
	}

	alert(`Obtuviste ${puntaje} de 6 respuestas correctas.`);
	const continuar = confirm("¿Deseas continuar jugando?");
	if (continuar) {
		form.reset();
		const inputs = document.querySelectorAll("input[type='text']");
		inputs.forEach(input => {
			input.classList.remove("correcta", "incorrecta");
		});
	} else {
  window.location.href = "../../../index.php"; // Reemplazar con la URL del inicio
	}
});
</script>

<style>
.correcta {
	border: 2px solid green;
}

.incorrecta {
	border: 2px solid red;
}
  /* Estilo para el título */
  h1 {
  font-size: 36px;
  text-align: center;
  color: #333;
  margin-bottom: 20px;
}

/* Estilo para la lista de animales */
ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

ul li {
  background-color: #f2f2f2;
  border-radius: 5px;
  padding: 10px;
  margin: 10px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  transition: transform 0.2s;
  cursor: pointer;
  font-size: 24px;
}

ul li:hover {
  transform: translateY(-5px);
}

/* Estilo para el formulario */
form {
  max-width: 600px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: center;
}

label {
  font-size: 18px;
  color: #333;
  margin-bottom: 10px;
}

input[type="text"] {
  padding: 10px;
  border: none;
  border-radius: 5px;
  margin-bottom: 20px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  font-size: 18px;
  width: 100%;
}

input[type="submit"] {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 18px;
  transition: background-color 0.2s;
  margin-top: 20px;
}

input[type="submit"]:hover {
  background-color: #444;
}

</style>
</body>
</html>
</html>





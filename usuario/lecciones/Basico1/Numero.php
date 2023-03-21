<!DOCTYPE html>
<html>
<head>
	<title>Números en inglés</title>
</head>
<body>
	<h1>Números en inglés</h1>
	
	<label for="numero">Ingresa un número del 1 al 10:</label>
	<input type="number" id="numero" min="1" max="10" onchange="mostrarNumero()">
	
	<div id="resultado"></div>
	
	<script>
		function mostrarNumero() {
			// Obtener el valor del input
			var numero = document.getElementById("numero").value;
			
			// Crear un arreglo con los números en inglés
			var numerosEnIngles = ["one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten"];
			
			// Mostrar el número en inglés correspondiente en el div de resultado
			document.getElementById("resultado").innerHTML = "El número en inglés es: " + numerosEnIngles[numero - 1];
		}
	</script>
</body>
</html>
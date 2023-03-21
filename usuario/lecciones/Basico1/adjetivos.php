<!DOCTYPE html>
<html>
<head>
	<title>Traductor de Adjetivos en inglés</title>
</head>
<body>
	<h1>Traductor de Adjetivos en inglés</h1>
	
	<label for="adjetivo">Ingresa un adjetivo:</label>
	<input type="text" id="adjetivo" oninput="traducirAdjetivo()">
	
	<div id="resultado"></div>
	
	<script>
		function traducirAdjetivo() {
			// Obtener el valor del input
			var adjetivo = document.getElementById("adjetivo").value;
			
			// Crear un objeto que contiene las traducciones de algunos adjetivos en inglés
			var traducciones = {
				"feliz": "happy",
				"triste": "sad",
				"grande": "big",
				"pequeño": "small",
				"rápido": "fast",
				"lento": "slow"
			};
			
			// Verificar si el adjetivo ingresado se encuentra en el objeto de traducciones
			if (adjetivo.toLowerCase() in traducciones) {
				document.getElementById("resultado").innerHTML = "El adjetivo en ingles es: " + traducciones[adjetivo.toLowerCase()];
			} else {
				document.getElementById("resultado").innerHTML = "Lo siento, no tengo la traducción de ese adjetivo.";
			}
		}
	</script>
</body>
</html>





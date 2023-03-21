<!DOCTYPE html>
<html>
<head>
	<title>Días de la semana en inglés</title>
</head>
<body>
	<h1>Días de la semana en inglés</h1>
	
	<label for="day">Selecciona un día de la semana:</label>
	<select id="day" onchange="mostrarDia()">
		<option value="">- Selecciona un día -</option>
		<option value="lunes">lunes</option>
		<option value="martes">martes</option>
		<option value="miercoles">miercoles</option>
		<option value="jueves">jueves</option>
		<option value="viernes">viernes</option>
		<option value="sabado">sabado</option>
		<option value="domingo">domingo</option>
	</select>
	
	<div id="resultado"></div>
	
	<script>
		function mostrarDia() {
			// Obtener el valor del select
			var dia = document.getElementById("day").value;
			
			// Crear un objeto que contiene las traducciones de los días de la semana en inglés y en español
			var traducciones = {
            "lunes": "Monday",
            "martes": "Tuesday",
            "miercoles": "Wednesday",
            "jueves": "Thursday",
            "viernes": "Friday",
            "sabado": "Saturday",
            "domingo": "Sunday"
        };
			
			// Verificar si se seleccionó un día de la semana
			if (dia != "") {
				// Verificar si el día seleccionado se encuentra en el objeto de traducciones
				if (dia in traducciones) {
					document.getElementById("resultado").innerHTML = "El día en ingles es: " + traducciones[dia];
				} else {
					document.getElementById("resultado").innerHTML = "Lo siento, no tengo la traducción de ese día de la semana.";
				}
			} else {
				document.getElementById("resultado").innerHTML = "";
			}
		}
	</script>
</body>
</html>
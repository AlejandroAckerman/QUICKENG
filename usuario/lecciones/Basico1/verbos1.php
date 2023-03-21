<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Verbos Simples en Inglés</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
    body {
	font-family: Arial, sans-serif;
}

#container {
	margin: 0 auto;
	max-width: 600px;
	text-align: center;
}

#verb-container ul {
	list-style-type: none;
	padding: 0;
}

#verb-container ul li {
	margin-bottom: 10px;
}

#verb-container ul li span {
	font-weight: bold;
}
</style>
<script>
        function showVerbs() {
        // Obtener el div que contiene los verbos
        var verbContainer = document.getElementById("verb-container");

        // Si el div está oculto, mostrarlo
        if (verbContainer.style.display === "none") {
            verbContainer.style.display = "block";
        }
        // Si el div está visible, ocultarlo
        else {
            verbContainer.style.display = "none";
        }
    }
</script>
<body>
	<div id="container">
		<h1>Verbos Simples en Inglés</h1>
		<p>Haz clic en el botón para ver los verbos y sus significados:</p>
		<button onclick="showVerbs()">Mostrar Verbos</button>
		<div id="verb-container" style="display: none;">
			<ul>
				<li><span>Be</span> - ser o estar</li>
				<li><span>Have</span> - tener</li>
				<li><span>Do</span> - hacer</li>
				<li><span>Go</span> - ir</li>
				<li><span>Eat</span> - comer</li>
				<li><span>Drink</span> - beber</li>
				<li><span>Read</span> - leer</li>
				<li><span>Write</span> - escribir</li>
				<li><span>Speak</span> - hablar</li>
				<li><span>Listen</span> - escuchar</li>
			</ul>
		</div>
	</div>
	<script src="app.js"></script>
</body>
</html>
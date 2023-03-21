<html>
<head>
    <title>Examen de inglés Pre-A1</title>
</head>
<body>
    <h1>Examen de inglés Pre-A1</h1>
    <h2>Temas:</h2>
    <form>
        <h3>Abecedario en inglés:</h3>
        <label for="abecedario">Escribe las letras que faltan:</label><br>
        A B C D E F G H _ J K L M _ O P Q R S T U _ W X Y _<br>
        <input type="text" id="abecedario" name="abecedario"><br>
        <h3>Adjetivos en inglés:</h3>
        <label for="adjetivo1">Completa las frases con un adjetivo adecuado:</label><br>
        El perro es muy <input type="text" id="adjetivo1" name="adjetivo1">. (feliz/triste)<br>
        El coche es <input type="text" id="adjetivo2" name="adjetivo2">. (grande/pequeño)<br>
        La sopa está muy <input type="text" id="adjetivo3" name="adjetivo3">. (caliente/fría)<br>
        El tren es <input type="text" id="adjetivo4" name="adjetivo4">. (rápido/lento)<br>
        La casa es <input type="text" id="adjetivo5" name="adjetivo5">. (nueva/vieja)<br>
        <br>

        <label for="opuesto1">Escribe un adjetivo opuesto:</label><br>
        Alto: <input type="text" id="opuesto1" name="opuesto1"><br>
        Feliz: <input type="text" id="opuesto2" name="opuesto2"><br>
        Limpio: <input type="text" id="opuesto3" name="opuesto3"><br>
        Nuevo: <input type="text" id="opuesto4" name="opuesto4"><br>
        Viejo: <input type="text" id="opuesto5" name="opuesto5"><br>
        <br>

        <h3>Animales en inglés:</h3>
        <label for="animal1">Escribe el nombre del animal que corresponde:</label><br>
        Un animal que ladra: <input type="text" id="animal1" name="animal1"><br>
        Un animal que maúlla: <input type="text" id="animal2" name="animal2"><br>
        Un animal que vuela: <input type="text" id="animal3" name="animal3"><br>
        Un animal que nada: <input type="text" id="animal4" name="animal4"><br>
        Un animal que corre: <input type="text" id="animal5" name="animal5"><br>
        <br>

        <h3>Partes de una casa en inglés:</h3>
        <label for="parte1">Escribe el nombre de la parte de la casa que se indica:</label><br>
        Lugar donde se cocina: <input type="text" id="parte1" name="parte1"><br>
        Lugar donde se come: <input type="text" id="parte2" name="parte2"><br>
		Lugar donde se duerme: <input type="text" id="parte3" name="parte3"><br>
		Lugar donde se baña: <input type="text" id="parte4" name="parte4"><br>
		Lugar donde se ve la televisión: <input type="text" id="parte5" name="parte5"><br>
		<br>
		<h3>Preguntas y respuestas en inglés:</h3>
		<label for="pregunta1">Completa las preguntas con la respuesta adecuada:</label><br>
		<strong>Q:</strong> What's your name?<br>
		<strong>A:</strong> My name is <input type="text" id="pregunta1" name="pregunta1"><br>
		<strong>Q:</strong> How old are you?<br>
		<strong>A:</strong> I am <input type="text" id="pregunta2" name="pregunta2"> years old.<br>
		<strong>Q:</strong> Where are you from?<br>
		<strong>A:</strong> I am from <input type="text" id="pregunta3" name="pregunta3"><br>
		<strong>Q:</strong> What do you like to do?<br>
		<strong>A:</strong> I like to <input type="text" id="pregunta4" name="pregunta4"><br>
		<strong>Q:</strong> What's your favorite color?<br>
		<strong>A:</strong> My favorite color is <input type="text" id="pregunta5" name="pregunta5"><br>
		<br>
        </form>
		<div id="resumen">

		</div>

		<input type="submit" value="Enviar respuestas">
		<script>
function validarFormulario() {
    // Validar el abecedario
    var abecedario = document.getElementById("abecedario").value.toUpperCase();
    if (abecedario !== "I N K N Q V Z") {
        document.getElementById("resumen").innerHTML += "<p>El abecedario está incorrecto.</p>";
    }

    // Validar los adjetivos
    var adjetivo1 = document.getElementById("adjetivo1").value.toLowerCase();
    var adjetivo2 = document.getElementById("adjetivo2").value.toLowerCase();
    var adjetivo3 = document.getElementById("adjetivo3").value.toLowerCase();
    var adjetivo4 = document.getElementById("adjetivo4").value.toLowerCase();
    var adjetivo5 = document.getElementById("adjetivo5").value.toLowerCase();
    var opuesto1 = document.getElementById("opuesto1").value.toLowerCase();
    var opuesto2 = document.getElementById("opuesto2").value.toLowerCase();
    var opuesto3 = document.getElementById("opuesto3").value.toLowerCase();
    var opuesto4 = document.getElementById("opuesto4").value.toLowerCase();
    var opuesto5 = document.getElementById("opuesto5").value.toLowerCase();
    var adjetivosCorrectos = 0;
    if (adjetivo1 === "feliz") {
        adjetivosCorrectos++;
    }
    if (adjetivo2 === "pequeño") {
        adjetivosCorrectos++;
    }
    if (adjetivo3 === "caliente") {
        adjetivosCorrectos++;
    }
    if (adjetivo4 === "lento") {
        adjetivosCorrectos++;
    }
    if (adjetivo5 === "viejo") {
        adjetivosCorrectos++;
    }
    if (opuesto1 === "alto") {
        adjetivosCorrectos++;
    }
    if (opuesto2 === "triste") {
        adjetivosCorrectos++;
    }
    if (opuesto3 === "limpio") {
        adjetivosCorrectos++;
    }
    if (opuesto4 === "joven") {
        adjetivosCorrectos++;
    }
    if (opuesto5 === "nuevo") {
        adjetivosCorrectos++;
    }
    if (adjetivosCorrectos !== 10) {
        document.getElementById("resumen").innerHTML += "<p>Los adjetivos están incorrectos.</p>";
    }

    // Validar los animales
    var animal1 = document.getElementById("animal1").value.toLowerCase();
    var animal2 = document.getElementById("animal2").value.toLowerCase();
    var animal3 = document.getElementById("animal3").value.toLowerCase();
    var animal4 = document.getElementById("animal4").value.toLowerCase();
    var animal5 = document.getElementById("animal5").value.toLowerCase();
    var animalesCorrectos = 0;
    if (animal1 === "perro") {
        animalesCorrectos++;
    }
    if (animal2 === "gato") {
        animalesCorrectos++;
    }
    if (animal3 === "pájaro") {
        animalesCorrectos++;
    }
    if (animal4 === "pez") {
        animalesCorrectos++;
    }
    if (animal5 === "ratón") {
        animalesCorrectos++;
    }
    if (animalesCorrectos !== 5) {
        document.getElementById("resumen").innerHTML += "<p>Los animales están incorrectos.</p>";
    }
    // Mostrar el resumen
    if (document.getElementById("resumen").innerHTML === "") {


document.getElementById("resumen").innerHTML = "<p>Todos los campos son correctos.</p>";
}
}
</script>

		
		</body>
		</html>
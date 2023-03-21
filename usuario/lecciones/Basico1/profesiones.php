<!DOCTYPE html>
<html>
<head>
	<title>Profesiones en inglés</title>
	<style>
		.profesion {
			display: none;
		}

		.active {
			display: block;
		}

		.btn {
			background-color: #4CAF50;
			color: white;
			padding: 10px;
			border: none;
			cursor: pointer;
			margin-right: 10px;
		}

		.btn:hover {
			background-color: #3e8e41;
		}

		.profesion-img {
			width: 200px;
			margin-top: 20px;
			display: none;
		}
	</style>
</head>
<body>
	<h1>Profesiones en inglés</h1>
	<button class="btn" onclick="showProfesion('doctor')">Doctor</button>
	<button class="btn" onclick="showProfesion('teacher')">Teacher</button>
	<button class="btn" onclick="showProfesion('engineer')">Engineer</button>
	<button class="btn" onclick="showProfesion('lawyer')">Lawyer</button>

	<p class="profesion" id="doctor">A doctor is a medical professional who diagnoses and treats illnesses and injuries.</p>
	<img src="https://cdn.pixabay.com/photo/2017/07/31/11/31/doctor-2552749_960_720.jpg" alt="Doctor" class="profesion-img">

	<p class="profesion" id="teacher">A teacher is a professional who educates students in various subjects and skills.</p>
	<img src="https://cdn.pixabay.com/photo/2018/05/29/21/11/teacher-3449390_960_720.jpg" alt="Teacher" class="profesion-img">

	<p class="profesion" id="engineer">An engineer is a professional who designs, builds, and maintains systems, structures, and machines.</p>
	<img src="https://cdn.pixabay.com/photo/2015/09/16/20/01/engineer-947492_960_720.jpg" alt="Engineer" class="profesion-img">

	<p class="profesion" id="lawyer">A lawyer is a legal professional who advises and represents individuals, businesses, and organizations in legal matters.</p>
	<img src="https://cdn.pixabay.com/photo/2016/11/19/16/07/legal-advice-1839755_960_720.jpg" alt="Lawyer" class="profesion-img">

	<script>
		function showProfesion(profesion) {
			var profesiones = document.getElementsByClassName("profesion");
			for (var i = 0; i < profesiones.length; i++) {
				profesiones[i].classList.remove("active");
			}
			document.getElementById(profesion).classList.add("active");
			
			var imagenes = document.getElementsByClassName("profesion-img");
			for (var i = 0; i < imagenes.length; i++) {
				imagenes[i].style.display = "none";
			}
			document.querySelector(`#${profesion} ~ img`).style.display = "block";
		}
	</script>
</body>
</html>
</html>


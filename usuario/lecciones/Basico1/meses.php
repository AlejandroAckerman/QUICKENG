<!DOCTYPE html>
<html>
<head>
	<title>Meses en Inglés</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			text-align: center;
		}

		h1 {
			margin-top: 50px;
		}

		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			margin-top: 50px;
		}

		.box {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			margin: 10px;
			width: 200px;
			height: 200px;
			border: 2px solid black;
			border-radius: 10px;
			cursor: pointer;
			transition: all 0.3s ease;
		}

		.box:hover {
			transform: scale(1.1);
		}

		img {
			width: 100px;
			height: 100px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<h1>Meses en Inglés</h1>
	<div class="container" style="width:100%;" >
		<div class="box" onclick="showInfo('January', 'http://localhost/QUICKENGV3/usuario/assets/img/january.jpg', 'January is the first month of the year.')">
			<img src="http://localhost/QUICKENGV3/usuario/assets/img/january.jpg">
			<h2>January</h2>
		</div>
		<div class="box" onclick="showInfo('February', 'http://localhost/QUICKENGV3/usuario/assets/img/february.jpg', 'February is the second month of the year.')">
			<img src="http://localhost/QUICKENGV3/usuario/assets/img/february.jpg">
			<h2>February</h2>
		</div>
		<div class="box" onclick="showInfo('March', 'http://localhost/QUICKENGV3/usuario/assets/img/march.jpg', 'March is the third month of the year.')">
			<img src="http://localhost/QUICKENGV3/usuario/assets/img/march.jpg">
			<h2>March</h2>
		</div>
		<div class="box" onclick="showInfo('April', 'http://localhost/QUICKENGV3/usuario/assets/img/april.jpg', 'April is the fourth month of the year.')">
			<img src="http://localhost/QUICKENGV3/usuario/assets/img/april.jpg">
			<h2>April</h2>
		</div>
		<div class="box" onclick="showInfo('May', 'http://localhost/QUICKENGV3/usuario/assets/img/may.jpg', 'May is the fifth month of the year.')">
			<img src="http://localhost/QUICKENGV3/usuario/assets/img/may.jpg">
            <h2>May</h2>
		</div>
		<div class="box" onclick="showInfo('June', 'http://localhost/QUICKENGV3/usuario/assets/img/june.png', 'June is the sixth month of the year.')">
			<img src="http://localhost/QUICKENGV3/usuario/assets/img/june.png">
			<h2>June</h2>
		</div>
		<div class="box" onclick="showInfo('July', 'http://localhost/QUICKENGV3/usuario/assets/img/july.png', 'July is the seventh month of the year.')">
			<img src="http://localhost/QUICKENGV3/usuario/assets/img/july.png">
			<h2>July</h2>
		</div>
		<div class="box" onclick="showInfo('August', 'http://localhost/QUICKENGV3/usuario/assets/img/august.jpg', 'August is the eighth month of the year.')">
			<img src="http://localhost/QUICKENGV3/usuario/assets/img/august.jpg">
			<h2>August</h2>
		</div>
		<div class="box" onclick="showInfo('September', 'http://localhost/QUICKENGV3/usuario/assets/img/september.jpg', 'September is the ninth month of the year.')">
			<img src="http://localhost/QUICKENGV3/usuario/assets/img/september.jpg">
			<h2>September</h2>
		</div>
		<div class="box" onclick="showInfo('October', 'http://localhost/QUICKENGV3/usuario/assets/img/october.jpg', 'October is the tenth month of the year.')">
			<img src="http://localhost/QUICKENGV3/usuario/assets/img/october.jpg">
			<h2>October</h2>
		</div>
		<div class="box" onclick="showInfo('November', 'http://localhost/QUICKENGV3/usuario/assets/img/november.jpg', 'November is the eleventh month of the year.')">
			<img src="http://localhost/QUICKENGV3/usuario/assets/img/november.jpg">
			<h2>November</h2>
		</div>
		<div class="box" onclick="showInfo('December', 'http://localhost/QUICKENGV3/usuario/assets/img/december.jpg', 'December is the twelfth and last month of the year.')">
			<img src="http://localhost/QUICKENGV3/usuario/assets/img/december.jpg">
			<h2>December</h2>
		</div>
	</div>

    <div id="info">
	<h2 id="month"></h2>
	<img id="image">
	<p id="description"></p>
</div>

<script>
	function showInfo(month, imageSrc, description) {
		document.getElementById('month').innerHTML = month;
document.getElementById('image').src = imageSrc;
document.getElementById('description').innerHTML = description;
document.getElementById('info').style.display = 'block';
}
</script>

</body>
</html>
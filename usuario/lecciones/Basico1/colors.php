<!DOCTYPE html>
<html>
<head>
	<title>Colors in English</title>
	<style>
		.color-box {
			display: inline-block;
			width: 100px;
			height: 100px;
			margin: 10px;
			border: 2px solid black;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<h1>Colors in English</h1>
	<div class="color-box" style="background-color: red" onclick="showColor('red')"> </div>
	<div class="color-box" style="background-color: orange" onclick="showColor('orange')"> </div>
	<div class="color-box" style="background-color: yellow" onclick="showColor('yellow')"> </div>
	<div class="color-box" style="background-color: green" onclick="showColor('green')"> </div>
	<div class="color-box" style="background-color: blue" onclick="showColor('blue')"> </div>
	<div class="color-box" style="background-color: purple" onclick="showColor('purple')"> </div>
	<div class="color-box" style="background-color: pink" onclick="showColor('pink')"> </div>
	<div class="color-box" style="background-color: brown" onclick="showColor('brown')"> </div>
	<div class="color-box" style="background-color: gray" onclick="showColor('gray')"> </div>
	<div class="color-box" style="background-color: black" onclick="showColor('black')"> </div>
	<div class="color-box" style="background-color: white; border: 2px solid gray;" onclick="showColor('white')"> </div>

	<div id="color-info"></div>

	<script>
		function showColor(color) {
			var colorInfo = document.getElementById("color-info");
			colorInfo.innerHTML = "The color <strong>" + color + "</strong> in English is <strong>" + getColorName(color) + "</strong>.";
		}

		function getColorName(color) {
			switch(color) {
				case "red":
					return "red";
				case "orange":
					return "orange";
				case "yellow":
					return "yellow";
				case "green":
					return "green";
				case "blue":
					return "blue";
				case "purple":
					return "purple";
				case "pink":
					return "pink";
				case "brown":
					return "brown";
				case "gray":
					return "gray";
				case "black":
					return "black";
				case "white":
					return "white";
				default:
					return "";
			}
		}
	</script>
</body>
</html>

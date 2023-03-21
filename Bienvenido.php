<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="IMG/ICOFAV.png">
</head>
<body>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <hr>
  <header>
<div class="container">
  <!-- efectos -->
<div class="imglog">
<img src="img/logo.png" class="logo">
</div>
  <div class="pacman">
    <div class="pacman__mouth"></div>
    <div class="pacman__food"></div>
  </div>
  <div class="Texto">
  <h1>Practica inglés todos los días.</h1>
</div>
  <div class="spinner">
    <span>L</span>
    <span>O</span>
    <span>A</span>
    <span>D</span>
    <span>I</span>
    <span>N</span>
    <span>G</span>
  </div>
</div>
<br>
<br>
<br>
<br>
<hr>
<style>
  		body {
			background-color: #000;
			background-repeat: no-repeat;
			background-size: cover;
			margin: 0 auto;
			padding: 0;
		}
		
.container {

  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background-color: #000;
  background-repeat: no-repeat;
  position: flex;
  margin-top: 30px;
  margin-right: -170px;
  margin-left: 10px;
  margin-bottom: auto;



}

.imglog{
text-align: center;
}
.logo{
  width:300px;
  height: 100px;
  position: flex;
  margin-top: 30px;
 margin-right: 180px;
  margin-left: -10px;
  margin-bottom: auto;
}
.pacman {
  width: 100px;
  height: 100px;
  border-radius: 60%;
  background: #ffc300;
  position: relative;
  margin-top: 20px;
 margin-right: 160px;
  margin-left: -30px;
  margin-bottom: 15px;
}

.pacman__mouth {
  background: #000;
  position: absolute;
  width: 100%;
  height: 100%;
  clip-path: polygon(100% 74%, 44% 48%, 100% 21%);
  animation-name: eat;
  animation-duration: 0.8s;
  animation-iteration-count: infinite;
}

.pacman__food {
  position: absolute;
  width: 20px;
  height: 20px;
  background: #fff;
  border-radius: 50%;
  top: 40%;
  left: 120px;
  animation-name: food;
  animation-duration: 0.8s;
  animation-iteration-count: infinite;
}

@keyframes eat {
  0% {
    clip-path: polygon(100% 74%, 44% 48%, 100% 21%);
  }
  25% {
    clip-path: polygon(100% 60%, 44% 48%, 100% 40%);
  }
  50% {
    clip-path: polygon(100% 50%, 44% 48%, 100% 50%);
  }
  75% {
   clip-path: polygon(100% 59%, 44% 48%, 100% 35%);
  }
  100% {
   clip-path: polygon(100% 74%, 44% 48%, 100% 21%);
  }
}

@keyframes food {
  0% {
    transform: translateX(0);
     opacity: 1;
  }
  100% {
    transform: translateX(-50px);
    opacity: 0;
  }
}

.texto{
  text-align: center;
  color: #fff;
  font-size: 18px;
  font-family: monospace;
}
.texto h1{
  position: flex;
  margin-top: 10px;
 margin-right: 180px;
  margin-left: -10px;
  margin-bottom: auto;
  filter: drop-shadow(0 0 10px);

}
.spinner {
  height: 100px;
  width: 500px;
  font-size: 40px;
  font-weight: 600;
  font-family: monospace;
  letter-spacing: 1.5em;
  color: #fff;
  filter: drop-shadow(0 0 10px);
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 10px;
 margin-right: 90px;
  margin-left: -30px;
  margin-bottom: 15px;
}

.spinner span {
  animation: loading6454 1.75s ease infinite;
}

.spinner span:nth-child(2) {
  animation-delay: 0.25s;
}

.spinner span:nth-child(3) {
  animation-delay: 0.5s;
}

.spinner span:nth-child(4) {
  animation-delay: 0.75s;
}

.spinner span:nth-child(5) {
  animation-delay: 1s;
}

.spinner span:nth-child(6) {
  animation-delay: 1.25s;
}

.spinner span:nth-child(7) {
  animation-delay: 1.5s;
}

@keyframes loading6454 {
  0%, 100% {
    transform: translateY(0);
  }

  50% {
    transform: translateY(-10px);
  }
}
  </style>
  </div>
  </header>
  
  <!-- pantalla de carga para redirigir al usuario a la interfaz -->
<?php
   header("Refresh:2;url=usuario/index.PHP")
?>

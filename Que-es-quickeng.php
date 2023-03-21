<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Quickeng es una plataforma en línea para mejorar tus habilidades de comunicación en inglés. Únete a nuestra comunidad hoy y comienza a mejorar tu inglés de manera rápida y divertida.">
  <link rel="stylesheet" href="css/quees.css">
    <link rel="icon" type="image/png" sizes="32x32" href="IMG/ICOFAV.png">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <title>Qué es Quickeng</title>
</head>
<body>
  <header>
    <?php include 'menu.php'; ?>
  </header>
  <main>
    <br>
    <br>
    <br>
    <div class="banner">
      <div class="banner__content">
        <h1>¿Qué es Quickeng?</h1>
        <br>

        <p class="banner__text">En Quickeng, nos enfocamos en la práctica real y la aplicación del idioma en situaciones cotidianas para que puedas mejorar tus habilidades de comunicación y confianza en el uso del inglés. Además, nuestra plataforma fomenta una comunidad inclusiva y respetuosa donde los estudiantes pueden aprender y colaborar en un ambiente amigable y seguro.</p>
        <img src="img/quickeng.gif" alt="GIF de Quickeng" style="max-width: 100%;">
        <br>
        <br>
        <p class="banner__text">Ya sea que estés buscando mejorar tu gramática, tu pronunciación, tu vocabulario o tus habilidades de conversación, Quickeng te brinda las herramientas y recursos necesarios para alcanzar tus objetivos lingüísticos. ¡Únete a nuestra comunidad hoy y comienza a mejorar tu inglés de manera rápida y divertida!</p>
        <button class="register-button" onclick="window.location.href='registro.php'">Regístrate ahora</button>
      </div>
    </div>
    
    <div class="banner banner--left banner--dark">
  <div class="banner__container">
    <div class="banner__image banner__image--left">
      <img src="img/caracteristica.png" alt="Descripción de la imagen">
    </div>
    <div class="banner__features banner__features--right">
      <h2 class="banner__title">Características de Quickeng</h2>
      <p class="banner__text">Acceso gratuito a todos nuestros recursos y actividades</p>
      <p class="banner__text">Actividades interactivas diseñadas para mejorar tus habilidades de lectura, escritura, habla y escucha en inglés</p>
      <p class="banner__text">Lecciones basadas en situaciones cotidianas y casos de la vida real</p>
      <p class="banner__text">Comunidad amigable y respetuosa donde puedes colaborar con otros estudiantes</p>
    </div>
  </div>
</div>
</main>

<footer>
  <?php include('footer.php') ?>
</footer>
</body>
</html>
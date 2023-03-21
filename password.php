<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperar contraseña</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h2>Recuperar contraseña</h2>
    <form action="#" method="POST">
      <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <button type="submit">Enviar enlace de recuperación</button>
      </div>
    </form>
    <div class="links">
      <a href="#">Volver al inicio</a>
      <a href="#">Registrarse</a>
    </div>
  </div>
</body>
<style>
  body {
  font-family: 'Ubuntu', sans-serif;
  background-attachment: fixed;
  background-position: center center;
}

.container {
  margin: 0 auto;
  margin-top: 100px;
  padding: 40px;
  width: 300px;
  background-color: #fff;
  box-shadow: 0 0 5px rgba(0,0,0,0.3);
  text-align: center;
}

.container h2 {
  margin-bottom: 20px;
  color: #333;
}

.container input[type="email"] {
  width: 100%;
  height: 40px;
  margin-bottom: 20px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

.container input[type="submit"] {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.container input[type="submit"]:hover {
  background-color: #555;
}

.container .links {
  margin-top: 20px;
  display: flex;
  justify-content: space-between;
}

.container .links a {
  color: #333;
  text-decoration: none;
}

</style>
</html>

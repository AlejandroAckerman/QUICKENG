<?php
// Iniciar la sesión y la conexión a bd
include 'conexion.php';

// Recoger datos del formulario
if(isset($_POST)){
				
	// Recoger datos del formulario
	$email = trim($_POST['email']);
	$password = $_POST['password'];
	
	// Consulta para comprobar las credenciales del usuario
	$sql = "SELECT * FROM usuario WHERE email_usu = '$email'";
	$login = mysqli_query($db, $sql);
	
	if($login && mysqli_num_rows($login) == 1){
		$usuario = mysqli_fetch_assoc($login);
		
		// Comprobar la contraseña
		
		if($usuario['contraseña_usu']==$password){
			// Utilizar una sesión para guardar los datos del usuario logueado
			$_SESSION['usuario'] = $usuario;
			header('Location: Bienvenido.php');
		} else {
			// Si algo falla enviar una sesión con el fallo
			$_SESSION['error_login'] = "Login incorrecto!!";
			echo "<script>alert('Credenciales incorrectas');</script>";
			header('Location: credencialesinco.php');
		}
	} else {
		// mensaje de error
		$_SESSION['error_login'] = "Login incorrecto!!";
		echo "<script>alert('Credenciales incorrectas');</script>";
		header('Location: credencialesinco.php');
		
	}
}
// Redirigir al index.php
?>

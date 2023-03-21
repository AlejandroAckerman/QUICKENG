<?php
// Conexión
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'quikeng';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);
$utf8 = "SET NAMES 'utf8'";
mysqli_query($db, $utf8);

// Iniciar la sesión
if(!isset($_SESSION)){
    session_start();
}

if ($db){
echo "Conectado";
}
?>
<link rel="stylesheet" type="text/css" href="../css/estilos2.css" />
<?php
session_start();
?>
<?php
echo '<h1> Bienvenido</h1 ';
if (isset($_SESSION['k_username'])) {
	echo '<b>'.$_SESSION['k_username'].'</b>.';
	echo '<p><a href="logout.php">Logout</a></p>';
}else{
	echo '<p><a href="usuario.controller.php?vistausuario=x&accion=login">Login</a></p>
	 <p><a href="usuario.controller.php?vistausuario=x&accion=registrar">Registrar</a></p>';
}
?>

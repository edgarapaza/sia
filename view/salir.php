<?php
	if (!isset($_SESSION)) {
		session_start();
	}

	session_destroy();
	session_unset();
	
 if (isset($_SESSION['log_usu']['autenticado'])) {
 	$_SESSION['log_usu']['autenticado'] = NULL;
 	unset($_SESSION['log_usu']['autenticado']);
 	unset($_SESSION);
 	header("Location:index.php");
 }
?>
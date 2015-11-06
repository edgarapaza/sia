<?php
	if (!isset($_SESSION)) {
		session_start();
	}

/*echo "<pre>";
print_r($_SESSION);
echo "</pre>";*/
 if (isset($_SESSION['log_usu']['autenticado'])) {
 	$_SESSION['log_usu']['autenticado'] = NULL;
 	unset($_SESSION['log_usu']['autenticado']);
 	unset($_SESSION);
 	header("Location:index.php");
 }
?>
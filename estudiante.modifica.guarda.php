<?php
	if (!isset($_SESSION)) {
		session_start();
	}

	require_once("inc/mysql.php");

	if (isset($_SESSION['log_usu']['autenticado']) && $_SESSION['log_usu']['autenticado']) {
	}else{
		header("Location:index.php");
	}

	$sSQL	= 	"UPDATE usuarios SET "
			.	"paterno = '{$_POST['txt-paterno']}', "
			.	"materno = '{$_POST['txt-materno']}', "
			.	"nombres = '{$_POST['txt-nombres']}', "
			.	"usuario = '{$_POST['txt-usuario']}', "
			.	"clave = '{$_POST['txt-clave']}' "
			.	"WHERE usuario_id = {$_POST['txt-id']} ";
	if ($oUsuario = mysqli($sSQL)) {
		header("Location:listado.php");
	}
	

?>
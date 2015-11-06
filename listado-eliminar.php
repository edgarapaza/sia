<?php
	if (!isset($_SESSION)) {
		session_start();
	}

	require_once("inc/mysql.php");

	if (isset($_SESSION['log_usu']['autenticado']) && $_SESSION['log_usu']['autenticado']) {
		$paterno = $_POST['txt-paterno'];
		$materno = $_POST['txt-materno'];
		$nombres = $_POST['txt-nombres'];
		$usuario = $_POST['txt-usuario'];
		$clave = $_POST['txt-clave'];

		$sSQL	= 	"INSERT INTO usuarios SET "
				.	"paterno = '{$paterno}', "
				.	"materno = '{$materno}', "
				.	"nombres = '{$nombres}', "
				.	"usuario = '{$usuario}', "
				.	"clave = '{$clave}' ";
		//echo $sSQL;
		if ($oUsuario	=	mysqli($sSQL)) {
			$_SESSION['mensaje'] = "Usuario eliminado correctamente";
			header("Location:listado.php");
		}else{
			$_SESSION['mensaje'] = "Error al elminar usuario";
			header("Location:listado.php");
		}
	}else{
		header("Location:error.php");
	}

?>
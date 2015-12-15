<?php
	if (!isset($_SESSION)) {
		session_start();
	}

	require_once("inc/mysql.php");

	if (isset($_SESSION['log_usu']['autenticado']) && $_SESSION['log_usu']['autenticado']) {
		
		//$fecha = $_POST['txt-fecha'];
		//$indice = $_POST['txt-nombres'];
		//$usuario = $_POST['txt-usuario'];
		//$clave = $_POST['txt-clave'];
		
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";

		//$sSQL	= 	"INSERT INTO usuarios SET "
		//		.	"paterno = '{$paterno}', "
		//		.	"materno = '{$materno}', "
		//		.	"nombres = '{$nombres}', "
		//		.	"usuario = '{$usuario}', "
		//		.	"clave = '{$clave}' ";
		//echo $sSQL;
		//if ($oUsuario	=	mysqli($sSQL)) {
		//	$_SESSION['mensaje'] = "Usuario guardado correctamente";
		//	header("Location:nuevo.php");
	//	}else{
	//		$_SESSION['mensaje'] = "Error el insertar usuario";
			//header("Location:nuevoProyecto.php");
	//	}
	}else{
		header("Location:error.php");
	}

?>
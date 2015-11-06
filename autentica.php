<?php
	if (!isset($_SESSION)) {
		session_start();
	}

	require_once("inc/mysql.php");

	$_SESSION['log_usu']['log_usu'] = $usuario = $_POST['txt-usuario'];
	$clave = $_POST['txt-clave'];
	$boton = $_POST['btn-aceptar'];

	/*
	echo $usuario;
	echo $clave;
	echo $boton;
	*/
	
	//$sConsulta	=	"SELECT NOW() as fechita";
	//$oFecha	=	mysqli($sConsulta);

	//$aFecha = $oFecha->fetch_assoc();
	//print_r($aFecha);

	$sConsulta	=	"SELECT u.* "
				.	"FROM usuarios u "
				.	"WHERE u.log_usu = '{$usuario}'";
	if ($oUsuario	=	mysqli($sConsulta)) {

		//Almacenamos la cantidad de resultados (rows)
		$nUsuario	=	$oUsuario->num_rows;
		
		//Cuando solo existe un usuario
		if ($nUsuario == 1) {
			$aUsuario = $oUsuario->fetch_assoc();
			if ($aUsuario['psw_usu']==$clave) {
				$_SESSION['log_usu']['nombre'] = TRUE;				
				$_SESSION['log_usu']['autenticado'] = TRUE;				
				$_SESSION['log_usu']['id'] = $aUsuario['cod_usu'];
				header("Location:bienvenido.php");
			}
			else
			{
?>
				<div class="alert alert-error">
					<p><strong>Error!!!</strong>Contraseña incorrecta</p>
				</div>
<?php

			}
		}
		else
		{
?>
			<div class="alert alert-error">
				<p><strong>Error!!!</strong>No es posible conectarse a la BBDD.</p>
			</div>
<?php
		}
	}else{
?>
		<div class="alert alert-error">
			<p><strong>Error!!!</strong> No fue posible realizar la autenticación</p>
		</div>
<?php
	}


	


?>
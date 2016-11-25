<?php
	session_start();

require_once ("../inc/Conection.php");
$conn = new Conection();
$link = $conn->Conection();

$usuario = "indices";
$clave   = "indices";

$_SESSION['log_usu']['log_usu'] = $usuario = $_POST['txt-usuario'];
$clave                          = $_POST['txt-clave'];
$boton                          = $_POST['btn-aceptar'];

$sql = sprintf("SELECT cod_usu, psw_usu FROM usuarios WHERE log_usu = '%s' AND psw_usu='%s'", $usuario, $clave);

$data = $link->query($sql);
$fila = $data->fetch_array();
echo $fila[0];

	//Almacenamos la cantidad de resultados (rows)
	$nUsuario = $data->num_rows;
	
	//Cuando solo existe un usuario
	if ($nUsuario == 1) 
	{
		
		if ($fila[1] == $clave)
		{
			$_SESSION['log_usu']['nombre']      = TRUE;
			$_SESSION['log_usu']['autenticado'] = TRUE;
			$_SESSION['log_usu']['id']          = $fila[0];
			header("Location:../view/bienvenido.php");
		}

	}
	if ($nUsuario == 0) 
	{
		$msg = "El usuario o contraseña son incorrectos.  Vuelva a intentarlo";
		header("Location: ../index.php?msg=".$msg);
	}


?>
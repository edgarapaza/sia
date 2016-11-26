<?php 
session_start();

if (isset($_SESSION['log_usu']['autenticado']) && $_SESSION['log_usu']['autenticado'])
{
	require("cabecera.php");
	require("menu.php");
	//echo "Session Proyecto: ".$_SESSION['proyecto'];
	$msg = $_REQUEST['msg'];

	if($msg == "Duplicado"){
	?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">	
				<h3>Sistema de Verificacion</h3>
				<hr>
				<h2>El dato se encuentra Registrado con la misma información.</h2>
				<a href="ingresoIndice.php?codProy=<?php echo $_SESSION['proyecto']; ?>" class="btn btn-primary">Regresar a la Ventana anterior</a>
			</div>
		</div>
	</div>


	<?php
		}

	if($msg == "Nuevo"){
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">	
				<h3>Sistema de Verificacion</h3>
				<hr>
				<h2>El registro de guardó de manera Satisfactoria.</h2>
				<a href="ingresoIndice.php?codProy=<?php echo $_SESSION['proyecto']; ?>" class="btn btn-primary">Ingresar Nuevo Registro</a>
				<a href="buscarIndice.php" class="btn btn-success">Buscar</a>
			</div>
		</div>
	</div>
	<?php
	}
}
 ?>
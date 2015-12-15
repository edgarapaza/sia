<?php
	require("cabecera.php");
	require_once("inc/mysql.php");

	if (isset($_SESSION['log_usu']['autenticado']) && $_SESSION['log_usu']['autenticado']) {
	}else{
		header("Location:index.php");
	}

	require("menu.php");
?>

	<div class="container">

		<div class="row">
			<div class="col-md-12">

				<h3>Modificar Usuario</h3>
<?php
	if (isset($_SESSION['mensaje']) AND $_SESSION['mensaje'] != '') {
?>
				<div class="alert alert-info">
					<?php echo $_SESSION['mensaje']; unset($_SESSION['mensaje']);?>
				</div>
<?php
	}


	$sSQL	= 	"SELECT u.* "
			.	"FROM usuarios u "
			.	"WHERE usuario_id = {$_GET['id']} ";

	$oUsuario = mysqli($sSQL);
	$aUsuario = $oUsuario->fetch_assoc();

?>				

				<form class="form-horizontal" method='post' name='fregistro' id='fregistro' action='estudiante.modifica.guarda.php' role='form'>
					<input type="hidden" id="txt-id" name="txt-id" value = "<?php echo $aUsuario['usuario_id']?>" >
					<div class="form-group">
						<label for="txt-paterno" class="col-sm-2 control-label">Paterno :</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="txt-paterno" name="txt-paterno"  placeholder="Apellido Paterno" maxlength="25" value = "<?php echo $aUsuario['paterno']?>" autofocus>
						</div>
					</div>

					<div class="form-group">
						<label for="txt-materno" class="col-sm-2 control-label">Materno :</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="txt-materno" name="txt-materno" placeholder="Apellido Materno" maxlength="25" value = "<?php echo $aUsuario['materno']?>" >
						</div>
					</div>

					<div class="form-group">
						<label for="txt-nombres" class="col-sm-2 control-label">Nombres :</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="txt-nombres" name="txt-nombres" placeholder="Nombres" maxlength="35" value = "<?php echo $aUsuario['nombres']?>" >
						</div>
					</div>

					<div class="form-group">
						<label for="txt-usuario" class="col-sm-2 control-label">Usuario :</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txt-usuario" name="txt-usuario" placeholder="Usuario" maxlength="26" value = "<?php echo $aUsuario['usuario']?>" >
						</div>
					</div>

					<div class="form-group">
						<label for="txt-clave" class="col-sm-2 control-label">Clave :</label>
						<div class="col-sm-3">
							<input type="password" class="form-control" id="txt-clave" name="txt-clave"  placeholder="Clave" maxlength="16" value = "<?php echo $aUsuario['clave']?>" >
						</div>
					</div>

					<div class="form-group">
						<label for="txt-clave" class="col-sm-2 control-label">Repetir Clave :</label>
						<div class="col-sm-3">
							<input type="password" class="form-control" id="txt-clave-2" name="txt-clave-2"  placeholder="Repetir Clave" maxlength="16" value = "<?php echo $aUsuario['clave']?>" >
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-6 ">
							<button type="submit" class="btn btn-primary">Guardar Cambios</button>
						</div>
					</div>


				</form>

				
			</div>
		</div>

	</div>

<?php
	require("pie.php");
?>


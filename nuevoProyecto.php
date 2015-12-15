<?php
	include ("inc/mysql.php");
	require("cabecera.php");
	include ("Notarios.php");

	if (isset($_SESSION['log_usu']['autenticado']) && $_SESSION['log_usu']['autenticado']) {
	}else{
		header("Location:index.php");
	}

	require("menu.php");
	

     $notarios = new Notarios();
     $dat = $notarios->Notarios();


?>

	<div class="container">

		<div class="row">
			<div class="col-md-12">

				<center><h3>Registro de Nuevo Proyecto</h3></center>
<?php
	if (isset($_SESSION['mensaje']) AND $_SESSION['mensaje'] != '') {
?>
				<div class="alert alert-info">
					<?php echo $_SESSION['mensaje']; unset($_SESSION['mensaje']);?>
				</div>
<?php
	}
?>				

				<form class="form-horizontal" method='post' name='fregistro' id='fregistro' action='nuevo-proyecto-verifica.php' role='form'>

					<div class="form-group">
						<label for="txt-notario" class="col-sm-2 control-label">Notario :</label>
						<div class="col-sm-6">
							<select class="form-control" id="txtNotario" name="txtNotario" >
								<option value="0">SELECCIONE NOTARIO</option>
									<?php 
									

									while ($row = $dat->fetch_assoc()) { ?>
										<option value="<?php echo $row['cod_not']; ?>">
											<?php echo $row['notario']; ?>
										</option>
									<?php } ?>	

							</select>


							

						</div>
					</div>

					<div class="form-group">
						<label for="txt-fec_ini" class="col-sm-2 control-label">Fecha Inicio :</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="txt-fec_ini" name="txt-fec_ini" placeholder="<?php echo $fecha = date('Y-m-d');?>" maxlength="10">Formato: Año-Mes-Día
						</div>
					</div>

					<div class="form-group">
						<label for="txt-num_ind" class="col-sm-2 control-label">Numero de Indice :</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="txt-num_ind" name="txt-num_ind" placeholder="350" maxlength="35">
						</div>
					</div>

					

					

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-6 ">
							<button type="submit" class="btn btn-primary">Crear Proyecto</button>
						</div>
					</div>


				</form>

				
			</div>
		</div>

	</div>

<?php
	require("pie.php");
?>


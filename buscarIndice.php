<?php
	include ("inc/mysql.php");
	require("cabecera.php");
	include ("Notarios.php");

	if (isset($_SESSION['log_usu']['autenticado']) && $_SESSION['log_usu']['autenticado']) {
	}else{
		header("Location:index.php");
	}

	require("menu.php");
	

	$consulta='SELECT cod_not,nom_not,pat_not,mat_not FROM notarios';
	$result=mysqli($consulta);
	

$notarios = new Notarios();
$dat = $notarios->ConsultaNotarios();



?>

	<div class="container">

		<div class="row">
			<div class="col-md-12">

				<center><h3>Buscador de Índices</h3></center>
<?php
	if (isset($_SESSION['mensaje']) AND $_SESSION['mensaje'] != '') {
?>
				<div class="alert alert-info">
					<?php echo $_SESSION['mensaje']; unset($_SESSION['mensaje']);?>
				</div>
<?php
	}
?>				

				<form class="form-horizontal" action='buscarTodo.php' method='post' name='fregistro' id='fregistro' role='form'>
					<div class="form-group">
						<label for="txtTodo" class="col-sm-2 control-label">Buscar Todo :</label>
						<div class="col-sm-2">
							<button type="submit" name="todo" value="todo" href="#listaIndice.php"  class="btn btn-primary" > <span class="glyphicon glyphicon-search"></span> Buscar Todo</button>
						</div>
					</div>
				</form>

				<form class="form-horizontal" action='buscarNotario.php' method='post' name='fregistro' id='fregistro' role='form'>
					<div class="form-group">
						<label for="txtNotario" class="col-sm-2 control-label">Buscar por Notario :</label>
						<div class="col-sm-6">
							<select class="form-control" id="txtNotario" name="txtNotario" >
								<option value="0">SELECCIONE NOTARIO</option>
									<?php 
									

									while ($row = $dat->fetch_assoc()) { ?>
										<option value="<?php echo $row['codNotario']; ?>">
										<?php 
											$codigo = $row['codNotario'];
											$dato = $notarios->NombreNotario($codigo);
											$nombre = $dato->fetch_assoc();
											echo $nombre['notario'];
										?></option>

									<?php } ?>	

							</select>

						</div>
						<div class="col-sm-2">
							<button type="submit" name="notario" value="notario" class="btn btn-primary" > <span class="glyphicon glyphicon-search"></span> Buscar Por Notario</button>
						</div>
					</div>	
				</form>

				<form class="form-horizontal" action='buscarOtorgante.php' method='post' name='fregistro' id='fregistro' role='form'>
					<div class="form-group">
						<label for="txtOtorgante" class="col-sm-2 control-label">Buscar por Otorgante :</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="txtOtorgante" name="txtOtorgante" placeholder="Ingrese el Otorgante">
						</div>
						<div class="col-sm-2">
							<button type="submit" name="otorgante" value="otorgante" class="btn btn-primary" > <span class="glyphicon glyphicon-search"></span> Buscar Por Otorgante</button>
						</div>
					</div>
				</form>

				<form class="form-horizontal" action='buscarFavorecido.php' method='post' name='fregistro' id='fregistro' role='form'>
					<div class="form-group">
						<label for="txtFavorecido" class="col-sm-2 control-label">Buscar por Favorecido :</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="txtFavorecido" name="txtFavorecido" placeholder="Ingrese el Favorecido">
						</div>
						<div class="col-sm-2">
							<button type="submit" name="favorecido" value="favorecido" class="btn btn-primary" > <span class="glyphicon glyphicon-search"></span> Buscar Por Favorecido</button>
						</div>
					</div>
				</form>

				<form class="form-horizontal" action='buscarFecha.php' method='post' name='fregistro' id='fregistro' role='form'>
					<div class="form-group">
						<label for="txtFecha" class="col-sm-2 control-label">Buscar por Fecha :</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="txtFecha" name="txtFecha" placeholder="<?php echo $fecha = date('Y-m-d');?>" maxlength="10">Formato: Año-Mes-Día
						</div>
						<div class="col-sm-2">
							<button type="submit" name="fecha" value="fecha" class="btn btn-primary" > <span class="glyphicon glyphicon-search"></span> Buscar Por Fecha</button>
						</div>
					</div>
				</form>

				<form class="form-horizontal" action='buscarSerie.php' method='post' name='fregistro' id='fregistro' role='form'>
					<div class="form-group">
						<label for="txtSerie" class="col-sm-2 control-label">Buscar por Serie :</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="txtSerie" name="txtSerie" placeholder="Ingrese la Serie">
						</div>
						<div class="col-sm-2">
							<button type="submit" name="serie" value="serie" class="btn btn-primary" > <span class="glyphicon glyphicon-search"></span> Buscar Por Serie</button>
						</div>
					</div>
				</form>

				<form class="form-horizontal" action='buscarBien.php' method='post' name='fregistro' id='fregistro' role='form'>
					<div class="form-group">
						<label for="txtBien" class="col-sm-2 control-label">Buscar por Nombre del Bien :</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="txtBien" name="txtBien" placeholder="Ingrese el Nombre del Bien">
						</div>
						<div class="col-sm-2">
							<button type="submit" name="bien" value="bien" class="btn btn-primary" > <span class="glyphicon glyphicon-search"></span> Buscar Por Nombre del Bien</button>
						</div>
					</div>
				</form>

					</div>
			</div>
		</div>

	

<?php
	require("pie.php");
?>


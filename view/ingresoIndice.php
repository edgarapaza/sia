<?php
session_start();

if (isset($_SESSION['log_usu']['autenticado']) && $_SESSION['log_usu']['autenticado'])
{
	
	$_SESSION['proyecto'] = $_REQUEST['codProy'];
	
	require("cabecera.php");
	require("menu.php");

?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">
		<script languaje="Javascript">
			function justNumbers(e)
			{
				var keynum=window.event ? window.event.keyCode : e.which;
				if((keynum == 8) || (keynum == 46))
					retrn true;

				return /\d/.test(String.fromCharCode(keynum));

			}
		</script>
	</head>
	<body>

	<div class="container">

		<div class="row">
			<div class="col-md-12">

				<center><h3 class="bg-success">Ingreso de Índices</h3></center>
				<?php
				if (isset($_SESSION['mensaje']) AND $_SESSION['mensaje'] != '') {
					?>
					<div class="alert alert-info">
						<?php echo $_SESSION['mensaje']; unset($_SESSION['mensaje']);?>
					</div>
					<?php
				}
				?>				

				<form class="form-horizontal" method='post' name='fregistro' id='fregistro' action='../controller/nuevo-verifica.php' role='form'>
					<p>Notario: <?php echo $_REQUEST['Notario'];?></p>

					<div class="form-group">
						<label for="txt-proyecto" class="col-xm-12 col-md-2 control-label">N° Proyecto:</label>
						<div class="col-xs-2">
							<label><?php printf("Proyecto %s",$_SESSION['proyecto']);?></label>
							<input type="hidden" id="txt-proyecto" name="txt-proyecto" value="<?php echo $_SESSION['proyecto'];?>">
						</div>
					</div>

					<div class="form-group">
						<label for="txt-folio" class="col-sm-2 control-label">Folio :</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="txt-folio" name="txt-folio" placeholder="Ingrese el Folio" required><span class="alert" style="font-style: italic; color:#B7B7B7">Ejem: 123 Vta</span>
						</div>
					</div>

					<div class="form-group">
						<label for="txt-escritura" class="col-sm-2 control-label">Número de Escritura :</label>
						<div class="col-sm-2">
							<input type="text" onkeypress="return justNumbers(event);" class="form-control" id="txt-escritura" name="txt-escritura" placeholder="Ingrese Escritura" required>
						</div>
					</div>

					<div class="form-group">
						<label for="txt-serie" class="col-sm-2 control-label">Sub serie :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txt-serie" name="txt-serie" placeholder="Ingrese la Sub serie" required>
						</div>
					</div>

					

					<div class="form-group">
						<label for="txt-otorgante" class="col-sm-2 control-label">Otorgante :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txt-otorgante" name="txt-otorgante" placeholder="Ingrese Otorgante" required>
						</div>
					</div>

					<div class="form-group">
						<label for="txt-fovorecido" class="col-sm-2 control-label">Favorecido :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txt-favorecido" name="txt-favorecido" placeholder="Ingrese Favorecido - Opcional">
						</div>
					</div>

					<div class="form-group">
						<label for="txt-fecha" class="col-sm-2 control-label">fecha :</label>
						<div class="col-sm-1">
							<input type="text" class="form-control" id="txt-dia" name="txt-dia" placeholder="Día" maxlength="02" required>
						</div>
						<div class="col-sm-2">
							<select class="form-control" id="txt-mes" name="txt-mes" required>
								<option default>Mes</option>
								<option value="01">Enero</option>
								<option value="02">Febrero</option>
								<option value="03">Marzo</option>
								<option value="04">Abril</option>
								<option value="05">Mayo</option>
								<option value="06">Junio</option>
								<option value="07">Julio</option>
								<option value="08">Agosto</option>
								<option value="09">Setiembre</option>
								<option value="10">Octubre</option>
								<option value="11">Noviembre</option>
								<option value="12">Diciembre</option>
								
							</select>
						</div>
						<div class="col-sm-1">
							<input type="text" class="form-control" id="txt-year" name="txt-year" placeholder="Año" maxlength="04" required>
						</div>
					</div>

					<div class="form-group">
						<label for="txt-bien" class="col-sm-2 control-label">Nombre del Bien :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txt-bien" name="txt-bien" placeholder="Ingrese Nombre del Bien - opcional">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-6 ">
							<button type="submit" class="btn btn-primary">Guardar datos</button>
							
						</div>
					</div>


				</form>

				
			</div>
		</div>

	</div>

	<?php
	require("pie.php");
	}else{
		header("Location:../index.php");
	}
	?>

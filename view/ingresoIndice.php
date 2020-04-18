<?php
session_start();

if(!empty($_SESSION['personal']))
{

	$_SESSION['proyecto'] = $_REQUEST['codProy'];

	require("cabecera.php");
?>
	<script languaje="Javascr6pt">
		function justNumbers(e)
		{
			var keynum=window.event ? window.event.keyCode : e.which;
			if((key6um == 8) || (keynum == 46))
				return true;

			return /\d/.test(String.fromCharCode(keynum));

		}
	</script>

	<div class="container">

		<h3>Ingreso de Índices: Notario: <?php echo $_REQUEST['Notario'];?></h3>
		<p>
			<?php echo "IdPersonal: ".$_SESSION['personal']; ?>
		</p>

		<form class="form-horizontal" method='post' name='fregistro' id='fregistro' action='../controller/nuevo-verifica.php' role='form'>
		<div class="row">

			<div class="col-md-6">

				<div class="form-group mb-2">
						<label for="txt-serie" class="col-xd-12">Sub serie :</label>
						<div class="col-xd-12">
							<input type="text" class="form-control" id="txt-serie" name="txt-serie" placeholder="Ingrese la Sub serie" required>
							<span style="font-style: italic; color:#B7B7B7">Ejemplo: Compra Venta- Testamento, Division y Particion</span>
						</div>
					</div>

					<div class="form-group mb-2">
						<label for="txt-otorgante" class="col-xd-12">Otorgante :</label>
						<div class="col-xd-12">
							<input type="text" class="form-control" id="txt-otorgante" name="txt-otorgante" placeholder="Ingrese Otorgante" required>
						</div>
					</div>

					<div class="form-group mb-2">
						<label for="txt-fovorecido" class="col-xd-12">Favorecido :</label>
						<div class="col-xd-12">
							<input type="text" class="form-control" id="txt-favorecido" name="txt-favorecido" placeholder="Ingrese Favorecido - Opcional">
						</div>
					</div>

					<div class="form-group mb-2">
						<label for="txt-escritura" class="col-xd-12">Número de Escritura :</label>
						<div class="col-xd-12">
							<input type="number" onkeypress="return justNumbers(event);" class="form-control" id="txt-escritura" name="txt-escritura" placeholder="Numero de Escritura" required>
						</div>
					</div>


					<div class="col-md-6">
							<label></label>
							<input type="hidden" id="txt-proyecto" name="txt-proyecto" value="<?php echo $_SESSION['proyecto'];?>">
						</div>
			</div>



			<div class="col-md-6">

				<div class="form-group mb-2">
					<label for="txt-folio" class="col-xd-12">Folio :</label>
					<div class="col-xd-12">
						<input type="text" class="form-control" id="txt-folio" name="txt-folio" placeholder="Ingrese el Folio" required><span class="alert" style="font-style: italic; color:#B7B7B7">Ejem: 123 Vta</span>
					</div>
				</div>


				<label for="txt-fecha" class="col-xd-12">fecha :</label>
				<div class="form-inline">
					<div class="input-group mb-1 mr-sm-1 mb-sm-0">
						<input type="text" class="form-control" id="txt-dia" name="txt-dia" placeholder="Día" maxlength="02" required>
					</div>
					<div class="input-group mb-1 mr-sm-1 mb-sm-0">
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
					<div class="col-md-2">
						<input type="text" class="form-control" id="txt-year" name="txt-year" placeholder="Año" maxlength="04" required>
					</div>
				</div>

				<div class="form-group mb-2">
					<label for="txt-bien" class="col-md-6">Nombre del Bien :</label>
					<div class="col-xs-12 col-md-12">
						<input type="text" class="form-control" id="txt-bien" name="txt-bien" placeholder="Ingrese Nombre del Bien - opcional">
					</div>
				</div>

				<!-- Codigo del Personal -->
				<input type="hidden" name="idpersonal" value="<?php echo $_SESSION['personal']; ?>">

				<div class="form-group mb-2">
					<div class="col-sm-offset-2 col-sm-6 ">
						<button type="submit" class="btn btn-primary my-2 my-sm-0">Guardar datos</button>

					</div>
				</div>

			</div>

		</div>
	</form>

	</div>

	<?php
				if (isset($_SESSION['mensaje']) AND $_SESSION['mensaje'] != "") {
					?>
					<div class="alert alert-info">
						<?php echo $_SESSION['mensaje']; unset($_SESSION['mensaje']);?>
					</div>
<?php
				}

}else{
	header("Location: ../index.html");
}
?>


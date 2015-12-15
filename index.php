<?php
require ("cabecera.php");
$msg = $_REQUEST['msg'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">


		<div class="row">
		<div class="header">
		<div class="col-md-offset-4 col-md-4">
                        <div class="logo"><img src="images/sia.png" width="220" height="60"></div></div>
        </div>
			<div class="col-md-offset-4 col-md-4">

				<h3>Identificacion de Usuario</h3>


<?php echo $msg;?>
<form action="autentica.php" method="post" id="form-autentica" name="form-autentica">
					<div class="form-group">
						<label for="txt-usuario">Usuario :</label>
						<input type="text" class="form-control" id="txt-usuario" name="txt-usuario" placeholder="Ingrese Usuario" maxlength="10" required>
					</div>
					<div class="form-group">
						<label for="txt-clave">Clave :</label>
						<input type="password" class="form-control" id="txt-clave" name="txt-clave" placeholder="Ingrese Clave" maxlength="10" required>
					</div>
					<input type="submit" name="btn-aceptar"class="btn btn-primary" value="Entrar"> <a class="btn btn-danger" href="../">Cancelar</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

<?php
require ("pie.php");
?>


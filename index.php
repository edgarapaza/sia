<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="assets/ico/favicon.ico">

		<title>.: SISTEMA DE INDICES ARP :.</title>

		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="starter-template.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<style type="text/css">
			body{
				padding-top: 60px;
			}
		</style>
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
						<div class="col-md-6">
							<input type="submit" name="btn-aceptar" class="btn btn-primary" value="Entrar"> 
						</div>

					</form>
				</div>
			</div>
		</div>
	</body>
	</html>

	<?php
	require ("pie.php");
	?>


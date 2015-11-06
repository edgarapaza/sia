<?php
	require("cabecera.php");

	if (isset($_SESSION['log_usu']['autenticado']) && $_SESSION['log_usu']['autenticado']) {
	}else{
		header("Location:index.php");
	}

	require("menu.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body  bgcolor="#0087FF">
<div class="container">

		<div class="row">
			<div class="col-md-offset-6 col-md-5">

				<div class="alert alert-info">
					<h3>***** BIENVENIDO AL SIA *****</h3>
					<?php
						echo  $_SESSION['log_usu']['log_usu'];
					?>
				</div>
				
			</div>
		</div>

	</div>

</body>
</html>
	

<?php
	require("pie.php");
?>


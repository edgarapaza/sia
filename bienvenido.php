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
	<title>SIA</title>
	<style type="text/css">
		span{
			color: red;
			font-weight: bold;
		}
		em{
			font-size: 14px;
		}
	</style>
</head>
<body bgcolor="#0087FF">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-info">
					<h3>BIENVENIDO AL <span>SIA</span></h3>
					<em><span>S</span>istema de <span>I</span>ndices del <span>A</span>rchivo Regional de Puno</em>
					<?php
					echo $_SESSION['log_usu']['log_usu'];
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


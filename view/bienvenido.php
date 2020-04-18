<?php
session_start();
require_once("../model/personal.model.php");

if(!empty($_SESSION['personal']))
{
	require("cabecera.php");


		$personal = new Personal();
		$data = $personal->getPersonal($_SESSION['personal']);

?>

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
					<p><?php printf("Bienvenido(a): %s", $data['trabajador']); 	?></p>
					<em><span>S</span>istema de <span>I</span>ndices del <span>A</span>rchivo Regional de Puno</em>

				</div>
			</div>
			<div class="col-md-12">

				<h3>Ingresar Datos del Notario: Luis Jimenez Vargas de HUANCANE</h3>

				<br>
				<br>
				<a href="listado.php" class="btn btn-primary">Ingresar Datos</a>

			</div>

		</div>

	</div>

</body>
</html>
<?php
}else{
	header("Location: ../index.html");
}
?>
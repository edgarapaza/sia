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
    .rojo{
      font-weight: bold;
      color: red;
    }
	</style>
</head>
<body bgcolor="#0087FF">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-info">
					<h3>BIENVENIDO AL <span>SIA</span></h3>
					<h3><?php printf("Bienvenido(a): %s", $data['trabajador']); 	?></h3>

				</div>
			</div>
			<div class="col-md-12">
        <h2>Comunicado</h2>
        <h4>Lamentamos los inconvenientes del dia de hoy martes 25 de agosto de 2020, debido a que se han realizado cambios
          en el sistema, motivo por el cual se han agregado nuevos campos a la base de datos, y cambiado la vista de Reportes.
          Esto ha generado que algunos codigos hayan provocado errores, pero la información no ha sufrido ningun daño.

        </h4>

        <h4>Rogamos su comprensión, e informarles que el <span class="rojo">Sistema ya se ha restablecido</span> y se han realizado las pruebas correspondientes, y
          ya no existen problemas, por lo que se puede continuar con el trabajo remoto.
        </h4>
        <h3 class="alert alert-success">Ya tenemos 16,205 Escrituras (Luis Jimenez) hasta la fecha
          y del nuevo notario (Jorge Cuentas) 417 Escrituras ingresadas.  Gracias por su trabajo.</h3>

				<a href="listado.php" class="btn btn-success btn-lg">Ingresar Datos</a>

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

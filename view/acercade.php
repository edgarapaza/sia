<?php
	require("cabecera.php");

	if (isset($_SESSION['log_usu']['autenticado']) && $_SESSION['log_usu']['autenticado']) {
	}else{
		header("Location:index.php");
	}

	require("menu.php");
?>

	<div class="container">

		<div class="row">
			<div class="col-md-offset-4 col-md-4">

				<div class="alert alert-info">
					<p>Este sitio está siendo desarrollado por Henry Salvador Musaja Onori</p>
				</div>
				
			</div>
		</div>

	</div>

<?php
	require("pie.php");
?>


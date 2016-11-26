<?php
session_start();

if (isset($_SESSION['log_usu']['autenticado']) && $_SESSION['log_usu']['autenticado'])
{
	require ("cabecera.php");
	require_once("../inc/Conection.php");

	//Conexion con Base de Datos
	$conn = new Conection();
	$link = $conn->Conection();
	//llamamos a la clase
	require_once "../model/Proyectos.php";
	$proyecto = new Proyectos();
	$proyecto->ProyectoAbierto();
	$abierto   = $proyecto->ProyectoAbierto();
	$cerrado   = $proyecto->ProyectoCerrado();


require ("menu.php");

?>
<div class="container">

	<div class="row">
		<div class="col-md-12">

			<center><h3>Proyectos en Indexación</h3></center>
			<table class="table table-striped table-bordered table-condensed" >
				<thead>
					<tr>
						<th>Notario</th>
						<th>Numero de Indice</th>
						<th>Opciones</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$_SESSION['oPDF'] = array();
					while ($lista1 = $abierto->fetch_assoc()) {
						$_SESSION['oPDF'][] = $lista1;
						?>
						<tr>
							<td><?php echo $lista1['notario'];?></td>
							<td><?php echo $lista1['numIndice'];?></td>
							<td><?php echo $lista1['fecCreacion'];?></td>
							<td>

								<a href="ingresoIndice.php?codProy=<?php echo $lista1['CodProyecto'];?>&Notario=<?php echo $lista1['notario'];?>"><span class="glyphicon glyphicon-edit "></span>Continuar</a>
							</td>
						</tr>
						<?php
					}
					?>
				</tbody>
				<tfoot>

				</tfoot>
			</table>

			<div class="btn-group" role="group" aria-label="...">
				<a href="listado.imprimir.php" class="btn btn-default" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir Lista</a>

			</div>



			<center><h3>Proyectos Terminados</h3></center>
			<table class="table table-striped table-bordered table-condensed" >
				<thead>
					<tr>
						<th>Notario</th>
						<th>Numero de Indice</th>
						<th>Fecha de Inicio</th>
						<th>Fecha de Cierre</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$_SESSION['oPDF'] = array();
					while ($lista2 = $cerrado->fetch_assoc()) {
						$_SESSION['oPDF'][] = $lista2;
						?>
						<tr>
							
							<td><?php echo $lista2['notario'];?></td>
							<td><?php echo $lista2['numIndice'];?></td>
							<td><?php echo $lista2['fecCreacion'];?></td>
							<td><?php echo $lista2['fecTermino'];?></td>
							
						</tr>
						<?php
					}
					?>
				</tbody>
				<tfoot>

				</tfoot>
			</table>

			<div class="btn-group" role="group" aria-label="...">
				<a href="imprimirProyectosTerminados.php" class="btn btn-default" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir Lista</a>

			</div>

		</div>
	</div>

</div>

<?php
require ("pie.php");
$_SESSION['proyecto'] = $lista1['CodProyecto'];
} else {
	header("Location:../index.php");
}
?>


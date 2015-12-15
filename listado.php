<?php
require ("cabecera.php");
require_once ("inc/mysql.php");

if (isset($_SESSION['log_usu']['autenticado']) && $_SESSION['log_usu']['autenticado']) {

	//$trabajando	= "SELECT proyectos.codProyecto,CONCAT(notarios.nom_not,' ',notarios.mat_not,' ',notarios.pat_not) AS notario,proyectos.fechaInicio FROM proyectos INNER JOIN notarios ON proyectos.codNotario=notarios.cod_not WHERE proyectos.terminado=0";
	//echo $trabajando;
	//$trabajando = "SELECT codProyecto,codNotario,fechaInicio FROM proyectos WHERE terminado=0";
	//$result1=mysqli($trabajando);

	//$terminado = "SELECT proyectos.codProyecto,CONCAT(notarios.nom_not,' ',notarios.mat_not,' ',notarios.pat_not) AS notario,proyectos.fechaInicio FROM proyectos INNER JOIN notarios ON proyectos.codNotario=notarios.cod_not WHERE proyectos.terminado=1";
	//$result2=mysqli($terminado);
	//llamamos a la clase
	include "Proyectos.php";
	$proyectos = new Proyectos();
	$abierto   = $proyectos->ProyectoAbierto();
	$cerrado   = $proyectos->ProyectoCerrado();
} else {
	header("Location:index.php");
}

require ("menu.php");

?>
<div class="container">

		<div class="row">
			<div class="col-md-12">

			<center><h3>Proyectos en Indexación</h3></center>
					<table class="table table-striped table-bordered table-condensed" >
						<thead>
							<tr>
								<th>Código de Proyecto</th>
								<th>Notario</th>
								<th>Fecha de Inicio</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
<?php
$_SESSION['oPDF'] = array();
while ($lista1 = $abierto->fetch_assoc()) {
	$_SESSION['oPDF'][] = $lista1;
	?>
														<tr>
															<td><?php echo $lista1['codProyecto'];?></td>
															<td><?php echo $lista1['notario'];?></td>
															<td><?php echo $lista1['fechaInicio'];?></td>
														</tr>
	<?php $dato = $proyectos->UltimoRegistro(21);?>
						<tr>
															<td><?php echo $dato['folio']." ".$dato['escritura']." ".$dato['subserie'];?></td>
															<td></td>
															<td></td>
														</tr>
															<td>
																<a href="ingresoIndice.php?codProy=<?php echo $lista1['codProyecto'];?>&codNotario=<?php echo $lista1['notario'];?>"><span class="glyphicon glyphicon-edit "></span>Continuar</a>


															</td>
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
								<th>Código de Proyecto</th>
								<th>Notario</th>
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
															<td><?php echo $lista2['codProyecto'];?></td>
															<td><?php echo $lista2['notario'];?></td>
															<td><?php echo $lista2['fechaInicio'];?></td>
															<td><?php echo $lista2['fechaInicio'];?></td>

															<td>



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
						<a href="imprimirProyectosTerminados.php" class="btn btn-default" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir Lista</a>

					</div>




			</div>
		</div>

	</div>

<?php
require ("pie.php");
?>


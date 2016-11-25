<?php
session_start();

if (isset($_SESSION['log_usu']['autenticado']) && $_SESSION['log_usu']['autenticado'])
{
	require("cabecera.php");
	require("menu.php");
	require_once("../inc/Conection.php");

	//Conexion con Base de Datos
	$conn = new Conection();
	$link = $conn->Conection();

	$bien=$_POST["txtBien"];

	$sql = "SELECT indices.codIndice,CONCAT(Notario.nom_not,' ',Notario.mat_not,' ',Notario.pat_not) AS notario,indices.otorgante,indices.favorecido,indices.fecha,indices.subserie,indices.folio,indices.escritura,indices.bien FROM indices INNER JOIN Notario ON indices.codNotario=Notario.codNotario WHERE indices.bien LIKE '%fundo%'";
		
		
	$result = $link->query($sql);
	$total	= $result->num_rows;
		
?>

	<div class="container">

		<div class="row">
			<div class="col-md-12">

			<center><h3>Lista de Índices por Nombre del Bien</h3></center>
			<?php echo "<h4>Número de Índices Encontrados: $total Índices</h4> " ?>
			
					<table class="table table-striped table-bordered table-condensed" >
						<thead>
							<tr>
								<th>Número</th>
								<th>Nombre Notario</th>
								<th>Otorgante</th>
								<th>Favorecido</th>
								<th>Fecha</th>
								<th>Serie</th>
								<th>Folio</th>
								<th>Escritura</th>
								<th>Nombre del Bien</th>
							</tr>				
						</thead>
						<tbody>
<?php
							$_SESSION['oPDF'] = array();
							while ($lista1 = $result->fetch_assoc()) {
								$_SESSION['oPDF'][] = $lista1;
?>
								<tr>
									<td><?php echo $lista1['codIndice'];?></td>
									<td><?php echo $lista1['notario'];?></td>
									<td><?php echo $lista1['otorgante'];?></td>
									<td><?php echo $lista1['favorecido'];?></td>
									<td><?php echo $lista1['fecha'];?></td>
									<td><?php echo $lista1['subserie'];?></td>
									<td><?php echo $lista1['folio'];?></td>
									<td><?php echo $lista1['escritura'];?></td>
									<td><?php echo $lista1['bien'];?></td>
									
									<td>
										<a href=""><span class="glyphicon glyphicon-edit "></span>Editar</a> 
										

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

			</div>
		</div>

	</div>

<?php
	require("pie.php");

	}else{
		header("Location: ../index.php");
	}
?>


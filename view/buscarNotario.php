<?php
	require("cabecera.php");
	require_once("inc/mysql.php");

	if (isset($_SESSION['log_usu']['autenticado']) && $_SESSION['log_usu']['autenticado']) {
		$notario=$_POST["txtNotario"];
		$consulta	= "SELECT indices.codIndice,CONCAT(notarios.nom_not,' ',notarios.mat_not,' ',notarios.pat_not) AS notario,indices.otorgante,indices.favorecido,indices.fecha,indices.subserie,indices.folio,indices.escritura,indices.bien FROM indices INNER JOIN notarios ON indices.codNotario=notarios.cod_not WHERE indices.codNotario=$notario";
		//echo $consulta;
		
		$result=mysqli($consulta);
		$total	=	$result->num_rows;

		
		
		}else{
		header("Location:index.php");
	}

	require("menu.php");

	

	//echo $notario;


?>
<div class="container">

		<div class="row">
			<div class="col-md-12">
			<?php 
				$sql="SELECT CONCAT(nom_not,' ',mat_not,' ',pat_not)as notario from notarios where cod_not=$notario";
				//echo $sql;
				$nombre = mysqli($sql);
				$nom = $nombre->fetch_assoc()
			 ?>

			<center> <?php echo "<h3>Lista de Índices por el Notario $nom[notario]</h3>"; ?></center>
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
?>


	
						

				

<?php
	require("pie.php");
?>


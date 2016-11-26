<?php 

	function Police()
	{

		$proyecto   = $_REQUEST['txt-proyecto'];
		$folio      = $_REQUEST['txt-folio'];
		$escritura  = $_REQUEST['txt-escritura'];
		$serie      = strtoupper($_REQUEST['txt-serie']);
		$otorgante  = strtoupper($_REQUEST['txt-otorgante']);
		$favorecido = strtoupper($_REQUEST['txt-favorecido']);
		$dia        = $_REQUEST['txt-dia'];
		$mes        = $_REQUEST['txt-mes'];
		$year       = $_REQUEST['txt-year'];
		$fecha      = $year."-".$mes."-".$dia;
		$bien       = strtoupper($_REQUEST['txt-bien']);
		$codNotario = 21;

		$data = array(
			"codProyecto"=> $proyecto,
			"otorgante"  => $otorgante,
			"favorecido" => $favorecido,
			"fecha"      => $fecha,
			"subserie"   => $serie,
			"folio"      => $folio,
			"escritura"  => $escritura,
			"bien"       => $bien,
			"codNotario" => $codNotario
			);
		
		include_once "../model/Indices.class.php";
		$indices = new Indices();
		$res = $indices->Duplicados($data);

		if($res == TRUE){
			$msg = "Duplicado";
		}

		if($res == FALSE){
			$msg = "Nuevo";
			$indices->Insertar($data);
		}
		echo $msg;	
		return $msg;
	}
	
		header("Location: ../view/respuesta.php?msg=".Police());


?>
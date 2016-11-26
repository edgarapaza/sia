<?php

class Proyectos {

	function __construct() {
		require_once "../inc/Conection.php";
		$conection = new Conection();
		$this->con = $conection->Conection();
	}

	public function Duplicados($codnotario, $numindice)
	{
		$sql    = "SELECT count(*) as total FROM Proyecto WHERE codNotario = '$codnotario' AND numIndice = '$numindice'";
		$result = $this->con->query($sql);
		$data   = $result->fetch_array();
		

		if($data[0] == 0){
			$rpta = FALSE;
		}else{
			$rpta = TRUE;
		}

		return $rpta;
	}

	public function Insertar($codNotario,$numIndice)
	{
		$sql = "INSERT INTO Proyecto (codNotario,numIndice) VALUES ('$codNotario','$numIndice')";
		$this->con->query($sql);
	}
		
	public function ProyectoAbierto() {
		$sql   = "SELECT p.CodProyecto, CONCAT(n.nom_not,' ',n.mat_not,' ',n.pat_not) AS notario, p.numIndice, p.fecCreacion FROM Proyecto AS p, Notario AS n WHERE p.CodNotario = n.codNotario AND p.terminado=0;";
		$datos = $this->con->query($sql);
		return $datos;
	}

	public function ProyectoCerrado() {
		$sql   = "SELECT p.CodProyecto, CONCAT(n.nom_not,' ',n.mat_not,' ',n.pat_not) AS notario, p.numIndice, p.fecTermino, p.fecCreacion FROM Proyecto AS p, Notario AS n WHERE p.CodNotario = n.codNotario AND p.terminado=1;";
		$datos = $this->con->query($sql);
		return $datos;
	}

	public function UltimoRegistro($codNotario) {
		$sql   = "SELECT folio, escritura, subserie FROM indices WHERE codNotario = ".$codNotario."  ORDER BY codIndice DESC LIMIT 1;";
		$datos = $this->con->query($sql);
		$fila  = $datos->fetch_assoc();
		return $fila;
	}
}

?>
<?php 

	class Notarios{

		private $con;

		function __construct(){
			require_once "inc/Conection.php";
			$conection = new Conection();
			$this->con = $conection->Conection();	
		}

		public function ConsultaNotarios(){
			
			//echo $this->con->host_info. " Dentro de Notarios";
			$sql = "SELECT codNotario FROM indices GROUP BY codNotario";
			$datos = $this->con->query($sql);
			return $datos;
			
		}

		public function CantidadEscritasNotarios(){
			$sql = "SELECT COUNT(codNotario) as total FROM indices GROUP BY codNotario";
			$datos = $this->con->query($sql);
			return $datos;
		}

		public function NombreNotario($codNotario){
			$sql = "SELECT CONCAT(nom_not,' ',pat_not,' ',mat_not) AS notario FROM Notario WHERE codNotario = ". $codNotario;
			$nombre = $this->con->query($sql);
			return $nombre;
		}

		public function Notarios(){
			
			//echo $this->con->host_info. " Dentro de Notarios";
			//$sql = "SELECT cod_not FROM notarios";
			$sql = "SELECT CONCAT(nom_not,' ',pat_not,' ',mat_not) AS notario, codNotario FROM Notario ORDER BY pat_not";
			$datos = $this->con->query($sql);
			return $datos;			
		}

		public function ContinuarProyecto(){

			$sql = "SELECT codProyecto WHERE";
			$datos = $this->con->query($sql);
			return $datos;
		}


		

		 


	}

	$notarios = new Notarios();
	$dat = $notarios->ConsultaNotarios();
	/*
	Sirve para contar la cantidad de inideceis ingresados por notario
	$num = $notarios->CantidadEscritasNotarios();
	echo "<br>------------------------<br>";
	while ($row = $num->fetch_assoc()) {
		echo $row['total']."<br>";
	}
	*/
?>


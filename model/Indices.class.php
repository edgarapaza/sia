<?php 
	class Indices
	{
		private $con;

		function __construct(){
			require_once "../inc/Conection.php";
			$conection = new Conection();
			$this->con = $conection->Conection();	
		}
		
		public function Duplicados($data)
		{
			extract($data);

			$sql = "SELECT count(*) FROM indices WHERE otorgante = '$otorgante' AND favorecido = '$favorecido' AND fecha = '$fecha' AND subserie = '$subserie' AND folio = '$folio' AND escritura = '$escritura'";
			echo $sql;
			$result = $this->con->query($sql);
			$data   = $result->fetch_array();
			
			echo "Numero dato".$data[0];

			if($data[0] == FALSE){
				$rpta = FALSE;
			}

			if($data[0] == TRUE){
				$rpta = TRUE;
			}
			
			return $rpta;
			
		}

		public function Insertar($data)
		{
			extract($data);
			$sql = sprintf("INSERT INTO indices (otorgante,favorecido,fecha,subserie,folio,escritura,bien,codProyecto,codNotario) 
				VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s')", $otorgante,$favorecido,$fecha,$subserie,$folio,$escritura,$bien,$codProyecto,$codNotario);
			$this->con->query($sql);
		}

	}

?>
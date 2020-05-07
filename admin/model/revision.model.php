<?php
require_once("Conexion.php");

class Revision
{
	private $con;

	function __construct() {
		$conexion = new Conexion();
		$this->con = $conexion->Conectar();
		return $this->con;
  }

  public function RevisarxNotario($idnotario)
  {
   $sql = "SELECT codIndice,codNotario,otorgante,favorecido,fecha,subserie,
   folio,escritura,bien,codProyecto,idpersonal FROM indices
   WHERE codNotario = $idnotario AND revisado = 0 LIMIT 20;";

   if(!$result = $this->con->query($sql)) {
       echo "Error: " . mysqli_error($this->con) ;
   }
   mysqli_close($this->con);

   return $result;
  }

  public function RevisarEscritura($idindice)
  {
   $sql = "SELECT codIndice,codNotario,otorgante,favorecido,fecha,subserie,folio,escritura,bien
          FROM indices WHERE codIndice = $idindice AND revisado = 0 LIMIT 1;";

   if(!$result = $this->con->query($sql)) {
       echo "Error: " . mysqli_error($this->con) ;
   }
   $fila = $result->fetch_array(MYSQLI_ASSOC);

   mysqli_close($this->con);
   return $fila;
  }

  public function SaveChanges($codIndice, $otorgante,$favorecido,$fecha,$subserie,$folio,$escritura,$bien)
  {
   $sql = "UPDATE indices SET codNotario = 55,otorgante = '$otorgante',favorecido = '$favorecido',
   fecha = '$fecha',subserie = '$subserie',folio = '$folio',escritura = '$escritura',bien = '$bien',
   corregido = '1' WHERE codIndice = '$codIndice' LIMIT 1;";

   if(!$result = $this->con->query($sql)) {
       echo "Error: " . mysqli_error($this->con) ;
   }

   mysqli_close($this->con);
  }

  public function ValidarIngreso($idindice){

    $sql = "UPDATE indices SET revisado='1' WHERE codIndice='$idindice' LIMIT 1;";

    if(!$result = $this->con->query($sql)) {
       echo "Error: " . mysqli_error($this->con) ;
    }
    mysqli_close($this->con);

    return $result;

  }
}
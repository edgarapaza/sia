<?php
require_once "Conexion.php";

class Notarios
{
    private $con;

    private function __construct()
    {
        $conexion = new Conexion();
        $this->con = $conexion->Conectar();
        return $this->con;
    }

    public function TotalRegistrosPersonal($idpersonal, $mes) {
        $sql = "SELECT count(*) as total FROM indices
                WHERE idpersonal = $idpersonal AND
	              fecCreate LIKE '2020-$mes-%';";

        if (!$result = $this->con->query($sql)) {
            echo "Error en la consulta: " . mysqli_error($this->con);
        }
        $data = $result->fetch_array(MYSQLI_ASSOC);
        return $data;
    }

    public function DetalleRegistrosPersonal($idpersonal, $mes)     {
        $sql = "SELECT codIndice, escritura, codProyecto, fecCreate, corregido, revisado FROM indices
                WHERE idpersonal = $idpersonal AND
	              fecCreate LIKE '2020-$mes-%';";

        if (!$result = $this->con->query($sql)) {
            echo "Error en la consulta: " . mysqli_error($this->con);
        }

        return $result;
    }
}

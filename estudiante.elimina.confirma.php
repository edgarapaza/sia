m<?php
if (!isset($_SESSION)) {
	session_start();
}

require_once ("inc/mysql.php");

if (isset($_SESSION['log_usu']['autenticado']) && $_SESSION['log_usu']['autenticado']) {
} else {
	header("Location:index.php");
}

$sSQL = "DELETE FROM usuarios "
."WHERE usuario_id = {$_GET['id']} ";
if ($oUsuario = mysqli($sSQL)) {
	header("Location:listado.php");
}

?>
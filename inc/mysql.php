<?php

function mysqli($pSQL)
{
	require_once("constante.php");
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$mysqli->set_charset("utf8");
	if ($mysqli->connect_errno) {
		echo "Error al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		exit();
	}
	return $mysqli->query($pSQL);
}

	
?>
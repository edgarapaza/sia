<?php
	session_start();
	session_destroy();
	session_unset();
 	unset($_SESSION);
 	header("Location: ../index.html");
?>
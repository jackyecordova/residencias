<?php 
		
	include '../conexion.php';
	$mysqli->query("DELETE FROM programas where id_programa=".$_POST['id_programa']);
	header("Location: ../verprogramas.php");
 ?>

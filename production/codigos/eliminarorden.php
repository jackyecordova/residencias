<?php 
		
	include '../conexion.php';
	$mysqli->query("UPDATE orden set activo='no' WHERE orden_id".$_POST['idOrdene']);
	header("Location: ../projects.php");
 ?>


<?php 
		
	include '../conexion.php';
	$mysqli->query("update orden set activo='no' where ord_id=".$_POST['idOrdene']);
	header("Location: ../projects.php");
 ?>


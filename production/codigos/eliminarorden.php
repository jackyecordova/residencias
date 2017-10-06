<?php 
		
	include '../conexion.php';
	$mysqli->query("update orden set Activo='No' where ord_id=".$_POST['idOrdene']);
	header("Location: ../projects.php");
 ?>


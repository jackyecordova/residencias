<?php 
		
	include '../conexion.php';
	$mysqli->query("DELETE FROM obras  where id_obra=".$_POST['idobra']);
	header("Location: ../verobra.php");
 ?>


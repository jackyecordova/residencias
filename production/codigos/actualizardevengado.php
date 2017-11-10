<?php 
		
	include '../conexion.php';
	if(isset($_POST['devca'])){
		$mysqli->query("update orden set ppto_dev='".$_POST['devca']."', status='Devengado' where ord_id=".$_POST['idDevengado']);
	}
	if(isset($_POST['devpo'])){
		$mysqli->query("update orden set poliza_dev='".$_POST['devpo']."', status='Devengado' where ord_id=".$_POST['idDevengado']);
	}
	header("Location: ../project2.php");
 ?>
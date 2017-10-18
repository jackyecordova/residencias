<?php 
		
	include '../conexion.php';
	$mysqli->query("DELETE FROM presupuesto_depa where id_presupuesto_depa=".$_POST['idcuentadepa']);
	header("Location: ../vercuentadepa.php");
 ?>

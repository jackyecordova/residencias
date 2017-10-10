<?php 
		
	include '../conexion.php';
	$mysqli->query("update orden set id_departamento='".$_POST['dpto']."' where ord_id=".$_POST['idOrdena']);
	$mysqli->query("update orden set ord_numfactura='".$_POST['name']."' where ord_id=".$_POST['idOrdena']);
	$mysqli->query("update orden set fecha='".$_POST['fecha']."' where ord_id=".$_POST['idOrdena']);
	$mysqli->query("update orden set id_obra='".$_POST['ob']."' where ord_id=".$_POST['idOrdena']);
	$mysqli->query("update orden set id_cuenta='".$_POST['cu']."' where ord_id=".$_POST['idOrdena']);
	$mysqli->query("update orden set observaciones='".$_POST['observaciones']."' where ord_id=".$_POST['idOrdena']);
	$mysqli->query("update orden set ord_vehiculo'".$_POST['vehiculo']."' where ord_id=".$_POST['idOrdena']);
	header("Location: ../projects.php");
 ?>



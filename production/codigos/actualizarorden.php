<?php 
		
	include '../conexion.php';
	if(isset($_POST['dpto'])){
		$mysqli->query("update orden set id_departamento='".$_POST['dpto']."' where ord_id=".$_POST['idOrdena']);
	}
	if(isset($_POST['name'])){
	$mysqli->query("update orden set ord_numfactura='".$_POST['name']."' where ord_id=".$_POST['idOrdena']);
	}
	if(isset($_POST['fecha'])){
	$mysqli->query("update orden set fecha='".$_POST['fecha']."' where ord_id=".$_POST['idOrdena']);
	}	
	if(isset($_POST['ob'])){
	$mysqli->query("update orden set id_obra='".$_POST['ob']."' where ord_id=".$_POST['idOrdena']);
	}
	if(isset($_POST['cu'])){
	$mysqli->query("update orden set id_cuenta='".$_POST['cu']."' where ord_id=".$_POST['idOrdena']);
	}
	if(isset($_POST['observaciones'])){
	$mysqli->query("update orden set observaciones='".$_POST['observaciones']."' where ord_id=".$_POST['idOrdena']);
	}
	if(isset($_POST['vehiculo'])){
	$mysqli->query("update orden set ord_vehiculo'".$_POST['vehiculo']."' where ord_id=".$_POST['idOrdena']);
	}
	//header("Location: ../projects.php");
 ?>



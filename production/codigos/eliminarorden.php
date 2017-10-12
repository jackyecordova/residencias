

<?php 
		
	include '../conexion.php';


	$mysqli->query("UPDATE orden set activo='no' WHERE orden_id".$_POST['idOrdene']);

	$mysqli->query("update orden set activo='no' where ord_id=".$_POST['idOrdene'])or die($mysqli->error);
	//die($_POST['idOrdene']);


	$mysqli->query("UPDATE orden set activo='no' WHERE orden_id".$_POST['idOrdene']);

	header("Location: ../projects.php");
 ?>

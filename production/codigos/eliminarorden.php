<?php 
		
	include '../conexion.php';
<<<<<<< HEAD
	$mysqli->query("UPDATE orden set activo='no' WHERE orden_id".$_POST['idOrdene']);
=======
	$mysqli->query("update orden set activo='no' where ord_id=".$_POST['idOrdene'])or die($mysqli->error);
	//die($_POST['idOrdene']);
>>>>>>> d66509d2de2c50ae30b3fec83f21bacc239004a8
	header("Location: ../projects.php");
 ?>


<?php 

include '../conexion.php';
$mysqli->query("UPDATE obras SET
	 descripcion='".$_POST['descripcion']."',
	  id_cuenta='".$_POST['cuenta']."',
	 costo='".$_POST['costo']."'
	  WHERE id_obra=".$_POST['idobraedi']

	)or die($mysqli->error);
header("Location: ../verobra.php");
?>

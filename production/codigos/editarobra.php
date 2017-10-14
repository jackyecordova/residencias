<?php 

include '../conexion.php';
$mysqli->query("UPDATE obras SET
	 descripcion='".$_POST['descripcion']."',
	  cuenta='".$_POST['cuenta']."'
	 ,costo='".$_POST['costo']."'
	  WHERE id_obra='".$_POST['idobraed]"'

	);
header("Location: ../verobra.php");
?>

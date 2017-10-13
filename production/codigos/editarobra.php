<?php 

include '../conexion.php';
$mysqli->query("UPDATE obras SET
	 `descripcion`=".$_POST['descripcion']."
	 ,`costo`=".$_POST['costo']."
	  WHERE id_obra=".$_POST['idobraedi']

	);
header("Location: ../verobra.php");
?>

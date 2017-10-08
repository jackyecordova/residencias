<?php 
		
	include '../conexion.php';
	$mysqli->query("DELETE FROM proveedores  where id_proveedor=".$_POST['idprov']);
	header("Location: ../verproveedores.php");
 ?>


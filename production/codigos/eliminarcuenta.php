<?php 
		
	include '../conexion.php';
	$mysqli->query("DELETE FROM cuentas where id_cuenta=".$_POST['idcuenta']);
	header("Location: ../vercuenta.php");
 ?>

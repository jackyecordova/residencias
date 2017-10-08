<?php 
		
	include '../conexion.php';
	$mysqli->query("delete from cuentas where id_cuenta=".$_POST['idcuenta']);
	header("Location: ../vercuenta.php");
 ?>

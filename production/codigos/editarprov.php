<?php 

include '../conexion.php';
$mysqli->query("UPDATE proveedores SET
	 nombre='".$_POST['nombre']."',
	 direccion='".$_POST['direccion']."'
	 ,telefono='".$_POST['telefono']."'
	  WHERE id_proveedor=".$_POST['idprovedi']

	);
header("Location: ../verproveedores.php");
?>


<?php 

include '../conexion.php';
$mysqli->query("UPDATE proveedores SET
	 `nombre`=".$_POST['numero'].",
	 `direccion`=".$_POST['numero']."
	 ,`telefono`=".$_POST['numero']."
	  WHERE id_proveedor=".$_POST['idprov']

	);
header("Location: ../verproveedores.php");
?>


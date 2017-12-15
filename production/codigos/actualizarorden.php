<?php 
		
	include '../conexion.php';

	$mysqli->query("UPDATE orden SET
	ord_numfactura='".$_POST['factura']."',
	observaciones='".$_POST['observaciones']."',
	ord_vehiculo='".$_POST['vehiculo']."',
	id_proveedor='".$_POST['proveedor']."',
	material='".$_POST['material']."',
	cantidad_mate='".$_POST['cantidad']."',
	precio='".$_POST['precio']."'
	WHERE ord_id=".$_POST['idOrdena']

	)or die($mysqli->error);
	header("Location: ../project2.php");
 ?>
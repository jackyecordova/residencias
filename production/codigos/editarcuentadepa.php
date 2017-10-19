<?php 

include '../conexion.php';
$mysqli->query("UPDATE presupuesto_depa SET
	id_presupuesto_depa='".$_POST['cuenta']."',
	nombre='".$_POST['nombre']."',
	cantidad='".$_POST['cantidad']."'
	WHERE id_cuenta=".$_POST['idcuentadepaedi']

	)or die($mysqli->error);
header("Location: ../vercuenta.php");
?>

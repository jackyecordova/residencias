<?php 

include '../conexion.php';
$mysqli->query("UPDATE cuentas SET
	cuenta='".$_POST['cuenta']."',
	nombre='".$_POST['nombre']."',
	cantidad='".$_POST['cantidad']."'
	WHERE id_cuenta=".$_POST['idcuenta']

	)or die($mysqli->error);
header("Location: ../vercuenta.php");
?>


<?php 

include '../conexion.php';
$mysqli->query("UPDATE cuentas SET
	cuenta=".$_POST['numero'].",
	nombre=".$_POST['nombre'].",
	cantidad=".$_POST['cantidad']."
	WHERE id_cuenta=".$_POST['idcuenta']

	);
header("Location: ../vercuenta.php");
?>


<?php 

include '../conexion.php';
$mysqli->query("UPDATE presupuesto_depa SET
	
	id_cuenta='".$_POST['cuenta']."',
	anio='".$_POST['anio']."',
	monto='".$_POST['monto']."'
	WHERE id_presupuesto_depa=".$_POST['idcuentadepaedi']

	)or die($mysqli->error);

header("Location: ../vercuentadepa.php");
?>
<!--id_departamento='".$_POST['departamentoeditar']."',*/-->
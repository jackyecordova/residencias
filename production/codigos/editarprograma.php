

<?php 

include '../conexion.php';
$mysqli->query("UPDATE programas SET
	programa='".$_POST['programa']."'
	WHERE id_programa=".$_POST['idprogramaeditar']

	)or die($mysqli->error);
header("Location: ../verprogramas.php");
?>


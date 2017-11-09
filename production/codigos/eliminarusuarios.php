<?php 
		
	include '../conexion.php';
	$mysqli->query("DELETE FROM usuarios where id_usuario=".$_POST['idusuario']);
	header("Location: ../verusuarios.php");
 ?>

<?php
	$nombredeusuario="root";
	$passwordbd="";
	$servidor="localhost";
	$basededatos="prsidencia";
	$mysqli = new mysqli($servidor, $nombredeusuario, $passwordbd, $basededatos);
	
	if($mysqli->connect_error){

		die('no se pudo conectar'.mysqli_connect_error());
	}
?>
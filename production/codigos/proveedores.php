<?php
	include './conexion.php';
	if (isset($_POST['nombre'])) && (isset($_POST['direccion'])) && (isset($_POST['telefono'])){
		# code...

		$mysqli->query("insert into proveedores 
			(id_proveedornombre,direccion,telefono")or die($mysqli->error);

	}else
	{
		echo"algunos campos nofueron completados";
	}



  ?>
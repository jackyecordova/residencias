<?php
	include '../conexion.php';
	if (isset($_POST["numero"]) && isset($_POST["nombre"]) && isset($_POST["cantidad"])
	 //&& isset($_POST["presupuesto"])
		){
		# code...
		$numero=$_POST['numero'];
		$nombre=$_POST['nombre'];
		$cantidad=$_POST['cantidad'];

		$consulta="INSERT INTO cuentas 
			values(0,'$numero',
				'$nombre',
				'$cantidad'
						)";


		$mysqli->query($consulta)or die($mysqli->error);

		//echo "listo";
		header("Location:../vercuenta.php");
	}else
	{
		echo "algunos campos no fueron completados";
	}

  ?>
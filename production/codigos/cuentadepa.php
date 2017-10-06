<?php
	include '../conexion.php';
	if (isset($_POST["departamento"]) && isset($_POST["cuenta"]) && isset($_POST["ano"]) && isset($_POST["monto"])
	 //&& isset($_POST["presupuesto"])
		){
		# code...
		$departamento=$_POST['departamento'];
		$cuenta=$_POST['cuenta'];
		$ano=$_POST['ano'];
		$monto=$_POST['monto'];

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
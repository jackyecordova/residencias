<?php
	include '../conexion.php';
	if (isset($_POST["departamento"]) && isset($_POST["cuenta"]) && isset($_POST["anio"]) && isset($_POST["monto"])
	 //&& isset($_POST["presupuesto"])
		){
		# code...
		$departamento=$_POST['departamento'];
		$cuenta=$_POST['cuenta'];
		$ano=$_POST['anio'];
		$monto=$_POST['monto'];

		$consulta="INSERT INTO presupuesto_depa 
			values(0,'$departamento','$cuenta',
				'$ano',
				'$monto'
						)";


		$mysqli->query($consulta)or die($mysqli->error);

		//echo "listo";
		header("Location:../vercuentadepa.php");
	}else
	{
		echo "algunos campos no fueron completados";
	}

  ?>
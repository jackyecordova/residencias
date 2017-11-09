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

		//	die($cuenta);
	$presupuesto=$mysqli->query("SELECT cantidad FROM cuentas WHERE id_cuenta = ".$cuenta ) or die($mysqli->error);
	$fila=$presupuesto->fetch_assoc();
	$presupuestototal=$fila['cantidad'];

	$sumacuenta= "SELECT SUM(monto) AS totalmonto FROM presupuesto_depa WHERE id_cuenta = ".$cuenta ;
	$re=$mysqli->query($sumacuenta) or die($mysqli->error);
	$scuenta=$re->fetch_assoc();
	$totalmonto=$scuenta['totalmonto'];

		$restante= $presupuestototal - $totalmonto;

		
		 	echo "si ";
		 	$consulta="INSERT INTO presupuesto_depa 
			values(0,'$departamento','$cuenta',
				'$ano',
				'$monto'
						)";


			$mysqli->query($consulta)or die($mysqli->error);
		 	header("Location:../vercuentadepa.php");
		 
		
	}else
	{
			
		echo "algunos campos no fueron completados";
	}

  ?>
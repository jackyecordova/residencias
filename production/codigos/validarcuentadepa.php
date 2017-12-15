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

$presu= "SELECT presupuesto  FROM departamentos WHERE id_departamento = ".$departamento ;
	$pre=$mysqli->query($presu) or die($mysqli->error);
	$pres=$pre->fetch_assoc();
	$totalpres=$pres['presupuesto'];
	
		$restante= $presupuestototal-$totalmonto;
	
		if ($monto>$restante ) {//|| $monto>$totalpres
		 	echo "no";
		 	//header("Location:../crearcuentadepa.php?error=excedido");
		 } else{
		 	echo "si ";
		 	//header("Location:../vercuentadepa.php");
		 }

		
	}else
	{
		echo "no";
	}

  ?>
<?php
	include '../conexion.php';
	if (isset($_POST["nombre"]) && isset($_POST["presupuesto"]) 
	 //&& isset($_POST["presupuesto"])
		){
		# code...
		$nombre=$_POST['nombre'];
		$pres=$_POST['presupuesto'];
		


 				$consulta=$mysqli->query("select * from presupuestos
                WHERE anio = '".date("Y")."' ")or die($mysqli->error);
				$consul=$consulta->fetch_assoc();
				$con=$consul['monto'];
				
					$consulta2=$mysqli->query("select SUM(presupuesto) as pre from departamentos
                ")or die($mysqli->error);
				$consul2=$consulta2->fetch_assoc();
				$con2=$consul2['pre'];
				
					//echo $con;
					//echo $con2;
			//die($cuenta);
					$res=$con - $con2;
	
		if ($pres>$res ) {//|| $monto>$totalpres
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
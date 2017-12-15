<?php
	include '../conexion.php';
	if (isset($_POST["anio"]) && isset($_POST["presupuesto"]) 
	 //&& isset($_POST["presupuesto"])
		){
		# code...
		
		
		
		$nombre=$_POST['anio'];
		$presupuesto=$_POST['presupuesto'];

		$consulta="INSERT INTO presupuestos 
			values(0,'$anio','$presupuesto'
							)";


		$mysqli->query($consulta)or die($mysqli->error);
							// BACK UP
							// BACK UP
										include './puntoback.php';
										include './nuevatabla.php';

								// BACK UP
								// BACK UP
		//echo "listo";
		header("Location:../index.php");
	}else
	{
		echo "algunos campos no fueron completados";
	}

  ?>
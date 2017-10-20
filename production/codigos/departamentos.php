<?php
	include '../conexion.php';
	if (isset($_POST["nombre"]) && isset($_POST["presupuesto"]) 
	 //&& isset($_POST["presupuesto"])
		){
		# code...
		
		
		
		$nombre=$_POST['nombre'];
		$presupuesto=$_POST['presupuesto'];

		$consulta="INSERT INTO departamentos 
			values(0,'$nombre','$presupuesto'
				
						
							)";


		$mysqli->query($consulta)or die($mysqli->error);

		echo "listo";
		header("Location:../index.php");
	}else
	{
		echo "algunos campos no fueron completados";
	}

  ?>
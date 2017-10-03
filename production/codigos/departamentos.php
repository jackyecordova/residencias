<?php
	include '../conexion.php';
	if (isset($_POST["nombre"]) 
	 //&& isset($_POST["presupuesto"])
		){
		# code...
		
		
		$id=$_POST['count * from departamentos'];
		$nombre=$_POST['nombre'];
		$presupuesto=$_POST['presupuesto'];

		$consulta="INSERT INTO departamentos 
			values('1','$nombre'
						
							)";


		$mysqli->query($consulta)or die($mysqli->error);

		echo "listo";
		header("Location:../general_elements.php");
	}else
	{
		echo "algunos campos no fueron completados";
	}

  ?>
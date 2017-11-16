<?php
	include '../conexion.php';
	if (isset($_POST["programa"]) 
	 //&& isset($_POST["presupuesto"])
		){
		# code...
		$programa=$_POST['programa'];
		
		$consulta="INSERT INTO programas 
			values(0,'$programa'
						)";


		$mysqli->query($consulta)or die($mysqli->error);

		//echo "listo";
		header("Location:../verprogramas.php");
	}else
	{
		echo "algunos campos no fueron completados";
	}

  ?>
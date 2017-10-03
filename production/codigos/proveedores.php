<?php
	include '../conexion.php';
	if (isset($_POST["nombre"]) 
	&& isset($_POST["direccion"])
	 && isset($_POST["telefono"])){
		# code...
		
		//$id= $mysqli->query("count * from proveedores ");
		//echo $prov;
		$nombre=$_POST['nombre'];
		$direccion=$_POST['direccion'];
		$telefono=$_POST['telefono'];

		$consulta="INSERT INTO proveedores 
			values(0,'$nombre',
				'$direccion',
				'$telefono'
							)";


		$mysqli->query($consulta)or die($mysqli->error);

		echo "listo";
		header("Location:../verproveedores.php");
	}else
	{
		echo "algunos campos no fueron completados";
	}

  ?>
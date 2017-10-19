<?php
	include '../conexion.php';
	if (isset($_POST["nombre"]) 
		&& isset($_POST["correo"]) 
		&& isset($_POST["contrasena"])
		&& isset($_POST["nivel"]) 
		&& isset($_POST["puesto"])
	 //&& isset($_POST["presupuesto"])
		){
		# code...
		$nombre=$_POST['nombre'];
		$correo	=$_POST['correo'];
		$contrasena=sha1($_POST['contrasena']);
		$nivel=$_POST['nivel'];
		
		$puesto=$_POST['puesto'];

		$consulta="INSERT INTO usuarios 
			values(0,'$nombre',
				'$correo',
				'$contrasena',
				'foto.jpg',
				'$nivel',
				'$puesto'

						)";


		$mysqli->query($consulta)or die($mysqli->error);

		//echo "listo";
		header("Location:../login.php");
	}else
	{
		echo "algunos campos no fueron completados";
	}

  ?>
<?php
session_start();
//echo sha1($_POST['password']);
//die();

	include '../conexion.php';
	//verificamos que enviaron el correo y contraseña
	if (isset($_POST['nombre']) && isset($_POST['contrasena'])) {
		//los cachamos con unas variables
		$nombre=$_POST['nombre'];
		//$pass=$_POST['password'];
		$pass=sha1($_POST['contrasena']);
		//consulta oiguales a las variables
		$consulta="select * from usuarios where nombre='$nombre' and password ='$pass'";
		//verificar consulta
		$respuesta=$mysqli->query($consulta)or die($mysqli->error);
		//si no existe si no regreso ninguna consulta
		if (mysqli_num_rows($respuesta)==0) {
			echo "no";
		}else{

			
				echo "si";
			
			}
		

		

	}else{
		echo "no";
	}?>

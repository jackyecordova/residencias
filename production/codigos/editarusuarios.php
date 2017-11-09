

<?php 

include '../conexion.php';
//$contrasena=sha1($_POST['password']);

$mysqli->query("UPDATE usuarios SET
	nombre='".$_POST['nombreeditar']."',
	correo='".$_POST['correoeditar']."',
	password='".$_POST['contrasenaeditar']."',

	nivel='".$_POST['niveleditar']."',

	puesto='".$_POST['puestoeditar']."'
	WHERE id_usuario=".$_POST['idusuarioeditar']

	)or die($mysqli->error);
header("Location: ../verusuarios.php");
?>


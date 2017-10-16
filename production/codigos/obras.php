<?php
include '../conexion.php';
if (isset($_POST["nombre"])  && isset($_POST["costo"])
	&& isset($_POST["cuenta"])){
		# code...
$nombre=$_POST['nombre'];
$cuenta=$_POST['cuenta'];
$costo=$_POST['costo'];

$consulta="INSERT INTO obras
values(0,
	'$nombre',
	'$cuenta',
	'$costo'
	)";


$mysqli->query($consulta)or die($mysqli->error);

echo "listo";
header("Location:../verobra.php");
}else
{
	echo "algunos campos no fueron completados";
}

?>
<?php
include '../conexion.php';
$idOrdenimp=$_POST['idOrdenimp'];
   $departamento =$_POST['#departamento'];
    $factura=$_POST[ '#factura'];
    $fecha=$_POST[ '#fecha'];
    $obra=$_POST[ '#obra'];
    $observaciones=$_POST[ '#observaciones'];
   $vehiculo =$_POST[ '#vehiculo'];
    $total=$_POST[ '#total'];
   $status =$_POST['#status'];
    $proveedor=$_POST[ '#proveedor'];
   $material =$_POST[ '#material'];
    $cantidad=$_POST[ '#cantidad'];
    $precio=$_POST[ '#precio'];
?>
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
		</head>
		<body onload="">

			<a href="../reportes/ordenconsultar.php?id=<?php echo $idOrdenimp ?>" id="aaa" target="_blank"></a>
			<script type="text/javascript">
				window.addEventListener('load',function(){
					var a=document.getElementById('aaa');
					a.click();
					location.href="../project2.php";
				});
			</script>
		</body>
		</html>
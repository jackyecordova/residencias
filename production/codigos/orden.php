<?php
include '../conexion.php';
//die($_POST["departamento"]);
if (isset($_POST["departamento"]) 
	&& isset($_POST["nofactura"])
	&& isset($_POST["obra"])
	//&& isset($_POST["cuenta"])
	&& isset($_POST["observaciones"])

	&& isset($_POST["proveedor"])
	&& isset($_POST["material"])
	&& isset($_POST["cantidad"])
	&& isset($_POST["precio"]) ){

				if (isset($_POST["vehiculo"])) {
					$vehiculo=$_POST['vehiculo'];
				}else{
					$vehiculo=" ";

				}

				$fecha=date("Y-m-d");
			$departamento=$_POST['departamento'];
			$nofactura=$_POST['nofactura'];
			$obra=$_POST['obra'];
			
			$observaciones=$_POST['observaciones'];
			$proveedor=$_POST['proveedor'];
			$material=$_POST['material'];
			$cantidad=$_POST['cantidad'];

					//$cuenta=$_POST['cuenta'];
			$precio=$_POST['precio'];
			$total=$cantidad * $precio;
			$activos="si";
			
			$polpag="";
			$pag="";
			$poldev="";
			$dev="";
			$fechadev="";
			$fechapago="";
			//si estan llenos los de devnegado y pagado , sino se manda vacío
			if (isset($_POST["poldev"]) && isset($_POST["dev"])) {
				# code...
				//if ($_POST["poldev"]<=$total) {
					# code...
					$poldev=$_POST['poldev'];
					$dev=$_POST['dev'];
			//	}else{
				//	echo "Se exedió del dinero comprometido";
				//}
				
			}

	$sumacuenta= "SELECT SUM(monto) AS totalmonto FROM presupuesto_depa WHERE id_cuenta = ".$obra=$_POST['obra'] ;
	$re=$mysqli->query($sumacuenta);
	$scuenta=$re->fetch_assoc();
	$totalmonto=$scuenta['totalmonto'];

		//$restante= $cantidadcuenta-$sumacuenta;
		//if ($total>$cantidadsuma) {
		// 	echo "Estas gastando mas de lo que se tiene";
		// } else{
		 //	echo "Ahora si ";
		 //}











		$consulta="INSERT INTO orden
		values(0,
			'$fecha',
			'$fechadev',
			'$fechapago',
			'$obra',
			'$total',
			'$poldev',
			'$dev',
			'$polpag',
			'$pag',
			'$observaciones',
			'$nofactura',
			'$vehiculo',
			'Emitido',
			'$departamento',
			'$proveedor',
			'$material',
			'$cantidad',
			'$precio',
			'$activos'



			)";


		$mysqli->query($consulta)or die($mysqli->error);

		//echo "listo";
		header("Location:../project2.php");
}else
{
	echo "algunos campos no fueron completados";
}

?>
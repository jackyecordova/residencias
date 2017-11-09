<?php
	include '../conexion.php';
	if (isset($_POST["cantidad"]) && isset($_POST["poliza"])
	 //&& isset($_POST["presupuesto"])
		){
		# code...
		$poliza=$_POST['poliza'];
		$cantidad=$_POST['cantidad'];
		$estatus="SELECT status FROM orden where ord_id=".$_POST['idorden']
;
		$mysqli->query($estatus)or die($mysqli->error);
		if ($estatus=="Emitido") {
			$consulta="UPDATE Orden set
				poliza_dev=$poliza,
				ppto_dev=$cantidad";
		}else if ($estatus=="Devengado") {
				$consulta="UPDATE Orden set
					poliza_pag=$poliza,
					ppto_pag=$cantidad";
		}else if ($status=="Pagado") {
			# code...
		}


		$mysqli->query($consulta)or die($mysqli->error);

		//echo "listo";
		header("Location:../vercuenta.php");
	}else
	{
		echo "algunos campos no fueron completados";
	}

  ?>
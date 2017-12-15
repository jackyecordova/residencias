<?php 
		
	include '../conexion.php';
	if(isset($_POST['devca'])){
		$consulta=$mysqli->query("select departamentos.presupuesto from orden 
		inner join departamentos on orden.id_departamento = departamentos.id_departamento
		 where orden.ord_id=".$_POST['idDevengado']
		);
		while ($fila=mysqli_fetch_array($consulta)){
			$presupuesto=$fila['presupuesto'];
			if($presupuesto>$_POST['devca']){
				$mysqli->query("update orden set ppto_dev='".$_POST['devca']."', status='Devengado' where ord_id=".$_POST['idDevengado']);
	}else{
		echo "Cantidad Exedida";
		}

	}
	}
	if(isset($_POST['devpo'])){
		$mysqli->query("update orden set poliza_dev='".$_POST['devpo']."', status='Devengado' where ord_id=".$_POST['idDevengado']);
	}
	header("Location: ../project2.php");


 ?>
<?php 
		
	include '../conexion.php';
	//die("update orden set ppto_pag='".$_POST['pagcan']."', status='Pagado' where ord_id=".$_POST['idPagado']);
	
	if(isset($_POST['pagcan'])){
		$consulta=$mysqli->query("select departamentos.presupuesto from orden 
		inner join departamentos on orden.id_departamento = departamentos.id_departamento
		 where orden.ord_id=".$_POST['idPagado']
		);
		while ($fila=mysqli_fetch_array($consulta)){
			$presupuesto=$fila['presupuesto'];
			if($presupuesto>$_POST['pagcan']){
				$mysqli->query("update orden set ppto_pag='".$_POST['pagcan']."', status='Pagado'  where ord_id=".$_POST['idPagado'])
		or die($mysqli->error);
	}else{
		echo "Cantidad Exedida";
		}
	}

		
	}
	if(isset($_POST['ediPo'])){
		$mysqli->query("update orden set poliza_pag='".$_POST['ediPo']."', status='Pagado' where ord_id=".$_POST['idPagado']);
	}
	header("Location: ../project2.php");

 ?>
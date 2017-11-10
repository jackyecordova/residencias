<?php 
		
	include '../conexion.php';
	if(isset($_POST['editar'])){
		$mysqli->query("update orden set ppto_pag='".$_POST['editar']."' status='Pagado' where ord_id=".$_POST['idPagado']);
	}
	//header("Location: ../project2.php");
 ?>
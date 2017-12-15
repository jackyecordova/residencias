<?php
include '../conexion.php';

if (isset($_POST["departamento"]) 
	&& isset($_POST["obra"])
	//&& isset($_POST["cuenta"])

	
	&& isset($_POST["cantidad"])
	&& isset($_POST["precio"]) ){

			
				
			$departamento=$_POST['departamento'];
		
			$obra=$_POST['obra'];
			
			
			$cantidad=$_POST['cantidad'];

					//$cuenta=$_POST['cuenta'];
			$precio=$_POST['precio'];
			$total=$cantidad * $precio;
			
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
			//cantidad de la cuenta seleccionada
	$sumacuenta= "SELECT SUM(monto) as monto FROM presupuesto_depa WHERE id_departamento= ".$departamento." and id_cuenta=".$obra  ;
	//die($sumacuenta);
	$re=$mysqli->query($sumacuenta)or die($mysqli->error);
	$scuenta=$re->fetch_assoc();
	$totalmonto=$scuenta['monto'];
	
	//cantidad de la cuenta usada
	$sumacuenta2= "SELECT cantidad FROM cuentas WHERE id_cuenta=".$obra ;
	$re2=$mysqli->query($sumacuenta2);
	$scuenta2=$re2->fetch_assoc();
	$totalmonto2=$scuenta2['cantidad'];

		$restante= $totalmonto-$total;
		//echo "$restante ";
		if ($restante<0) {
		 	echo "no";
		 	//header("Location:../form_validation.php?error=excedido");
		 } else{
		 	echo "si";
		 }


}else
{
	echo "Algunos campos no fueron completados";
}

?>

<?php 
include '../conexion.php';
 $orden=$mysqli->query("select orden.*,departamentos.*,cuentas.*,proveedores.*
  from orden
  inner join departamentos on orden.id_departamento=departamentos.id_departamento
  inner join cuentas on orden.id_cuenta= cuentas.id_cuenta
  inner join proveedores on orden.id_proveedor= proveedores.id_proveedor
   where orden.ord_id=".$_GET['id'])or die($mysqli->error);
// inner join programaorden on orden.ord_id= programaorden.id_orden
  while ( $fila=mysqli_fetch_array($orden)) {
    $departamento=$fila['departamento'];
    $cuenta=$fila['cuenta'];
    $fecha=$fila['fecha'];
    $ord_id=$fila['ord_id'];
    $observaciones=$fila['observaciones'];
    $no_factura=$fila['ord_numfactura'];
    $id_proveedor=$fila['id_proveedor'];
    $proveedor=$fila['nombre'];
    $direccion=$fila['direccion'];
    $telefono=$fila['telefono'];
    $obra=$fila['nombre'];
    $cantidad=$fila['cantidad_mate'];
    $precio=$fila['precio'];
    $material=$fila['material'];
    $total=$fila['total_compromet'];


   }
    $prog=$mysqli->query("select programaorden.*,orden.*,programas.*
  from programaorden
  inner join orden on orden.ord_id=programaorden.id_orden
  inner join programas on programas.id_programa=programaorden.id_programa
  
   where orden.ord_id=".$_GET['id'])or die($mysqli->error);
// inner join programaorden on orden.ord_id= programaorden.id_orden
  while ( $fila2=mysqli_fetch_array($prog)) {
  	$programa=$fila2['programa'];
  }

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body onload="imprimir()">
<div id="todo">
	<?php include '../conexion.php'; ?>
	<div class="col-lg-5" style="margin-top:0px;">
	<?php // $departamento=$_POST['departamento'];?>
		<h3>Departamento de <?php echo $departamento; ?></h3>
		</div>
	<div class="col-lg-3 pull-right" style="margin-top:0px;">
		Orden de compras #<?php echo $ord_id; ?>
		</div>
		  <div class="clearfix"></div>
		<div class="col-lg-3 pull-right">
			Fecha: <?php echo $fecha ?>
		</div>
		<div class="clearfix"></div>
		<div class="col-lg-12" style="border-radius: 5px;
						    border: 1px solid #000;
						    padding: 10px;
						    margin-bottom:5px; ">
							<div class="col-lg-1" >
								<small>Observaciones</small>
							</div>

							<?php if ($departamento=='Obras Publicas' || $departamento=='OBRAS PUBLICAS') { ?>

							<div class="pull-right">
								Programa:	<?php echo $programa?>
							</div>
							<?php }  ?>
							<div class="col-lg-3">
								 <?php echo $observaciones ?>
							</div>
							<div class="col-lg-3">
								 No Factura: <?php echo $no_factura ?>
							</div>
		</div>

		<div class="col-lg-12" style="border-radius: 5px;
						    border: 1px solid #000;
						    padding: 10px; ">
						<div class="col-lg-5">
							<small>Proveedor:</small> <?php echo $proveedor ?> <a style="margin-left:10px;"> <?php echo $id_proveedor ?></a>
						</div>
						<div class="col-lg-5">
							 <?php echo $direccion ?> 
						</div>
						<div class="col-lg-5">
							 <?php echo $telefono ?> 
						</div>
		</div>
		<div class="col-lg-5" style="width:100%;heigth:100%;">
			<div class="col-lg-5">
							Obra  <?php echo $obra ?> 
			</div>
			<div class="col-lg-5">
							Número  <?php echo $cuenta;?> 
			</div>
		</div>
		<hr>
		<div class="col-lg-5" style="width:100%;heigth:100%;">
			<div>
				<a style="width:10px">Cantidad</a>
				
				<a style="width:50px;margin-left:60px;">Material</a>
					<div class="pull-right" style="margin-right:50px;"><a style="width:20px">Subtotal</a></div>
				<div class="pull-right" ><a style="width:10px;margin-right:50px;">P. Unitario</a></div>
			

			</div>
			<hr>
			<div>
				<a style="width:10px"><?php echo $cantidad ?></a>
				
				<a style="width:50px;margin-left:60px;"><?php echo$material ?></a>
				<div class="pull-right" style="margin-right:50px;"><a style="width:20px"> $ <?php echo number_format( $total,2) ?></a></div>
				<div class="pull-right"><a style="width:10px;margin-right:50px;">$ <?php echo number_format( $precio,2) ?></a></div>
				

			</div>

			
		</div>

		<div class="col-lg-5"  style="	 margin-top: 60px;">
			<hr size="2" style="width:20%;margin-left:13px;margin-top: 50px;margin-bottom: -20px; ">
			
		</div>
			<div class="col-lg-5" style="width:20%;margin-left:13px;margin-top:20px;">
			
			Tesorero

			</div>		
			


		<div class="col-lg-5"  style="	 margin-top: 50px;">
			<hr size="2" style="width:20%;margin-left:13px;margin-top: 50px;margin-bottom: -20px; ">
			
		</div>
		<div class="pull-right" style="margin-left:10%;wwidth;100%"> Total</div>
			<div class="col-lg-5" style="width:20%;margin-left:13px;margin-top:20px;">
			
			Oficial Mayor

		</div>
<div class="pull-right" style="margin-right:10px;"><a style="width:10px"> $ <?php echo number_format( $total,2) ?></a></div>
		
	
</div>


<script type="text/javascript">
	function imprimir (argument) {
		  var printContents = document.getElementById("todo").innerHTML;
	     var originalContents = document.body.innerHTML;

	     document.body.innerHTML = printContents;

	     window.print();

	     document.body.innerHTML = originalContents;
		}
</script>
</body>
</html>

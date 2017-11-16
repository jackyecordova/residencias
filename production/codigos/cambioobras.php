  <?php 
                      include '../conexion.php';
                      $consulta=$mysqli->query("select presupuesto_depa.*, cuentas.* from presupuesto_depa 
							inner join cuentas on presupuesto_depa.id_cuenta= cuentas.id_cuenta
							where presupuesto_depa.id_departamento=".$_POST['id'])or die($mysqli->error);
                      while ( $fila=mysqli_fetch_array($consulta)) {
                       ?> <!--Concatenar el nombre de la cuenta-->
                       <option value="<?php echo $fila['id_cuenta'] ?>"><?php echo $fila['nombre']  ?><small ><?php // echo $fila['cuenta']  ?></small></option>
                       <?php } ?>
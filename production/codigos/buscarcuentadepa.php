 <?php 
               include './conexion.php';
               $consulta=$mysqli->query("SELECT presupuesto_depa.*,cuentas.*, 
                departamentos.departamento
                FROM (( presupuesto_depa 

                INNER JOIN departamentos ON presupuesto_depa.id_departamento = departamentos.id_departamento)
               INNER JOIN cuentas ON presupuesto_depa.id_cuenta = cuentas.id_cuenta)

                where presupuesto_depa.id_presupuesto_depa=".$_POST['id']."
                                              
                                              and 
                                                 ( presupuesto_depa.monto '%".$_POST['texto']."%' or 
                                                  cuentas.nombre like '%".$_POST['texto']."%' or
                                                  departamentos.departamento like '%".$_POST['texto']."%' or
                                                  presupuesto_depa.id_presupuesto_depa like '%".$_POST['texto']."%' or
                                                  cuentas.cuenta like '%".$_POST['texto']."%' or
                                                  presupuesto_depa.anio like '%".$_POST['texto']."%' or
                                                  orden.ord_vehiculo like '%".$_POST['texto']."%'
;





               ")or die($mysqli->error);
               while ( $fila=mysqli_fetch_array($consulta)) {
                           # code...
                ?>
                <tr>
                  <td>    <?php echo $fila['id_presupuesto_depa'] ?></td>

                  <td>
                   <?php echo $fila['departamento'] ?></td> 
                   <td>    <?php echo number_format($fila['monto']  ,2) ; ?></td>

                   <td>      <?php echo $fila['cuenta'] ?></td>
                   <td>      <?php echo $fila['nombre'] ?></td>

                   <td>

                    <?php echo $fila['anio'] ?>

                  </td>

                  <td>
                    <a href="#" class="btn btn-info btn-xs btnEditar" data-toggle="modal"
                    data-target="#editar"
                    data-id="<?php echo $fila['id_presupuesto_depa'] ?>"
                    data-departamento="<?php echo $fila['id_departamento'] ?>"
                    data-cuenta="<?php echo $fila['id_cuenta'] ?>" 
                    data-anio="<?php echo $fila['anio'] ?>"
                    data-monto="<?php echo $fila['monto'] ?>">
                    <i class="fa fa-pencil">

                    </i>
                  </a>
                </td>
                <td>
                 <a href="#" class="btn btn-danger btn-xs btnEliminar" data-toggle="modal" 
                 data-target="#eliminar"
                 data-toggle="modal"                                   
                 data-id="<?php echo $fila['id_presupuesto_depa'] ?>"
                 data-departamento="<?php echo $fila['departamento'] ?>"
                 >
                 <i class="fa fa-trash-o">

                 </i> 
               </a>
             </td>
           </tr>

           <?php 

         } ?>
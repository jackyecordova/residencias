 <?php 

    if($_POST['opcion']=="General"){

                          $query= "SELECT orden.*, departamentos.*, cuentas.*, proveedores.*
                                              FROM orden
                                              INNER JOIN departamentos ON orden.id_departamento = departamentos.id_departamento
                                              INNER JOIN cuentas ON orden.id_cuenta = cuentas.id_cuenta
                                              INNER JOIN proveedores ON orden.id_proveedor = proveedores.id_proveedor
                                              where orden.id_departamento=".$_POST['id']."
                                              
                                              and 
                                                 ( orden.observaciones like '%".$_POST['texto']."%' or 
                                                  orden.material like '%".$_POST['texto']."%' or
                                                  orden.ord_id like '%".$_POST['texto']."%' or
                                                  orden.ord_numfactura like '%".$_POST['texto']."%' or
                                                  proveedores.nombre like '%".$_POST['texto']."%' or
                                                  cuentas.cuenta like '%".$_POST['texto']."%' or
                                                  cuentas.nombre like '%".$_POST['texto']."%' or
                                                  orden.ord_vehiculo like '%".$_POST['texto']."%'

                                                  )

                                              ";
    }else{
      $query= "SELECT orden.*, departamentos.*, cuentas.*, proveedores.*
                                              FROM orden
                                              INNER JOIN departamentos ON orden.id_departamento = departamentos.id_departamento
                                              INNER JOIN cuentas ON orden.id_cuenta = cuentas.id_cuenta
                                              INNER JOIN proveedores ON orden.id_proveedor = proveedores.id_proveedor
                                              where orden.id_departamento=".$_POST['id']."
                                              and orden.status='".$_POST['opcion']."'
                                              and 
                                                 ( orden.observaciones like '%".$_POST['texto']."%' or 
                                                  orden.material like '%".$_POST['texto']."%' or
                                                  orden.ord_id like '%".$_POST['texto']."%' or
                                                  orden.ord_numfactura like '%".$_POST['texto']."%' or
                                                  proveedores.nombre like '%".$_POST['texto']."%' or
                                                  cuentas.cuenta like '%".$_POST['texto']."%' or
                                                  cuentas.nombre like '%".$_POST['texto']."%' or
                                                  orden.ord_vehiculo like '%".$_POST['texto']."%'

                                                  )

                                              ";
    }
                                              include '../conexion.php';
                                              $consulta=$mysqli->query($query )or die($mysqli->error);
                                              while ( $fila=mysqli_fetch_array($consulta)) {
                                                              # code...
                                                ?>
                                                <li>
                                                  <div class="block">

                                                    <div class="tags">
                                                    <!--<div class="row">
                                                              <div class="col-md-1 col-sm-1 col-xs-1">-->
                                                                     <a href="" class="tag ">
                                                           
                                                                   <span><?php echo $fila['ord_id'] ?></span>
                                                           
                                                                     </a>
                                                           <!--   </div>
                                                        </div>-->
                                                    </div>
                                                    <div class="block_content">

                                                    <div class="row">
                                                           <div class="col-md-1 col-sm-1 col-xs-12">
                                                              <small>Cuenta</small> 

                                                            </div>
                                                             <div class="col-md-3 col-sm-3 col-xs-12 pull-right" style="    text-align: right;">
                                                             <small>No. Factura <?php echo $fila['ord_numfactura'] ?></small>
                                                             </div>

                                                    </div>

                                                    <div class="row">
                                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                                <a><small>  Proveedor: </small> <?php echo $fila['nombre'] ?></a> 
                                                                  <small>  <?php echo $fila['departamento'] ?> </small>
                                                            </div>
                                                             <div class="col-md-2 col-sm-2 col-xs-12">
                                                                <a><small>  Vehiculo: </small> <?php echo $fila['ord_vehiculo'] ?></a> 
                                                                 
                                                            </div>
                                                            
                                                            <div class="col-md-2 col-sm-2 col-xs-12 pull-right" >
                                                                <p class="pull-right"> <small>Fecha:  </small> <?php echo $fila['fecha'];?> </p>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4 col-xs-12" style="text-align: right;">
                                                                
                                                            </div>
                                                    </div>

                                                    <div class="row">
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                          <h4       style=" width: 100%;" >
                                                                  <?php echo $fila['material'] ?> </h4>  
                                                            </div>
                                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                                           <small>  <a class="" style="">
                                                                    <?php echo $fila['cuenta'] ?> </a></small>
                                                            </div>
                                                          
                                                            <div class="col-md-3 col-sm-3 col-xs-12" style="text-align: right;">
                                                                                <a > Total:   $<?php echo
                                                                    number_format($fila['total_compromet'] ,2);
                                                                    ?></a> 
                                                                                 
                                                            </div>
                                                    </div>
                                                     <div class="row">
                                                             <div class="col-md-9 col-sm-9 col-xs-12">
                                                                   <p class="excerpt" ><?php echo $fila['observaciones'] ?>  </p>
                                                              </div>
                                                            
                                                               <div class="col-md-3 col-sm-3 col-xs-12" style="text-align: right;">


                                                                            <a  style="width: 10%;color:black; margin-right: 20%;" class="pull-right"><?php echo $fila['status']; ?></a>

                                                                  </div>
                                                    </div>

                                                    </div>
                                                  </div>
                                                </li>
                                                <?php  } ?>
                               
                                               

<?php 

session_start();
if (isset($_SESSION['miSesion'])){
      $arreglo=$_SESSION['miSesion'];
      }else{
        header("Location: ./login.php");  

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Control Presupuestal </title>
  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Datatables -->
  <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
         <?php include './navar.php'; ?>

         <div class="clearfix"></div>

         <!-- menu profile quick info -->
         <?php  include "./menuusuario.php";?>

         <!-- /menu profile quick info -->

         <br />
         <!-- sidebar menu -->        
         <?php  include "./barramenu.php";?>
         <!-- /sidebar menu -->

       </div>
     </div>
     
     <!-- /top navigation -->
     <?php  include "./topnavigation.php";?>
     <!-- /top navigation -->

     <!-- page content -->
     <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Obras </h3>
          </div>

        

        <div class="clearfix"></div>

        <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Obras Registradas <small></small></h2>
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                                      <div class="panel panel-default col-xs-2 pull-right" style="    height: 32.4px;">
                                            <div class="panel-heading col-xs-4 " style="background-color:rgba(00, 00, 00, 0.0)">
                                              <h3 class="panel-title" style="font-size:9px;">Emitido</h3>
                                            </div>
                                           <div class="panel-heading col-xs-4 " style="background-color:rgba(194, 47, 47, 0.08);margin-right:0%;">
                                              <h3 class="panel-title" style="font-size: 9px;">Devengado</h3>
                                            </div>
                                            <div class="panel-heading col-xs-4 " style="background-color:rgba(24, 139, 26, 0.17);">
                                              <h3 class="panel-title" style="font-size:9px;">Pagado</h3>
                                            </div>
                                          </div>
                                          
                    
                    

                    
                    <table id="datatable" class="table table-striped table-bordered">
                     <thead >
                        <tr >
                          <th style="width: 1% ;border:0px;">Id</th>
                          <th style="width: 25%;border:0px;">Obra</th>
                          <th style="width: 25%;border:0px;">Descripcion</th>
                          <th class="status" style="border:0px;">
                                        
                          </th style="border:0px;">
                          <th style="border:0px;"></th>
                          <th style="border:0px;"></th>
                        </tr>
                      </thead>


                      <tbody>



  <?php 
                                                   include './conexion.php';
                                                  //where orden.activo='no'
                                                   $consulta=$mysqli->query("
                                                    SELECT orden.*,cuentas.*,departamentos.departamento

                                                    FROM ((orden
                                                      INNER JOIN cuentas ON orden.id_cuenta = cuentas.id_cuenta)

                                                   INNER JOIN departamentos ON orden.id_departamento = departamentos.id_departamento)
                                                   where orden.activo='si' and departamentos.departamento='Obras Publicas';



                                                   ")or die($mysqli->error);
                                                   while ( $fila=mysqli_fetch_array($consulta)) {

                                                    ?>  <?php 
                                                    $todo=$fila['total_compromet'];
                                                    $dev=$fila['ppto_dev'];
                                                    $pag=$fila['ppto_pag'];
                                                    $status=$fila['status'];
                                                    if ($dev<$todo) {
                                                      $res=$dev * 100 / $todo;
                                                      
                                                    }else {
                                                      $res =$pag * 100 / $todo;
                                                    }
                                                    // if ($dev<$todo) {

                                                           if ($status=='Devengado') {
                                                                //rojo
                                                               $pagado='background-color:rgba(194, 47, 47, 0.08)';

                                                               // }else if ($pag==$todo) {//verde
                                                                 }else if ($status=='Pagado') {//verde
                                                                  $pagado='background-color:rgba(24, 139, 26, 0.17)';
                                                                }else{
                                                                                            //blanco

                                                                 $pagado='background-color:rgba(00, 00, 00, 0.0)';
                                                                 
                                                               } 
                                                            
                                                 ?>




                        <tr style="<?php  echo $pagado?>;">
                          <td style="border:0px;"><?php echo $fila['ord_id'] ?></td>
                          <td style="border:0px;"><a><?php echo $fila['nombre'] ?></a><!--cuenta nombre-->

                                                    <small>
                                                    <?php echo $fila['departamento'] ?>
                                                    </small>
                          </td>
                          <td style="border:0px;">
                           <a> <?php echo $fila['observaciones'] ?></a>
                          </td>
                          <td class="project_progress " style="border:0px;">
                              <!-- <div class="progress progress_sm">
                                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php//  echo $res?>" ></div>
                                                  </div>
                                                  <small>
                                                  <?php // echo  number_format($res ,2);?>% COMPLETADO
                                                  </small>

                                                 -->

                                                  <small>
                                                  <?php if ($fila['status']== "Emimtido" ||$fila['status']== "Devengado"  ) {
                                                        echo  number_format($res ,2);?>% COMPLETADO  
                                                        <?php

                                                                 } elseif ($fila['status']== "Pagado")  {
                                                                    # code...
                                                                   
                                                              echo "100% COMPLETADO";
                                                                 }?>
                                                    
                                                   
                                                 

                                                  <br> <?php echo $fila['status']; ?></small>
                          </td>
                          <td style="border:0px;">
                          <!-- <button type="button" class="btn btn-success btn-xs btnDevengado"  data-method="getCroppedCanvas"
                                    data-id="<?php //echo $fila['ord_id'] ?>"
                                    data-toggle="modal" data-target="#Devengada"
                                    data-cantidad="<?php// echo $fila['ppto_dev'] ?>"
                                    data-poliza="<?php //echo $fila['poliza_dev'] ?>">
                                    Devengar
                                  </button>-->
                                    <?php  if ($arreglo['nivel']=='Admin' || $arreglo['nivel']=='Tesorero'){

                                 ?>
                                  <button type="button" class="btn btn-success btn-xs btnDevengado" 
                                   data-method="getCroppedCanvas"
                                  data-id="<?php echo $fila['ord_id'] ?>"
                                  data-toggle="modal" data-target="#Devengada"
                                  data-cantidad="<?php echo $fila['ppto_dev'] ?>"
                                  data-poliza="<?php echo $fila['poliza_dev'] ?>">
                                  Devengado
                                  <?php } ?>
                                </button>
                        <button type="button" class="btn btn-success btn-xs btnPagado" 
                        data-method="getCroppedCanvas"
                              data-id="<?php echo $fila['ord_id'] ?>"
                              data-toggle="modal" 
                              data-target="#Pagada"
                              data-pagado="<?php echo $fila['ppto_pag'] ?>">
                              Pagar</button>
                                                </td>
                          <td style="border:0px;">  <a href="#" class="btn btn-primary btn-xs"
                          data-method="getCroppedCanvas"
                                                   data-toggle="modal" data-target="#ver">
                                                   <i class="fa fa-folder"></i> Ver </a>
                                              <a href="#" class="btn btn-info btn-xs btnEditar"
                                                 data-id="<?php echo $fila['ord_id'] ?>"
                                                 data-toggle="modal" 
                                                 data-target="#editar"
                                                 data-method="getCroppedCanvas"
                                                 data-departamento="<?php echo $fila['departamento']?>"
                                                  data-factura="<?php echo $fila['ord_numfactura'] ?>"
                                                   data-fecha="<?php echo $fila['fecha'] ?>"
                                                    data-obra="<?php echo $fila['descripcion'] ?>"
                                                    
                                                      data-observaciones="<?php echo $fila['observaciones'] ?>"
                                                       data-vehiculo="<?php echo $fila['ord_vehiculo'] ?>">
                                                 <i class="fa fa-pencil"></i> Editar</a>

                                               <a href="#" class="btn btn-danger btn-xs btnEliminar" 
                                                   data-id="<?php echo $fila['ord_id'] ?>"
                                                   data-toggle="modal" 
                                                   data-target="#eliminar"
                                                   data-method="getCroppedCanvas">
                                                   <i class="fa fa-trash-o"></i> Eliminar</a>
                                                   <a href="#" class="btn btn-info btn-xs btnImprimir" 
                                                    c
                                                   data-id="<?php echo $fila['ord_id'] ?>"
                                                   data-toggle="modal" 
                                                   data-target="#imprimir"
                                                   data-method="getCroppedCanvas"
                                                        data-departamento="<?php echo $fila['departamento']?>"
                                                        data-factura="<?php echo $fila['ord_numfactura'] ?>"
                                                        data-cuenta="<?php echo $fila['cuenta'] ?>"
                                                         data-nomcuenta="<?php echo $fila['nombre'] ?>"
                                                        data-fecha="<?php echo $fila['fecha'] ?>"
                                                        data-obra="<?php echo $fila['descripcion'] ?>" 
                                                        data-observaciones="<?php echo $fila['observaciones'] ?>"
                                                        data-vehiculo="<?php echo $fila['ord_vehiculo'] ?>"
                                                        data-total="<?php echo $fila['total_compromet'] ?>"
                                                        data-status="<?php echo $fila['status'] ?>"
                                                        data-proveedor="<?php echo $fila['proveedor'] ?>"
                                                        data-material="<?php echo $fila['material'] ?>"
                                                        data-cantidad="<?php echo $fila['cantidad'] ?>"
                                                        data-precio="<?php echo $fila['precio'] ?>"


                                                  >
                                                   <i class="fa fa-print"
                                                  ></i> </a>
     </td>
                        </tr>
                        <?php } ?>


<!-- eliminar-->
<div id="eliminar" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="./codigos/eliminarorden.php" method="post">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Eliminar información</h4>
          <input type="hidden" id="idOrdene" name="idOrdene">

        </div>
        <div class="modal-body" style="text-align: center">
          <p>Estas seguro de ELIMINAR la información</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#eliminar">Eliminar</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- eliminar-->
<!-- imprimir-->
<div id="imprimir" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="./reportes/ordenconsultar.php" method="post">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Imprimir orden</h4>
          <input type="hidden" id="idOrdenimp" name="idOrdenimp">

        </div>
        <div class="modal-body" style="text-align: center">
          <p>Está seguro de imprimir esta orden?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#eliminar">Imprimir</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- imprimir-->
                        <!--Cantidad devengada-->
                        <!-- Cantidad Devengado-->
<div id="Devengada" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="./codigos/actualizardevengado.php" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" >&times;</button>
        <h4 class="modal-title" >Cantidad Devengada</h4>
         <input type="hidden" id="idDevengado" name="idDevengado">
      </div>
      <div class="modal-body" style="text-align: left; ">                     
       <div class="col-sm-3">  <h5 class="modal-title" style="padding-top:7px;">Cantidad </h5> </div>
       <div class="col-sm-8">  </div>
       <div class="input-group"> 
        <input type="text" placeholder="000,000,000.00" class="form-control" name="devca" data-fv-field="price" id="editarCantidad">
        <span class="input-group-addon">
         $
       </span> 
     </div>
   </div>
   <div class="modal-body" style="text-align: left; ">

     <div class="col-sm-3">  <h5 class="modal-title" style="padding-top:7px;">Póliza </h5> </div>
     <div class="col-sm-8">  </div>
     <div class="input-group"> 
      <input type="text" placeholder="000,000,000.00" class="form-control" name="devpo" data-fv-field="price" id="editarPoliza">
      <span class="input-group-addon">
       $
     </span> 
   </div>

 </div>
 <div class="col-sm-1"></div>
 <div class="modal-footer" style="padding-top:35px;">
   <button type="submit"  class="btn btn-success" >Devengar</button>
   <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
 </div>
 <form>
</div>
</div>
</div>
<!--cantidad devengada-->
<!--cantidad pagada-->
<!-- Cantidad Pagada-->
<!-- Cantidad Pagada
<div id="Pagada" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="./codigos/actualizarpagado.php" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" >&times;</button>
        <h4 class="modal-title" >Cantidad Pagada</h4>
        <input type="hidden" id="idPagado" name="idPagado">
      </div>
      <div class="modal-body" style="text-align: left; ">

       <div class="col-sm-3">  <h5 class="modal-title" style="padding-top:7px;">Cantidad </h5> </div>
       <div class="col-sm-8"></div>
      
       <div class="input-group"> 
        <input type="text" placeholder="000,000,000.00" class="form-control" name="editar" data-fv-field="price" id="editarpag">
        
        <span class="input-group-addon">
         $
       </span> 

     </div>
   </div>
   <div class="col-sm-1"></div>



   <div class="modal-footer" style="padding-top:35px;">
     <button type="submit"  class="btn btn-success" >Pagar</button>
     <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
   </div>
   </form>
 </div>
</div>
</div>-->
<!--cantidad pagada-->
<!-- editar-->
<div id="editar" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="./codigos/actualizarorden.php" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Información</h4>
        </div>
        <div class="modal-body" style="text-align: center">

          <p>Detalles de la orden  <!--<code></code> -->
          </p>
          <input type="hidden" 
          id="idOrdena" 
          name="idOrdena">
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Departamento </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control col-md-3 col-sm-3 col-xs-1"  style="" placeholder="Departamento" 
              name="deparatmento" 
              id="departamentoeditar">
                <?php 
                include './conexion.php';
                $consulta=$mysqli->query("select * from departamentos order by id_departamento ASC")or die($mysqli->error);
                while ( $fila=mysqli_fetch_array($consulta)) {

                 ?>
                 <option value="<?php echo $fila['id_departamento'] ?>"><?php echo $fila['departamento'] ?></option>
                 <?php } ?>
               </select>
             </div>
           </div>
                  <br>
           <div class="clearfix"></div>
           <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name" margin-top="2px">No Factura  
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  class="form-control col-md-7 col-xs-12"  
              name="factura" 
              id="facturaeditar"
              placeholder="Numero de la Factura" required="required" type="text" >
            </div>
          </div>
          <div class="clearfix"></div>
                    <br>

          <div class="item form-group" style="display:none;">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Fecha  
            </label>
            <fieldset>
              <div class="control-group">
                <div class="controls">

                  <div class="col-md-11 xdisplay_inputx form-group has-feedback" style="    width: 67%;">
                    <input type="date" class="form-control has-feedback-left" 
                    id="fecha" placeholder="Fecha" aria-describedby="inputSuccess2Status4"
                     name="fechaeditar">
                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                    <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                  </div>

                </div>
              </div>
            </fieldset>

          </div>
                  <br>
          <div class="clearfix"></div>

          <div class="item form-group" >
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Obra  
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control col-md-3 col-sm-3 col-xs-1"  style="" placeholder="Obras"
               name="obras"
               id="obraseditar" 
               >
                <option value="1">Obras</option>
                <?php 
                include './conexion.php';
                $consulta=$mysqli->query("select * from cuentas order by id_cuenta ASC")or die($mysqli->error);
                while ( $fila=mysqli_fetch_array($consulta)) {

                 ?>
                 <option value="<?php echo $fila['id_cuenta'] ?>"><?php echo $fila['nombre'] ?></option>
                 <?php } ?>
               </select>
             </div>
           </div>
           <div class="clearfix"></div>
           <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cuenta">Cuenta  
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12" >
             <select class="form-control col-md-3 col-sm-3 col-xs-1" placeholder="Cuentas" 
             id="cuentas" 
             name="cuentaseditar">
               
               <?php 
               include './conexion.php';
               $consulta=$mysqli->query("select * from cuentas order by id_cuenta ASC")or die($mysqli->error);
               while ( $fila=mysqli_fetch_array($consulta)) {

                 ?>
                 <option value="<?php echo $fila['id_cuenta'] ?>"><?php echo $fila['cuenta'] ?></option>
                 <?php } ?>
               </select>
             </div>
           </div>
           <div class="clearfix"></div>
           <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Observaciones  
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  class="form-control col-md-7 col-xs-12" 
               name="observaciones"
               id="observacioneseditar"
                placeholder="Observaciones dentro de la obra" required="required" type="text">
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Vehículo  
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  class="form-control col-md-7 col-xs-12" 
              name="vehiculo" 
              id="vehiculoeditar"
              placeholder="Vehiculo" required="required" type="text">
            </div>
          </div>

 <div class="clearfix"></div>
<div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12">Proveedor</label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control col-md-3 col-sm-3 col-xs-1"
                name="proveedor"
                class="form-control col-md-8 col-xs-12" tabindex="-1" style="width:100%;">
               
                <?php 
                include './conexion.php';
                $consulta=$mysqli->query("select * from proveedores order by id_proveedor ASC")or die($mysqli->error);
                while ( $fila=mysqli_fetch_array($consulta)) {

                 ?>
                 <option value="<?php echo $fila['id_proveedor'] ?>"><?php echo $fila['nombre'] ?></option>
                 <?php } ?>
               </select>
             </div>            
           </div>
 <div class="clearfix"></div>
           <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Material  <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="material" class="form-control col-md-7 col-xs-12" 
              name="material" placeholder="Material a comprar"  type="text"
                 required="required" >
            </div>
          </div>
           <div class="clearfix"></div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Cantidad  <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="cantidad" class="form-control col-md-7 col-xs-12" 
              name="cantidad" placeholder="Unidades a comprar"  type="text"
            
               required="required" >
            </div>
          </div>
           <div class="clearfix"></div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Precio unitario <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="precio" class="form-control col-md-7 col-xs-12" 

              name="precio" placeholder="Precio unitario"  type="text"
                required="required" >
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-warning" >Editar</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
<!--Editar-->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

</div>
</div>
</div>
</div>
</div>
</div>

<!-- /page content -->

<!-- footer content -->
<footer>
  <div class="pull-right">
    <a href="http://www.itsncg.edu.mx/"> Instituto Tecnológico Superior </a>de Nuevo Casas Grandes
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
<!-- Datatables -->
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

<script >
  $(".btnEliminar").on('click',function(){
    var id=$(this).data('id');
    $("#idOrdene").val(id);
  });
  $(".btnImprimir").on('click',function(){
    var id=$(this).data('id');
    $("#idOrdenimp").val(id);
    var departamento=$(this).data('departamento');
     $("#departamento").val(departamento);
    var factura=$(this).data('factura');
     $("#factura").val(factura);
    var fecha=$(this).data('fecha');
     $("#fecha").val(fecha);
    var obra=$(this).data('obra');
     $("#obra").val(obra);
    var observaciones=$(this).data('observaciones');
     $("#observaciones").val(observaciones);
    var vehiculo=$(this).data('vehiculo');
     $("#vehiculo").val(vehiculo);
    var total=$(this).data('total');
     $("#total").val(total);
    var status=$(this).data('status');
     $("#status").val(status);
    var proveedor=$(this).data('proveedor');
     $("#proveedor").val(proveedor);
    var material=$(this).data('material');
     $("#material").val(material);
    var cantidad=$(this).data('cantidad');
     $("#cantidad").val(cantidad);
    var precio=$(this).data('precio');
     $("#precio").val(precio);

  });

  $(".btnEditar").on('click',function(){
    var id=$(this).data('id');
     $("#idOrdena").val(id);
             var departamento=$(this).data('departamento');
           $("#departento").val(departamento);
    var factura=$(this).data('factura');
    $("#fac").val(factura);
    var fecha=$(this).data('fecha');
    $("#fecha").val(fecha);
    var observaciones=$(this).data('observaciones');
    $("#observaciones").val(observaciones);
    var vehiculo=$(this).data('vehiculo');
    $("#veh").val(vehiculo);
 });
  $(".btnDevengado").on('click',function(){
    var id=$(this).data('id');
     $("#idDevengado").val(id);
   
    var c1=$(this).data('cantidad');
    $("#editarCantidad").val(c1);
     var p1=$(this).data('poliza');
    $("#editarPoliza").val(p1);
  });
  $(".btnPagado").on('click',function(){
    var id=$(this).data('id');
     $("#idPagado").val(id);
    var c2=$(this).data('pagado');
    $("#editarpag").val(c2);

 });
</script>

</body>
</html>

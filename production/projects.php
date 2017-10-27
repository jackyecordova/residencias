
<!--<?php 

//session_start();
//if (isset($_SESSION['miSesion']{
//      $arreglo=$_SESSION['miSesion'];
//      }else{
//        header("Location: ./login.html");  

//}
 ?>-->
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
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
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
              <h3>Ordenes <small>Registro </small></h3>
            </div>


            
            <div class="clearfix"></div>

            <div class="row" style="margin-bottom:50px;">
              <div class="col-md-12">
                <div class="x_panel">


                 <div class="col-sm-3">  <h5 class="modal-title" style="padding-top:7px;"></h5> </div>
                 <div class="col-sm-8">  </div>

                 <div class="title_right" 
                 style=" margin-left: -150px;">

                 <div class="col-md-8 col-sm-5 col-xs-12 form-group pull-right top_search">

                  <div class="input-group">
                  <form method="get" action="projects.php">
                      
                    <?php //include 'search.php'; ?>
                    <span class="input-group-btn">
                    <input type="text" class="form-control" name="busqueda" id="busqueda"  placeholder="">
                      <button class="btn btn-default" type="submit" >Buscar</button>
                    </span>
                  </form>
                  
                  </div>           
                </div>


              </div>
              <div class="btn-group" class="pull-rigth" style="margin-left: 260px;">
               <button class="btn btn-info"type="button">
                <i class="fa fa-print"></i>
              </button>

              <div class="btn-group" class="pull-rigth">
               <button class="btn btn-success"type="button">
                <i class="fa fa-floppy-o"></i>
              </button>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 ">
            </div>


            <div class="clearfix"></div>


          </div>

          <div class="x_content" id="result">

            <p>REGISTRO DE LAS ORDENES EMITIDAS</p>


            <!-- start project list -->
            <table class="table table-striped projects">
              <thead>
                <tr>
                  <th style="width: 1%">Id</th>
                  <th style="width: 25%">Obra</th>
                  <th style="width: 32%">Observaciones</th>
                  <th class="status">Status</th>
                  <th> 
                    <div class="btn-group" class="pull-rigth" style="margin-left">
                     <button class="btn btn-info" type="button" style="margin-left: 30%;"
                     id="filtrardev">
                     <i class="fa fa-filter" style="font-size: 10px;"></i>
                   </button>
                 </div>
               </th>
               <th>
                <div class="btn-group" class="pull-rigth" style="margin-left;">
                 <button class="btn btn-info" type="button" style="margin-left: 30%;"
                 id="filtrardpag">
                 <i class="fa fa-filter" style="font-size: 10px;"></i>
               </button>
             </div>
           </th>
           <th style="width: 20%"></th>
         </tr>
       </thead>
       <tbody>

         <?php 
         include './conexion.php';
        //where orden.activo='no'
        
         if(isset($_GET['busqueda'])){
                 $consulta=$mysqli->query("
                SELECT orden.*,obras.*,departamentos.departamento

                FROM ((orden
                  INNER JOIN obras ON orden.id_obra = obras.id_obra)

               INNER JOIN departamentos ON orden.id_departamento = departamentos.id_departamento)
               where orden.activo='si' and observaciones like '%".$_GET['busqueda']."%';

               ")or die($mysqli->error);
               }else{
                 $consulta=$mysqli->query("
                  SELECT orden.*,obras.*,departamentos.departamento

                  FROM ((orden
                    INNER JOIN obras ON orden.id_obra = obras.id_obra)

                 INNER JOIN departamentos ON orden.id_departamento = departamentos.id_departamento)
                 where orden.activo='si';

         ")or die($mysqli->error);
               }

         while ( $fila=mysqli_fetch_array($consulta)) {

          ?>  <?php 
          $todo=$fila['total_compromet'];
          $dev=$fila['ppto_dev'];
          $pag=$fila['ppto_pag'];
          if ($dev<$todo) {
            $res=$dev * 100 / $todo;
            echo $res;
          }else {
            $res =$pag * 100 / $todo;

          }
          if ($dev<$todo) {
                                    //blanco
           $pagado='background-color:rgba(194, 47, 47, 0.08)';


         }else if ($pag==$todo) {
          $pagado='background-color:rgba(24, 139, 26, 0.17)';
        }else{
                                    //rojo

         $pagado='background-color:rgba(00, 00, 00, 0.0)';
       }
       ?>
       <tr style="<?php  echo $pagado?>">
        <td><?php echo $fila['ord_id'] ?></td>
        <td>
          <a><?php echo $fila['descripcion'] ?></a>

          <small><?php echo $fila['departamento'] ?></small>
        </td>
        <td>

         <a> <?php echo $fila['observaciones'] ?></a>

       </td>
       <td class="project_progress ">




        <div class="progress progress_sm">
          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php  echo $res?>" ></div>
        </div>
        <small><?php  echo $res?>% COMPLETADO</small>
      </td>
      <td>
        <button type="button" class="btn btn-success btn-xs btnDevengado"  data-method="getCroppedCanvas"
        data-id="<?php echo $fila['ord_id'] ?>"
        data-toggle="modal" data-target="#Devengada"
        data-cantidad="<?php echo $fila['ppto_dev'] ?>"
        data-poliza="<?php echo $fila['poliza_dev'] ?>">
        Devengado
      </button>
    </td>
    <td> <button type="button" class="btn btn-success btn-xs btnPagado"
      data-id="<?php echo $fila['ord_id'] ?>"
      data-toggle="modal" 
      data-target="#Pagada"
      data-pagado="<?php echo $fila['ppto_pag'] ?>">
      Pagado</button>
    </td>
    <td>
     <a href="#" class="btn btn-primary btn-xs" 
     data-toggle="modal" 
     data-target="#ver">
     <i class="fa fa-folder"></i> Ver </a>
     <a href="#" class="btn btn-info btn-xs btnEditar"
     data-id="<?php echo $fila['ord_id'] ?>"
     data-toggle="modal" 
     data-target="#editar"
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
     data-target="#eliminar">
     <i class="fa fa-trash-o"></i> Eliminar</a>

   </td>
 </tr>

 <?php 

} ?>



</tbody>
</table>

<div class="clearfix"></div>
<!-- end project list -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

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

<!-- Cantidad Pagada-->
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
</div>

<!-- Ver-->
<div id="ver" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detalles</h4>
      </div>

      <div class="row">
        <div class="col-md-12 col-sm-6 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Reporte <small>Detalles de la orden</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <div class="btn-group" class="pull-rigth" style="margin-left">
                 <button class="btn btn-info"type="button">
                  <i class="fa fa-print"></i>
                </button>
              </div>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <table class="table" >
              <thead>
                <tr >
                  <td class="col-md-3">Departamento de</td><td class="col-md-3">Oficialia Mayor</td>

                  <td class="col-md-3">Orden Numero de Factura</td><td class="col-md-3">RECIBO 1621016598</td>
                </tr>
                <tr >
                  <td class="col-md-3">Fecha</td><td class="col-md-3">12/09/2017</td>

                  <td class="col-md-3">Cuenta</td><td class="col-md-3">01280413955</td>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Cancelar</button>
        </div>  

      </div>                                                                                
    </div>
  </div>
</div>
</div>
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
          <input type="hidden" id="idOrdena" name="idOrdena">
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Departamento </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control col-md-3 col-sm-3 col-xs-1"  style="" placeholder="Departamento" name="dpto" >
                <option value="1">Departamentos</option>
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

           <div class="clearfix"></div>
           <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name" margin-top="2px">No Factura  
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  class="form-control col-md-7 col-xs-12"  name="factura" placeholder="Numero de la Factura" required="required" type="text" id="fac">
            </div>
          </div>
          <div class="clearfix"></div>


          <div class="item form-group" >
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Fecha  
            </label>
            <fieldset>
              <div class="control-group">
                <div class="controls">

                  <div class="col-md-11 xdisplay_inputx form-group has-feedback" style="    width: 67%;">
                    <input type="date" class="form-control has-feedback-left" id="fech" placeholder="Fecha" aria-describedby="inputSuccess2Status4" name="fecha">
                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                    <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                  </div>

                </div>
              </div>
            </fieldset>

          </div>

          <div class="clearfix"></div>

          <div class="item form-group" >
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Obra  
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control col-md-3 col-sm-3 col-xs-1"  style="" placeholder="Obras" name="ob">
                <option value="1">Obras</option>
                <?php 
                include './conexion.php';
                $consulta=$mysqli->query("select * from obras order by id_obra ASC")or die($mysqli->error);
                while ( $fila=mysqli_fetch_array($consulta)) {

                 ?>
                 <option value="<?php echo $fila['id_obra'] ?>"><?php echo $fila['descripcion'] ?></option>
                 <?php } ?>
               </select>
             </div>
           </div>
           <div class="clearfix"></div>
           <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cuenta">Cuenta  
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12" >
             <select class="form-control col-md-3 col-sm-3 col-xs-1" placeholder="Cuentas" name="cu">
               <option value="1">Cuentas</option>
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
              <input id="observaciones" class="form-control col-md-7 col-xs-12"  name="observaciones" placeholder="Observaciones dentro de la obra" required="required" type="text">
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Vehículo  
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="veh" class="form-control col-md-7 col-xs-12" name="vehiculo" placeholder="Vehiculo" required="required" type="text">
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
<tbody>


</tbody>


<!-- footer content -->

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
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- Cropper -->
<script src="../vendors/cropper/dist/cropper.min.js"></script>
<script type="./index.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
<script type="text/javascript">

  $(".btnEliminar").on('click',function(){
    var id=$(this).data('id');
    $("#idOrdene").val(id);

  });

  $(".btnEditar").on('click',function(){
    var id=$(this).data('id');
     $("#idOrdena").val(id);

    var factura=$(this).data('factura');
    $("#fac").val(factura);

    var fecha=$(this).data('fecha');
    $("#fech").val(fecha);

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
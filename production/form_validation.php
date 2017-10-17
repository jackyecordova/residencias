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

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <!-- bootstrap-datetimepicker -->
  <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
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
              <h3>Ordenes</h3>
            </div>


          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Generar una nueva orden<small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Cancelar</a>
                        </li>

                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <form class="form-horizontal form-label-left" novalidate action="./codigos/orden.php" method="post">

                    <p>Detalles de la orden  <!--<code></code> -->
                    </p>




                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps anchor">
                        <li>
                          <a href="#step-1" class="selected" isdone="1" rel="1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                              Paso 1<br>
                              <small>Datos Generales de la orden</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2" class="disabled" isdone="0" rel="2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                              Paso 2<br>
                              <small>Información de la orden</small>
                            </span>
                          </a>
                        </li>

                      </ul>
                      
                      
                      
                      

                      <div class="stepContainer" style="height: 300px;"><div id="step-1" class="content" style="display: block;">

                        <div class="clearfix"></div>
                        <!--formulario-->
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Departamento</label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="select2_single form-control"
                            name="departamento"
                            class="form-control col-md-7 col-xs-12" tabindex="-1" style="width:66%;">
                            <option></option>


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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">No Factura  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="obra" class="form-control col-md-7 col-xs-12" 
                          name="nofactura" placeholder="Número de factura"  type="text">
                        </div>
                      </div>
                      <div class="clearfix"></div>




                      <div class="col-xs-12 col-md-12" style="display:blick;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" 
                        for="fecha"
                        
                        >Fecha  <span class="required">*</span>
                      </label>
                      <fieldset>
                        <div class="control-group">
                          <div class="controls">

                            <div class="col-md-11 xdisplay_inputx form-group has-feedback" style="    width: 67%;">
                              <input type="text" class="form-control has-feedback-left" id="single_cal4"  name ="fecha"
                              placeholder="First Name" aria-describedby="inputSuccess2Status4">
                              <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                              <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                            </div>

                          </div>
                        </div>
                      </fieldset>

                    </div>






                    <div class="clearfix"></div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Obra  <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="obra" class="form-control col-md-7 col-xs-12"  
                        name="obra"
                        required
                        placeholder="Nombre de la Obra"  type="text">
                      </div>
                    </div>


                    <!--Option para las cuentas existentes-->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Cuenta <span class="required">*</span></label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="select2_single form-control"
                        name="cuenta"
                        class="form-control col-md-7 col-xs-12" tabindex="-1" style="width:66%;" >
                        <option></option>


                        <?php 
                        include './conexion.php';
                        $consulta=$mysqli->query("select * from cuentas order by id_cuenta ASC")or die($mysqli->error);
                        while ( $fila=mysqli_fetch_array($consulta)) {


                         ?> <!--Concatenar el nombre de la cuenta-->
                         <option value="<?php echo $fila['id_cuenta'] ?>"><?php echo $fila['cuenta']  ?></option>
                         <?php } ?>
                       </select>
                     </div>
                   </div>








                   <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Observaciones  <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="observaciones" class="form-control col-md-7 col-xs-12" 
                      name="observaciones"
                      placeholder="Observaciones dentro de la obra" type="text">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Vehículo  <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="vehiculo" class="form-control col-md-7 col-xs-12" 
                      name="vehiculo"
                      placeholder="Vehículo usado"
                      type="text">
                    </div>
                  </div>






                </div><div id="step-2" class="content" style="display: none;">
                <h2 class="StepTitle">Paso 2 </h2>


                <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Proveedor</label>
                 <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control"
                  name="proveedor"
                  class="form-control col-md-7 col-xs-12" tabindex="-1" style="width:66%;">
                  <option></option>


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











             <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Material  <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="material" class="form-control col-md-7 col-xs-12" 
                name="material" placeholder="Material a comprar"  type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Cantidad  <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="cantidad" class="form-control col-md-7 col-xs-12" 
                name="cantidad" placeholder="Unidades a comprar"  type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Precio unitario <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="precio" class="form-control col-md-7 col-xs-12" 
                name="precio" placeholder="Precio unitario"  type="text">
              </div>
            </div>
            <div class="col-md-6 col-md-offset-3" style="margin-left: 35%;padding-bottom:20px;padding-top:20px;  ">
             <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Devengada">Devengado</button>
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Pagado">Pagado</button>
           </div>


         </div>
       </div>
       <div class="ln_solid"></div>
    <!--   <div class="form-group">
        <div class="col-md-6 col-md-offset-3" style="margin-left: 35%;padding-bottom:20px;padding-top:20px; ">
          <button type="submit" class="btn btn-primary">Cancelar</button>
          <button id="send" type="submit" class="btn btn-success">Enviar</button>
        </div>
      </div>
    </div>



    Ventana gris
    <div class="well" style="overflow: auto">



      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3" style="margin-left: 35%;padding-bottom:20px;padding-top:20px; ">
          <button type="submit" class="btn btn-primary">Cancelar</button>
          <button id="send" type="submit" class="btn btn-success">Enviar</button>
        </div>
      </div>-->
    </div>
  </form>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /page content -->




<!-- Cantidad Devengado-->
<!-- Cantidad Devengado-->
<!-- Cantidad Devengado-->
<!-- Cantidad Devengado-->
<div id="Devengada" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" >&times;</button>
        <h4 class="modal-title" >Cantidad Devengada</h4>
      </div>
      <div class="col-xs-12 col-md-12" style="display:none;">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" 
        for="fecha"
        name ="fechadev"
        >Fecha  <span class="required">*</span>
      </label>
      <fieldset>
        <div class="control-group">
          <div class="controls">

            <div class="col-md-11 xdisplay_inputx form-group has-feedback" style="    width: 67%;">
              <input type="text" class="form-control has-feedback-left" id="single_cal4" 
              placeholder="First Name" aria-describedby="inputSuccess2Status4">
              <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
              <span id="inputSuccess2Status4" class="sr-only">(success)</span>
            </div>

          </div>
        </div>
      </fieldset>

    </div>
    <div class="modal-body" style="text-align: left; ">                     
     <div class="col-sm-3">  <h5 class="modal-title" style="padding-top:7px;">Cantidad </h5> </div>
     <div class="col-sm-8">  </div>
     <div class="input-group"> 
      <input type="number" placeholder="000,000,000.00" class="form-control"
      name="dev" 
      data-fv-field="price">
      <span class="input-group-addon">
       $
     </span> 
   </div>
 </div>
 <!--poliza -->
 <div class="modal-body" style="text-align: left;margin-top: -20px;text-align: left; ">

   <div class="col-sm-3">  <h5 class="modal-title" style="padding-top:7px;">Póliza </h5> </div>
   <div class="col-sm-8">  </div>
   <div class="input-group"> 
    <input type="text"  class="form-control"
    name="poldev"
    data-fv-field="price">
    <span class="input-group-addon">

    </span> 
  </div>

</div>
<!--poliza -->
<div class="col-sm-1"></div>
<div class="modal-footer" style="padding-top:35px;">
 <button type="button"  class="btn btn-success" >Devengar</button>
 <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
</div>
</div>

</div>
</div>

<!-- Cantidad Devengado-->
<!-- Cantidad Devengado-->
<!-- Cantidad Devengado-->
<!-- Cantidad Devengado-->





<!-- Cantidad Pagado-->
<!-- Cantidad Pagado-->
<!-- Cantidad Pagado-->
<!-- Cantidad Pagado-->

<div id="Pagado" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" >&times;</button>
        <h4 class="modal-title" >Cantidad Pagada</h4>
      </div>
      <div class="col-xs-12 col-md-12" style="display:none;">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" 
        for="fecha"
        name ="fechapago"
        >Fecha  <span class="required">*</span>
      </label>
      <fieldset>
        <div class="control-group">
          <div class="controls">

            <div class="col-md-11 xdisplay_inputx form-group has-feedback" style="    width: 67%;">
              <input type="text" class="form-control has-feedback-left" id="single_cal4" 
              placeholder="First Name" aria-describedby="inputSuccess2Status4">
              <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
              <span id="inputSuccess2Status4" class="sr-only">(success)</span>
            </div>

          </div>
        </div>
      </fieldset>

    </div>
    <div class="modal-body" style="text-align: left; ">

     <div class="col-sm-3">  <h5 class="modal-title" style="padding-top:7px;">Cantidad </h5> </div>
     <div class="col-sm-8">  </div>
     <div class="input-group"> 
      <input type="numeric" class="form-control" placeholder="000,000,000.00" 
      name="pag"
      data-fv-field="price">
      <span class="input-group-addon">
       $
     </span> 
   </div>
 </div>
 <!--poliza -->
 <div class="modal-body" style="text-align: left;margin-top: -20px;text-align: left; ">

   <div class="col-sm-3">  <h5 class="modal-title" style="padding-top:7px;">Póliza de Pagado </h5> </div>
   <div class="col-sm-8">  </div>
   <div class="input-group"> 
    <input type="number"  max="<?php echo $_POST["dev"] ?>" class="form-control" 
    name="polpag"
    data-fv-field="price">
    <span class="input-group-addon">
    </span> 
  </div>

</div>
<!--poliza -->
<div class="col-sm-1"></div>



<div class="modal-footer" style="padding-top:35px;">
 <button type="button"  class="btn btn-success" >Pagar</button>
 <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
</div>
</div>




</div>
</div>


<!-- Cantidad Pagado-->
<!-- Cantidad Pagado-->
<!-- Cantidad Pagado-->
<!-- Cantidad Pagado-->
<!-- Cantidad Pagado-->
<!--end Cantidad Pagado-->


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
<!-- validator -->
<script src="../vendors/validator/validator.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-datetimepicker -->    
<script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!--  <script type="./js/the-basics.js"></script>-->
<!-- jQuery Smart Wizard -->
<script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
<script type="text/javascript">
  $(document).on('ready',function(){
    $(".buttonFinish").on('click',function  (e) {
    //  alert("sdasd");
      // e.preventDefault();
    });
   
  })
</script>
</body>
</html>
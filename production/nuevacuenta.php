
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
  <!-- bootstrap-daterangepicker -->
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <!-- bootstrap-datetimepicker -->
  <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
  <!-- Ion.RangeSlider -->
  <link href="../vendors/normalize-css/normalize.css" rel="stylesheet">
  <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
  <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
  <!-- Bootstrap Colorpicker -->
  <link href="../vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

  <link href="../vendors/cropper/dist/cropper.min.css" rel="stylesheet">
<!-- estilomenoney 
<link rel="stylesheet" type="text/css" href="./css/estilomoney.css">-->
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
            <h3>Generar una nueva cuenta</h3>
          </div>


        </div>
        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Cuenta<small></small></h2>
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

                <form class="form-horizontal form-label-left" novalidate 
                action="./codigos/cuentas.php" method="post">

                <p>Registro del nuevo departamento <!--<code></code> -->
                </p>
                <span class="section">Información</span>



                <!--Ventana gris-->
                <div class="well" style="overflow: auto">








                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >No de cuenta 
                     <span class="required">*</span>
                   </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                    <input  class="form-control col-md-7 col-xs-12"  data-inputmask="'mask' : '*-*-*-*-***-****-***'"
                    name="numero" 
                    placeholder="Número de la Cuenta" 
                    type="text">
                  </div>
                </div>







                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nombre 
                   <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12" >
                  <input  class="form-control col-md-7 col-xs-12" 
                  name="nombre"
                  placeholder="Nombre de la Cuenta"  type="text">


                </div>
              </div>



              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Cantidad  
                  <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12" >
                  <input  class="form-control col-md-7 col-xs-12" 
                  name="cantidad"
                  placeholder="Cantidad de la Cuenta" type="text">


<!--
                  <div class="form-row">
                    <label for="c2">Currency w bootstrap</label>
                    <div class="input-group"> 
                      <span class="input-group-addon">$</span>
                      <input type="number" value="1000" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c2" />
                    </div> 
                  </div>
                </div>


-->



                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                   <a href="./vercuenta.php"> <button type="buton" class="btn btn-primary">Cancelar</button></a>
                   <button id="send" type="submit" class="btn btn-success">Guardar</button>
                 </div>
               </div>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
<!-- /page content -->







<!-- Cantidad Pagado-->
<div id="Pagado" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" >&times;</button>
        <h4 class="modal-title" >Cantidad Pagada</h4>
      </div>
      <div class="modal-body" style="text-align: left; ">

       <div class="col-sm-3">  <h5 class="modal-title" style="padding-top:7px;">Cantidad </h5> </div>
       <div class="col-sm-8">  </div>
       <div class="input-group"> 
        <input type="text" class="form-control" placeholder="000,000,000.00" name="price" data-fv-field="price">

      </div>
    </div>
    <div class="col-sm-1"></div>



    <div class="modal-footer" style="padding-top:35px;">
      <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
      <button type="button"  class="btn btn-success" >Guardar</button>

    </div>
  </div>

</div>
</div>


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
<!-- jquery.inputmask -->
<script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<script type="./js/currency.js"></script>
</body>
</html>
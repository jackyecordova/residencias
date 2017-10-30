
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
              <h3>Generar una nueva Obra</h3>
            </div>


          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Obra<small></small></h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <form class="form-horizontal form-label-left" novalidate action="./codigos/obras.php" method="post">

                    <p>Registro de una nueva obra <!--<code></code> -->
                    </p>
                    <span class="section">Información</span>



                    <!--Ventana gris-->
                    <div class="well" style="overflow: auto">








                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" name="nombre" 
                          placeholder="Descripcion de la obra" type="text">
                        </div>
                      </div>




                     <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >No de cuenta 
                         <span class="required">*</span>
                       </label>
                      
                       <div class="col-md-6 col-sm-6 col-xs-12">
                         <input  class="form-control col-md-7 col-xs-12" 
                          data-inputmask="'mask' : '*-*-*-*-***-****-***'"
                         name="cuenta" 
                         placeholder="Número de la Cuenta" 
                         type="text">
                       </div>
                         <button type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                     </div>-->

   <!--Option para las cuentas existentes-->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Cuenta <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-9 col-xs-12">
                        <select class="select2_single form-control"
                        name="cuenta"
                        class="form-control col-md-7 col-xs-12" tabindex="-1" style="width:100%;" >
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



                       <button type="button" class="btn btn-primary"  ><i class="fa fa-plus" data-target="#nuevacuenta" aria-hidden="true"></i></button>
                   </div>

<!--
                     <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="costo">Costo  <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12" >
                        <input class="form-control col-md-7 col-xs-12" 
                        name="costo"
                        placeholder="Costo de la obra"  type="number">


                      </div>
                    </div>
                    
-->
                    

                    

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Cancelar</button>
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






          <!-- editar-->
          <div id="nuevacuenta" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="./codigos/cuentas.php" method="post">
                  <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Editar información</h4>
                    <input type="hidden" id="idcuentaeditar" name="idcuentaeditar">

                  </div>  <div class="clearfix"></div>
                  <div class="modal-body" style="text-align: center">

           




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


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#editar">Guardar</button>
              </div>
            </form>

          </div>
        </div>
      </div>
      <!-- editar-->









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

</body>
</html>
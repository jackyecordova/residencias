
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

                 
                    <p>Registro de una nueva obra <!--<code></code> -->
                    </p>
                    <span class="section">Información</span>



                    <!--Ventana gris-->
                    <div class="well" style="overflow: auto">








                     <section class="login_content">
      <form action="./codigos/nuevousuario.php" method="post">
        <h1>Crear Cuenta</h1>
        <div style=" width: 50%; margin-left: 25%;">
          <input type="text" class="form-control" placeholder="Nombre de Usuario" required=""
          id="nombre"
          name="nombre"
          required="required"  />
        </div>
        <div style=" width: 50%; margin-left: 25%;">
          <input type="email" class="form-control" placeholder="Email" required=""
          id="correo"
          name="correo" />
        </div>
        <div style=" width: 50%; margin-left: 25%;">
          <input type="password" class="form-control" placeholder="Contraseña" required=""  
          id="contrasena"
          name="contrasena"
          required="required"  />
        </div>


        <div style=" width: 50%; margin-left: 25%;">
          <select type="text" class="form-control" 
           placeholder="Nivel" style="margin-bottom:20px;" required="required" 
          id="nivel" 
          name="nivel" >
          <option value="Admin">Admin</option>
          <option value="Oficial Mayor">Oficial Mayor</option>
          <option value="Obras Públicas">Obras Públicas</option>
          <option value="Tesorero">Tesorero</option>
        </select>
      </div>
      <div style=" width: 50%; margin-left: 25%;">
        <input type="text" class="form-control" placeholder="Puesto" required="required" 
        id="puesto"
        name="puesto" />
      </div>

      <div>
        <button class="btn btn-default" type="submit" >Registrar</button> 
      </div>

      <div class="clearfix"></div>

      <div class="separator">
       <p class="change_link">
         <a href="#signin" class="to_register"> Iniciar Sesión</a>
       </p>


       <div class="clearfix"></div>
       <br />

       <div>
        <h1><i class="fa fa-university"></i> Presidencia Municipal</h1>
        <p>de Nuevo Casas Grandes</p>
      </div>
    </div>
  </form>
</section>

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
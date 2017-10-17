
<!--<?php 

//session_start();
//if (isset($_SESSION['miSesion']{
//      $arreglo=$_SESSION['miSesion'];
//      }else{
//        header("Location: ./login.html");  

//}
 ?>-->
 <!DOCTYPE php>
 <php lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/php; charset=UTF-8">
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
    
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link href="./css/estiloindex.css" rel="stylesheet">
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
       <div class="row">
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="col-md-12 col-sm-12 col-xs-12" class="logotipo" >
            <div class="dashboard_graph" >

              <div class="row x_title">
                <div class="col-md-6">
                  <h3>Presidencia Municipal <small> Nuevo Casas Grandes</small></h3>
                </div>
                
              </div>
            </div>


            

            <div class="col-md-6 col-sm-6 col-xs-10 " style="padding:100px">

              <h1>Control Presupuestal<small></small></h1>
              <h2>$  <?php 
                include './conexion.php';
                $consulta=$mysqli->query("select * from presupuestos ")or die($mysqli->error);
                       //Imprimir si es de este año
                while ( $fila=mysqli_fetch_array($consulta)) {
                 echo $fila['monto'];}
                 ?></h2>
                 <br>
                 <h3><small>Presupuesto otorgado para el año 2017</small> </h3>

               </div>
               <!-- start of weather widget -->
               
               <div class="col-md-4 col-sm-4 col-xs-12  pull-right" class="clima"  > 

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Clima <small>Usuario</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="temperature"><b>Lunes</b>, 07:30 AM


                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="weather-icon">
                          <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="weather-text">
                          <h2>Nuevo Casas Grandes<br><i>Chihuahua</i></h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="weather-text pull-right">
                        <h3 class="degrees">23</h3>
                      </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row weather-days">
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Lun</h2>
                          <h3 class="degrees">25</h3>
                          <canvas id="clear-day" width="32" height="32"></canvas>
                          <h5>15 <i>km/h</i></h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Mar</h2>
                          <h3 class="degrees">25</h3>
                          <canvas height="32" width="32" id="rain"></canvas>
                          <h5>12 <i>km/h</i></h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Mier</h2>
                          <h3 class="degrees">27</h3>
                          <canvas height="32" width="32" id="snow"></canvas>
                          <h5>14 <i>km/h</i></h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Jue</h2>
                          <h3 class="degrees">28</h3>
                          <canvas height="32" width="32" id="sleet"></canvas>
                          <h5>15 <i>km/h</i></h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Vie</h2>
                          <h3 class="degrees">28</h3>
                          <canvas height="32" width="32" id="wind"></canvas>
                          <h5>11 <i>km/h</i></h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Sab</h2>
                          <h3 class="degrees">26</h3>
                          <canvas height="32" width="32" id="cloudy"></canvas>
                          <h5>10 <i>km/h</i></h5>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>

              </div>

              <!-- end of weather widget -->
              <div class="clearfix"></div>
              <div class="alert alert-success">
                <ul class="margin-bottom-none padding-left-lg">
                  <i class="fa fa-info-circle fa-lg fa-li"></i>
                  <h2>Datos generales del presupuesto de cada departamento.</h2>
                </ul>

              </div>
              <?php 
              include './conexion.php';
              $consulta=$mysqli->query("select * from departamentos order by id_departamento ASC")or die($mysqli->error);
              while ( $fila=mysqli_fetch_array($consulta)) {
                    # code...
               ?>

               <!-- <div class="clearfix"></div>-->
               
               

               <div class="col-md-4 col-sm-4 col-xs-12" >
                <div class="x_panel tile fixed_height_320 overflow_hidden" class="graficas">
                  <div class="x_title">
                    <h2><?php echo $fila['departamento'] ?></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="" style="width:100%">

                      <tr>
                        <td>
                          <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                        </td>
                        <td>
                          <table class="tile_info">
                            <tr>
                              <td>
                                <p><i class="fa fa-square blue"></i>Comprometido </p>
                              </td>
                              <td>30%</td>
                            </tr>
                            <tr>
                              <td>
                                <p><i class="fa fa-square green"></i>Devengado</p>
                              </td>
                              <td>10%</td>
                            </tr>
                            <tr>
                              <td>
                                <p><i class="fa fa-square purple"></i>Pagado </p>
                              </td>
                              <td>20%</td>
                            </tr>
                            <tr>
                              <td>
                                <p><i class="fa fa-square aero"></i>Restante </p>
                              </td>
                              <td>15%</td>
                            </tr>
                            
                          </table>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <?php  } ?>


            </div>
            <br>


            <div class="clearfix"></div>

            <div class="alert alert-success">
              <ul class="margin-bottom-none padding-left-lg">
                <i class="fa fa-info-circle fa-lg fa-li"></i>
                <h2>Datos generales de las cuentas de cada departamento.</h2>
              </ul>

            </div>
            <div class="clearfix"></div>

            <div class="col-md-6 col-sm-6 col-xs-12   " style="width:100%;">
              <div class="x_panel">
                <div class="x_title">
                  <h2><i class="fa fa-align-left"></i> Cuentas / Departamentos <small></small></h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <!-- start accordion -->
                  <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">






                   <?php 
                   include './conexion.php';
                   $consulta=$mysqli->query("select * from cuentas order by id_cuenta ASC")or die($mysqli->error);
                   $cont=0;
                   while ( $fila=mysqli_fetch_array($consulta)) {

                    ++$cont;

                    $res= $mysqli->query("SELECT SUM(monto) AS total FROM presupuesto_depa WHERE id_cuenta = ". $fila['id_cuenta'])or die($mysqli->error);
                    $row=$res->fetch_assoc();
                 //  = $fila['cantidad'] 
                    ?>



                    <div class="panel">

                      <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse"
                      data-parent="#accordion " href="#collapseOne<?php echo $cont?>" aria-expanded="false" aria-controls="collapseOne<?php echo $cont?>">
                      <h4 class="panel-title"  >
                        <?php echo $fila['nombre']?> 
                        <small style="margin-right: 20px;margin-left: 10px;">  
                         <?php echo $fila['cuenta']?> 
                       </small> 

                       Total de presupuesto:   $
                       <?php echo $row['total']?>.00</h4>
                       <small>

                       </small>
                    
                   </a>
                   <div id="collapseOne<?php echo $cont?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Departamento</th>
                            <th>Presupuesto</th>

                          </tr>
                        </thead>
                        <tbody>
                          <?php   $con=$mysqli->query("
                           SELECT presupuesto_depa.*, departamentos.departamento
                           FROM presupuesto_depa 

                           INNER JOIN departamentos ON presupuesto_depa.id_departamento = departamentos.id_departamento


                           where id_cuenta=". $fila['id_cuenta'].";"


                           )or die($mysqli->error);
                           while ( $fi=mysqli_fetch_array($con)) {?>
                           <tr>
                            <th scope="row">
                              <?php echo $fi['id_departamento'] ?></th>
                              <td><?php echo $fi['departamento'] ?></td>
                              <td><?php echo $fi['monto'] ?></td>
                              <?php $res=+ $fi['monto'];
                              echo $res ?> 
                            </tr>
                            <?php } 

                            ?>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                  <?php } ?>
                </div>
                <!-- end of accordion -->


              </div>
            </div>
          </div>



          <!-- /top tiles -->



        </div>
        <br />



        <!-- End to do list -->


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
<!-- Chart.js -->
<script src="../vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="../vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="../vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="../vendors/Flot/jquery.flot.js"></script>
<script src="../vendors/Flot/jquery.flot.pie.js"></script>
<script src="../vendors/Flot/jquery.flot.time.js"></script>
<script src="../vendors/Flot/jquery.flot.stack.js"></script>
<script src="../vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="../vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</php>
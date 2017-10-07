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
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Cuentas por departamento</span></a>
            </div>

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
                <h3>Cuentas <small>por cada departamento </small></h3>
              </div>

              
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                 
                   
                   <div class="col-sm-3">  <h5 class="modal-title" style="padding-top:7px;"></h5> </div>
                                 <div class="col-sm-8">  </div>
                        <div class="title_right" 
                               style=" margin-left: -300px;">
                   
                      <div class="col-md-8 col-sm-5 col-xs-12 form-group pull-right top_search">
                       
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Buscar Registros...">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Buscar</button>
                          </span>
                        </div>           
                        </div>


                      </div>
                     
                 <div class="col-md-2 col-sm-2 col-xs-12 ">
                </div>

               
                    <div class="clearfix"></div>

            
            </div>

                  <div class="x_content">

                    <p>REGISTRO DE LAS CUENTAS POR DEPARTAMENTO</p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width:8%">Id</th>
                           <th style="width: 30%">Departamento</th>
                          <th style="width: 20%">Presupuesto</th>
                          <th style="width: 10%">Cuenta</th>
                           <th style="width: 20%"></th>
                          <th style="width: 15%">Año</th>
                           
                            <th style="width: 5%"></th>
                             <th style="width: 5%"></th>
                          <th></th>
                           <th></th>
                          <th style="width: 20%"></th>
                        </tr>
                      </thead>
                      <tbody>

                     <?php 
                        include './conexion.php';
                        $consulta=$mysqli->query("



                      SELECT presupuesto_depa.*, departamentos.departamento
                              FROM presupuesto_depa 
                             
                              INNER JOIN departamentos ON presupuesto_depa.id_departamento = departamentos.id_departamento;

                        


                          ")or die($mysqli->error);
                        while ( $fila=mysqli_fetch_array($consulta)) {
                           # code...
                    ?>
                        <tr>
                          <td>    <?php echo $fila['id_presupuesto_depa'] ?></td>

                          <td>
                               <?php echo $fila['departamento'] ?></td> 
                          <td>    <?php echo $fila['monto'] ?></td>
                            
                          <td>      <?php echo $fila['id_cuenta'] ?></td>
                             <td>      <?php echo $fila['id_cuenta'] ?></td>
                          
                          <td>

                                  <?php echo $fila['anio'] ?>
                           
                          </td>
                         
                          <td>
                            <a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#editar"><i class="fa fa-pencil"></i> Editar </a></td>
                           <td> <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#eliminar"><i class="fa fa-trash-o"></i> Eliminar </a>
                          </td>
                        </tr>

                      <?php 

                      } ?>

                    
                   
                      </tbody>
                    </table>
                    <!-- end project list -->
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
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
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



    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
     <!-- Cropper -->
    <script src="../vendors/cropper/dist/cropper.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>

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
                <h3>Obras Registradas</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Historial de ordenes registradas </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="datatable_length">
                    <label>Mostrar
                    <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                    <option value="10">
                    10
                    </option>
                    <option value="25">
                    25
                    </option>
                    <option value="50">
                    50
                    </option>
                    <option value="100">
                    100
                    </option>
                    </select> Registros</label></div></div><div class="col-sm-6"><div id="datatable_filter" class="dataTables_filter"><label>Buscar:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <?php  ?>
                      <thead>
                           <tr role="row">
                                  <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" 
                                  colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 35px;">
                                     Id orden
                                  </th>
                                <th class="sorting" tabindex="0" aria-controls="datatable"
                                 rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                  style="width: 270px;">
                                       Obra
                                 </th>
                                <th class="sorting" tabindex="0" 
                                aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" 
                                style="width: 200px;">
                                      Descripcion
                                 </th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                 colspan="1" aria-label="Age: activate to sort column ascending" style="width:120px;">
                                     Cuenta
                                </th>
                               <th class="sorting" tabindex="0" aria-controls="datatable" 
                               rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" 
                               style="width: 120px;">
                                   Fecha
                               </th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                                     aria-label="Salary: activate to sort column ascending" style="width: 120px;">
                                   Cantidad
                                </th>
                            </tr>
                      </thead>


                      <tbody>
                  <?php 
                  include './conexion.php';
                        $consulta=$mysqli->query("select * from orden  order by ord_id DESC")or die($mysqli->error);
                        while ( $fila=mysqli_fetch_array($consulta)) {
                           if ($fila['activo']== "si" ) {
                                    //blanco
                                   $activado='background-color:rgba(0, 0,0, 0)';
                                   

                                  }else {
                                      $activado='background-color:rgba(194, 47, 47, 0.08)';
                                  }
                    # code...
                   ?>
                        
                        <tr role="row" class="odd"  style="<?php echo$activado ?>">
                            <td > <?php echo $fila['ord_id'] ?></td>
                            <td><?php echo $fila['id_obra'] ?></td>
                            <td><?php echo $fila['observaciones'] ?></td>
                            <td><?php echo $fila['id_cuenta'] ?></td>
                            <td><?php echo $fila['fecha'] ?></td>
                            <td><?php echo $fila['total_compromet'] ?></td>
                        </tr>
                        <?php  }?>
                        </tbody>
                    </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" 
                    id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                    </div>
                    <div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                    <ul class="pagination"><li class="paginate_button previous disabled" id="datatable_previous">
                    <a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous
                    </a>
                    </li>
                    <li class="paginate_button active">
                    <a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">1
                    </a>
                    </li>
                    <li class="paginate_button ">
                    <a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0">2
                    </a>
                    </li>
                    <li class="paginate_button ">
                    <a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0">3</a>
                    </li>
                    <li class="paginate_button ">
                    <a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0">4
                    </a>
                    </li>
                    <li class="paginate_button ">
                    <a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0">5
                    </a>
                                 </li>
                                 <li class="paginate_button ">
                                         <a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0">6
                                       </a>
                                  </li>
                                  <li class="paginate_button next" id="datatable_next">
                                    <a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0">Next
                                    </a>
                                 </li>
                             </ul>
                         </div>
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
  </body>
</html>

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
                <h3>Proveedores Registrados</h3>
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
                    <h2>Proveedores</h2>
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
                    <label>Mostrar por:
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
                    </select> </label></div></div><div class="col-sm-6"><div id="datatable_filter" class="dataTables_filter"><label>Buscar:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                           <tr role="row">
                                  <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" 
                                  colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width:80px;">
                                    Id
                                  </th>
                                <th class="sorting" tabindex="0" aria-controls="datatable"
                                 rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                  style="width: 200px;">
                                      Nombre
                                 </th>
                                     <th class="sorting" tabindex="0" 
                                                      aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" 
                                                      style="width:350px;">
                                                            Dirección
                                     </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                       colspan="1" aria-label="Age: activate to sort column ascending" style="width: 150px;">
                                                           Teléfono
                                     </th>
                                       <th class="sorting" tabindex="0" 
                                aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" 
                                style="width: 80px;">
                                    
                                 </th>
                              
                            </tr>
                      </thead>


                      <tbody>
                  <?php 
                  include './conexion.php';
                        $consulta=$mysqli->query("select * from proveedores order by id_proveedor ASC")or die($mysqli->error);
                        while ( $fila=mysqli_fetch_array($consulta)) {
                        
                    # code...
                   ?>
                        
                        <tr role="row" class="odd">
                            <td class="sorting_1"><?php echo $fila['id_proveedor'] ?></td>
                             <td><?php echo $fila['nombre'] ?></td>
                              <td><?php echo $fila['direccion'] ?></td>
                            <td><?php echo $fila['telefono'] ?></td>
                             <td>               
                                       <a href="#" class="btn btn-info btn-xs" data-toggle="modal"
                                        data-target="#editar"><i class="fa fa-pencil">
                                          
                                        </i>  </a>
                                     <a href="#" class="btn btn-danger btn-xs btnEliminar" data-toggle="modal" 
                                        data-target="#eliminar"                                       
                                        data-id="<?php echo $fila['id_proveedor'] ?>"
                                        data-nombre="<?php echo $fila['nombre'] ?>"

                                        >
                                        <i class="fa fa-trash-o">
                                       </i>  <?php//  $borrar= $fila['id_proveedor']?> </a>
                           </td>
                        </tr>
                        <?php  }?>
                    <!-- editar-->
                     <div id="editar" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <form action="./codigos/editarprov.php" method="post">
                                    <div class="modal-header">

                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Editar información del proveedor</h4>
                                      <input type="text" id="idOrdene" name="idOrdene">
                                     <!-- <input type="hidden" id="idOrdene" name="idOrdene">-->

                                    </div>
                                    <div class="modal-body" style="text-align: center">
                                    

                                <div class="item form-group"    style=" margin-bottom: 20px;width:100%;">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" style="width:20%">Nombre <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12" style="width:70%;">
                                              <input id="obra" class="form-control col-md-7 col-xs-12" style="width:100%"
                                              name="nombre" 

                                              placeholder="Nombre del Proveedor o Empresa"  type="text">
                                            </div>
                                          </div>

                                          <div class="item form-group" style=" margin-bottom: 20px;width:100%;">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" style="width:20%" >Direccion  <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12" style="width:70%;">
                                              <input id="cuenta" class="form-control col-md-7 col-xs-12" style="width:100%"
                                              name="direccion"

                                               placeholder="Direccion del Proveedor"  type="text">
                                          

                                            </div>
                                          </div>
                                          <div class="item form-group" style=" margin-bottom: 20px;width:100%;">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" style="width:20%">Teléfono <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12" style="width:70%;">
                                              <input id="cuenta" class="form-control col-md-7 col-xs-12" style="width:100%"
                                              name="telefono"

                                               placeholder="Teléfono del Proveedor"  type="text">
                                            </div>
                                          </div>
                                    </div>
                                      <div class="modal-footer">
                                      <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                                      <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#editar"
                         
                                      >Guardar</button>
                                    </div>
                                  </form>
                    
                                </div>
                              </div>
                            </div>
                    <!-- editar-->





                <!-- eliminar-->
                      <div id="eliminar" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <form action="./codigos/eliminarprov.php" method="post">
                                <div class="modal-header">

                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Eliminar información</h4>
                                  <input type="hidden" id="idprov" name="idprov">

                                </div>
                                <div class="modal-body" style="text-align: center">
                                  <p>Estas seguro de Eliminar al proveedor <span id="nombreeliminar"></span> </p>
                                </div>
                                  <div class="modal-footer">
                                  <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                                  <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#eliminar"
                     
                                  >Eliminar</button>
                                </div>
                              </form>
                
                            </div>
                          </div>
                        </div>
               <!-- eliminar-->








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
      <script type="text/javascript">
     
          $(".btnEliminar").on('click',function(){
            var id=$(this).data('id');
            var nombre=$(this).data('nombre');
            $("#idprov").val(id);
            $("#nombreeliminar").text(nombre) ;         
          });

  
    </script>
  </body>
</html>

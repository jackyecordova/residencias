<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ordenes</title>

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
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Consultar</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
              <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido</span>
                <h2>USUARIO</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
           <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Inicio<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php">Presupuesto Anual</a></li>
                        <!-- Dos niveles-->
                      <li class="active"><a>Ordenes<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu" style="display: block;">
                            <li class="sub_menu current-page"><a href="projects.php">Consultar</a>
                            </li>
                           
                            <li><a href="form_validation.html">Generar</a>
                            </li>
                             <li><a href="plain_page.html">Historial</a>
                            </li>
                          </ul>
                      </li>


                     <!-- <li><a href="index3.html">Tres</a></li>-->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Departamentos<span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu" style="display: none;">
                               <li><a href="nuevodepartamento.php">Nuevo</a>
                                 </li>
                               <li class="active"><a>Departamentos<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu" style="display: block;">
                                   
                                <li>
                                <a href="general_elements.php">Archivo Historico
                                </a></li>

                                <li><a href="general_elements.php">
                                Atencion
                                </a></li>

                                <li><a href="general_elements.php">Biblioteca Eduardo Contreras
                                </a></li>

                                <li><a href="general_elements.php">
                                Biblioteca Francisca Holguín
                                </a></li>

                                <li><a href="general_elements.php">
                                  C4
                                </a></li>

                                <li><a href="general_elements.php">
                                Catastro
                                </a></li>

                                <li><a href="general_elements.php">
                                Comisarios
                                </a></li>
                                <li><a href="general_elements.php">
                                Comunicación Social
                                </a></li>
                                <li><a href="general_elements.php">
                                Cultura
                                </a></li>
                                 <li><a href="general_elements.php">
                                Deportes
                                </a></li>
                                 <li><a href="general_elements.php">
                                Desarrollo Rural
                                </a></li>
                                 <li><a href="general_elements.php">
                                Desarrollo Social
                                </a></li>

                                 <li><a href="general_elements.php">
                                Desarrollo Urbano
                                </a></li> <li><a href="general_elements.php">
                                Educación
                                </a></li>
                                 <li><a href="general_elements.php">
                                Fomento Económico
                                </a></li>
                                 <li><a href="general_elements.php">
                                Obras Públicas
                                </a></li>
                                 <li><a href="general_elements.php">
                                Oficialía Mayor
                                </a></li>
                                 <li><a href="general_elements.php">
                                Pensiones y Jubilados
                                </a></li>
                                 <li><a href="general_elements.php">
                                Presidencia
                                </a></li>
                                 <li><a href="general_elements.php">
                                Protecci+on Civil
                                </a></li>
                                 <li><a href="general_elements.php">
                                Regidores
                                </a></li>
                                  <li><a href="general_elements.php">
                                Salud
                                </a></li>
                                  <li><a href="general_elements.php">
                                Secretaría
                                </a></li>
                                  <li><a href="general_elements.php">
                                Secretaría de Relaciones Exteriores
                                </a></li>
                                  <li><a href="general_elements.php">
                                Seguridad Pública
                                </a></li>
                                  <li><a href="general_elements.php">
                                Servicios Públicos
                                </a></li>
                                  <li><a href="general_elements.php">
                                Sindicatura
                                </a></li>
                                  <li><a href="general_elements.php">
                                Tesorería
                                </a></li>
                                  <li><a href="general_elements.php">
                                Tránsito
                                </a></li>
                                  <li><a href="general_elements.php">
                                Turismo
                                </a></li>
                                 <li><a href="general_elements.php">
                                   Unidad de Información
                                    </a>
                                </li>
                                
                              </ul>
                            </li>
                            
                               </ul>
                  </li>
                  <!--dos niveles-->
                   <li ><a>Obras<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu" style="display: none;">
                          
                           
                             <li><a href="form_validation.html">Consultar</a>
                             </li>
                             <li><a href="plain_page.html">Crear</a>
                             </li>
                          </ul>
                      </li>

                   <li><a>Cuentas<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu" style="display: none;">
                           
                           
                            <li><a href="form_validation.html">Consultar</a>
                            </li>
                             <li><a href="plain_page.html">Crear</a>
                            </li>
                          </ul>
                      </li>
               
              </div>

            </div>

            <!-- /sidebar menu -->

          
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">USUARIO
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Perfil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Ayuda</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">2</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ordenes <small>Registro </small></h3>
              </div>

              
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                 
                   
                   <div class="col-sm-3">  <h5 class="modal-title" style="padding-top:7px;">Control</h5> </div>
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

                    <p>REGISTRO DE LAS ORDENES EMITIDAS</p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">Id</th>
                          <th style="width: 20%">Obra</th>
                          <th>Observaciones</th>
                          <th class="status">Status</th>
                          <th></th>
                           <th></th>
                          <th style="width: 20%"></th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php 
                      for ($i=0; $i <10 ; $i++) { 
                        # code...
                    ?>
                        <tr>
                          <td>1</td>
                          <td>
                            <a>01-SUBSIDIO A INSTITUCIONES Y AGRUPACIONES DIVERSAS</a>
                            <br />
                            <small>PRESIDENCIA</small>
                          </td>
                          <td>

                         <a>  BELTRAN MARQUEZ DIANA ARMINE CJON CHIHUAHUA 1406 CENTRO BEMD830812MCHLRN02</a>
                            <!--<ul class="list-inline">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                            </ul>-->
                          </td>
                          <td class="project_progress">



                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57"></div>
                            </div>
                            <small>57% COMPLETADO</small>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs"  class="btn btn-primary"  data-method="getCroppedCanvas"
                             data-toggle="modal" data-target="#Devengada">
                            Devengado
                            </button>
                          </td>
                          <td> <button type="button" class="btn btn-success btn-xs"  data-toggle="modal" data-target="#Pagada">
                          Pagado</button>
                          </td>
                          <td>
                          <a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#ver"><i class="fa fa-folder"></i> Ver </a>
                            <a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#editar"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#eliminar"><i class="fa fa-trash-o"></i> Eliminar </a>
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
       
                  <!-- Cantidad Devengado-->
              <div id="Devengada" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" >&times;</button>
                        <h4 class="modal-title" >Cantidad Devengada</h4>
                      </div>
                      <div class="modal-body" style="text-align: left; ">                     
                         <div class="col-sm-3">  <h5 class="modal-title" style="padding-top:7px;">Cantidad </h5> </div>
                          <div class="col-sm-8">  </div>
                               <div class="input-group"> 
                                                  <input type="text" placeholder="000,000,000.00" class="form-control" name="price" data-fv-field="price">
                                                      <span class="input-group-addon">
                                                           $
                                                     </span> 
                                </div>
                            </div>
                             <div class="modal-body" style="text-align: left; ">
                       
                                   <div class="col-sm-3">  <h5 class="modal-title" style="padding-top:7px;">Póliza </h5> </div>
                                    <div class="col-sm-8">  </div>
                                    <div class="input-group"> 
                                            <input type="text" placeholder="000,000,000.00" class="form-control" name="price" data-fv-field="price">
                                                <span class="input-group-addon">
                                                                     $
                                                </span> 
                                    </div>
                                          
                            </div>
                          <div class="col-sm-1"></div>
                      <div class="modal-footer" style="padding-top:35px;">
                       <button type="button"  class="btn btn-success" >Devengar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
                      </div>
                    </div>

                  </div>
                </div>

                 <!-- Cantidad Devengado-->
              <div id="Pagada" class="modal fade" role="dialog">
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
                                                  <input type="text" placeholder="000,000,000.00" class="form-control" name="price" data-fv-field="price">
                                                      <span class="input-group-addon">
                                                           $
                                                       </span> 
                                </div>
                            </div>
                          <div class="col-sm-1"></div>

                        
                     
                      <div class="modal-footer" style="padding-top:35px;">
                       <button type="button"  class="btn btn-success" >Pagar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
                      </div>
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
                <!-- cuenta-->
                <div class="col-sm-4" class="modal-body" style="text-align: left; ">
                          
                         <div class="col-sm-4">  <h5 class="modal-title" style="padding-top:5px; font-size: 15px; font-weight: bolder;">Cuenta </h5> </div>
                         <br>
                         <br>
                         <label>
                           01280413955
                         </label>
                          </div>
                   <!-- Departamento-->
                  <div class="col-sm-4" class="modal-body" style="text-align: right; text-align: left;">
                       
                         <div class="col-sm-8">  <h5 class="modal-title" style="padding-top:5px; font-size: 15px; font-weight: bolder;">Departamento </h5> </div>
                         <br>
                         <br>
                         <label>
                           Oficialia Mayor
                         </label>
                      </div> 
                   <!-- fecha-->
                  <div class="col-sm-4" class="modal-body" style="text-align: right; text-align: left;">
                       
                         <div class="col-sm-8">  <h5 class="modal-title" style="padding-top:5px; font-size: 15px; font-weight: bolder;">Fecha </h5> </div>
                         <br>
                         <br>
                         <label>
                           12/09/2017
                         </label>
                      </div>
                   <!-- libre-->
                  <div class="col-sm-4" >
                      </div>                    
                  <!-- Observaciones-->
                  <div class="col-sm-4" class="modal-body" style="text-align: right; text-align: left;">
                       
                         <div class="col-sm-4">  <h5 class="modal-title" style="padding-top:5px; font-size: 15px; font-weight: bolder;">Observaciones </h5> </div>
                         <br>
                         <br>
                         <label>
                           TRANSMISION DEL PROGRAMA DESAYUNANDO CON EN PAGUINA WEB
                         </label>
                      </div>
                    <!-- ord_vehiculo-->
                  <div class="col-sm-4" class="modal-body" style="text-align: right; text-align: left;">
                       
                         <div class="col-sm-4">  <h5 class="modal-title" style="padding-top:5px; font-size: 15px; font-weight: bolder;">Ord_vehiculo </h5> </div>
                         <br>
                         <br>
                         <label>
                          PARA CASETAS VALE POR 1500 PESOS
                         </label>
                      </div>  
                  <!-- libre-->
                  <div class="col-sm-4">
                      </div>               
                    <!-- tot compromet.-->
                  <div class="col-sm-4" class="modal-body" style="text-align: right; text-align: left;">
                       
                         <div class="col-sm-4">  <h5 class="modal-title" style="padding-top:5px; font-size: 15px; font-weight: bolder;">Total Comprometido </h5> </div>
                         <br>
                         <br>
                         <br>
                         <label>
                          $1740
                         </label>
                      </div>   
                
                  <!-- Póliza Dev.-->
                  <div class="col-sm-4" class="modal-body" style="text-align: right; text-align: left;">
                       
                         <div class="col-sm-4">  <h5 class="modal-title" style="padding-top:5px; font-size: 15px; font-weight: bolder;">Poliza Devengada </h5> </div>
                         <br>
                         <br>
                         <br>
                         <label>
                         PD 254
                         </label>
                      </div>    
                    <!-- ppto dev-->
                  <div class="col-sm-4" class="modal-body" style="text-align: right; text-align: left;">
                       
                         <div class="col-sm-4">  <h5 class="modal-title" style="padding-top:5px; font-size: 15px; font-weight: bolder;">Presupuesto Devengado </h5> </div>
                         <br>
                         <br>
                         <br>
                         <label>
                         $1,700.00
                         </label>
                      </div>  
                    <!-- FECH DEVENG-->
                  <div class="col-sm-4" class="modal-body" style="text-align: right; text-align: left;">
                       
                         <div class="col-sm-4">  <h5 class="modal-title" style="padding-top:5px; font-size: 15px; font-weight: bolder;">Fecha Devengada</h5> </div>
                         <br>
                         <br>
                         <br>
                         <label>
                         27-1-17
                         </label>
                      </div> 
                   <!-- Póliza Pagada-->
                  <div class="col-sm-4" class="modal-body" style="text-align: right; text-align: left;">
                       
                         <div class="col-sm-4">  <h5 class="modal-title" style="padding-top:5px; font-size: 15px; font-weight: bolder;">Poliza Pagada </h5> </div>
                         <br>
                         <br>
                         <br>
                         <label>
                         PD 3
                         </label>
                      </div>   
                    <!-- ppto pagado-->
                  <div class="col-sm-4" class="modal-body" style="text-align: right; text-align: left;">
                       
                         <div class="col-sm-4">  <h5 class="modal-title" style="padding-top:5px; font-size: 15px; font-weight: bolder;">Presupuesto Pagado</h5> </div>
                         <br>
                         <br>
                         <br>
                         <label>
                         $1,740.00
                         </label>
                      </div> 
                       <!-- FECH Pagada-->
                  <div class="col-sm-4" class="modal-body" style="text-align: right; text-align: left;">
                       
                         <div class="col-sm-4">  <h5 class="modal-title" style="padding-top:5px; font-size: 15px; font-weight: bolder;">Fecha Pagada</h5> </div>
                         <br>
                         <br>
                         <br>
                         <label>
                        6/2/2017
                         </label>
                      </div>   
                      <!-- Orden No. Factura-->
                  <div class="col-sm-4" class="modal-body" style="text-align: right; text-align: left;">
                       
                         <div class="col-sm-4">  <h5 class="modal-title" style="padding-top:5px; font-size: 15px; font-weight: bolder;">orden Numero de Factura</h5> </div>
                         <br>
                         <br>
                         <br>
                         <label>
                         RECIBO 1621016598
                         </label>
                      </div>  
                       <!-- st&dpt&cta-->
                  <div class="col-sm-4" class="modal-body" style="text-align: right; text-align: left;">
                       
                         <div class="col-sm-4">  <h5 class="modal-title" style="padding-top:5px; font-size: 15px; font-weight: bolder;">Estatus,Departamento y Cuenta</h5> </div>
                         <br>
                         <br>
                         <br>
                         <label>
                         PAGADA345-1-3-6-001-0002-000
                         </label>
                      </div>                                                                            
                </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
            </div>
          </div>
           <!-- editar-->
        <div id="editar" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Editar Información</h4>
                </div>
                <div class="modal-body" style="text-align: center">
                  <p>Estas seguro de EDITAR la información</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar">Editar</button>
                </div>
              </div>
            </div>
          </div>
            <!-- eliminar-->
        <div id="eliminar" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Eliminar información</h4>
                </div>
                <div class="modal-body" style="text-align: center">
                  <p>Estas seguro de ELIMINAR la información</p>
                </div>
                 <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#eliminar">Eliminar</button>
                </div>
                
  
              </div>
            </div>
          </div>

     


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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
     <!-- Cropper -->
    <script src="../vendors/cropper/dist/cropper.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
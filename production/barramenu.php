   <!-- sidebar menu -->



 
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Inicio<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php">Presupuesto Anual</a></li>
                        <!-- Dos niveles-->

                          <!--..............................................................................-->

                         <?php  if ($arreglo['nivel']=='Obras Publicas'){
                          ?>
                         <li class="active">
                         <a>Ordenes<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: block;">
                                  <li class="sub_menu current-page"><a href="consultarobrasp.php">Consultar</a>
                                  </li>
                                 
                                  <li><a href="form_validation.php">Generar</a>
                                  </li>
                                   <li><a href="historialobraspublicas.php">Historial</a>
                                  </li>
                                </ul>
                            </li>
                               <li><a><i class="fa fa-credit-card-alt"></i>Programas<span class="fa fa-chevron-down"></span></a>
                                          <ul class="nav child_menu" style="display: none;">
                                           
                                           
                                            <li><a href="verprogramas.php">Consultar</a>
                                            </li>
                                             <li><a href="nuevoprograma.php">Crear</a>
                                            </li>
                                          </ul>
                                      </li>

                        <?php } ?>

                        <!--..............................................................................-->
                             <?php  if ($arreglo['nivel']=='Oficial Mayor'   ||$arreglo['nivel']=='Tesorería'||$arreglo['nivel']=='Admin'  ){
                          ?>

                                         <li class="active">
                                         <a>Ordenes<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu" style="display: block;">
                                                  <li class="sub_menu current-page"><a href="project2.php">Consultar</a>
                                                  </li>
                                                 
                                                  <li><a href="form_validation.php">Generar</a>
                                                  </li>
                                                   <li><a href="plain_page2.php">Historial</a>
                                                  </li>
                                                </ul>
                                            </li>
                                     <!-- <li><a href="index3.php">Tres</a></li>-->
                                    </ul>
                                  </li>
                                  <li><a><i class="fa fa-qrcode"></i> Departamentos<span class="fa fa-chevron-down"></span></a>
                                              <ul class="nav child_menu">
                                                <li><a href="nuevodepartamento.php">Nuevo Departamento</a> </li>
                                                 <li><a href="vercuentadepa.php">Cuentas</a>
                                                      
                                                 </li>
                                               <li class="active"><a>Departamentos<span class="fa fa-chevron-down"></span></a>
                                          <ul class="nav child_menu" >
                                                   <?php 
                                        include './conexion.php';
                                        $consulta=$mysqli->query("select * from departamentos order by id_departamento ASC")or die($mysqli->error);
                                        while ( $fila=mysqli_fetch_array($consulta)) {
                                           # code...
                                         
                                          
                                         ?>



                                                <li>
                                                <a href="general_elements.php?id=<?php echo $fila['id_departamento'] ?>"><?php echo $fila['departamento'] ?>
                                                </a></li>

                                                <?php } ?>
                                              </ul>
                                            </li>
                                            
                                               </ul>
                                  </li>
                                  <!--dos niveles
                                   <li ><a><i class="fa fa-server"></i>Obras<span class="fa fa-chevron-down"></span></a>
                                          <ul class="nav child_menu" style="display: none;">
                                          
                                           
                                             <li><a href="verobra.php">Consultar</a>
                                             </li>
                                             <li><a href="nuevaobra.php">Crear</a>
                                             </li>
                                          </ul>
                                      </li>-->

                                   <li><a><i class="fa fa-credit-card-alt"></i>Cuentas<span class="fa fa-chevron-down"></span></a>
                                          <ul class="nav child_menu" style="display: none;">
                                           
                                           
                                            <li><a href="vercuenta.php">Consultar</a>
                                            </li>
                                             <li><a href="nuevacuenta.php">Crear</a>
                                            </li>
                                          </ul>
                                      </li>
                                        <li ><a><i class="fa fa-group"></i>Proveedores<span class="fa fa-chevron-down"></span></a>
                                          <ul class="nav child_menu" style="display: none;">
                                          
                                           
                                             <li><a href="verproveedores.php">Consultar</a>
                                             </li>
                                             <li><a href="nuevoproveedor.php">Crear</a>
                                             </li>
                                          </ul>
                                      </li>
                  <?php } ?>
              </div>

            </div>
            <!-- /sidebar menu -->
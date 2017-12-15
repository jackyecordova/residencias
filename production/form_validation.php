
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
              <h3>Ordenes</h3>
            </div>


          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Generar una nueva orden<small></small></h2>
                  
                  <div class="clearfix"></div>
                  <div class="alert alert-danger alert-dismissible " role="alert" style="background-color: rgba(210, 20, 0, 0.19); text-align:center;width:50%;margin-left:25%;
                     text-shadow: 0px 0px rgba(153, 153, 153, 0);  
                     color: rgb(241, 83, 68);display:none;" id="alerta">Has excedido el presupuesto
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                  </div>
                </div>
                <div class="x_content">

                  <form class="form-horizontal form-label-left" novalidate action="./codigos/orden.php" method="post" id="miForm">

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

                        <?php  //if ($arreglo['nivel']=='Obras Publicas'){ ?>

                                <!--  <div class="form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Departamento</label>
                                          <div class="col-md-9 col-sm-9 col-xs-12">
                                           <input   class="select2_single form-control"
                                            name="departamento" value="Obras Publicas" 
                                            id="departamento"  disabled 
                                            class="form-control col-md-7 col-xs-12" tabindex="-1" style="width:66%;">
                                            
                                         </div>
                                       </div>-->

                                            <!--.Mostrar departamento de obras p.-->


                          
                          <?php// }else{ ?>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Departamento</label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="select2_single form-control"
                            name="departamento"
                            id="departamento" 
                            class="form-control col-md-7 col-xs-12" tabindex="-1" style="width:66%;">
                           

                            <?php //} ?>
                            <?php 
                            include './conexion.php';
                           
                                          if ($arreglo['nivel']=='Obras Publicas'){
                                                           $consulta2=$mysqli->query("select * from departamentos where departamento='OBRAS PUBLICAS'||departamento='Obras Publicas'")
                                                           or die($mysqli->error);
                                                                $id="";
                                                                while ( $fila2=mysqli_fetch_array($consulta2)) {
                                                                  if($id==""){
                                                                              $id=$fila2['id_departamento'];
                                                                      }
                                                                     ?>
                                                                      <option value="<?php echo $fila2['id_departamento']; ?>"><?php echo "Obras Publicas" ?></option>
                                                                      <?php
                                                             }
                                          }else{
                                                          ?>
                                                               <?php 
                                                           
                                                             $consulta=$mysqli->query("select * from departamentos order by id_departamento ASC")or die($mysqli->error);
                                                              $id="";
                                                              while ( $fila=mysqli_fetch_array($consulta)) {
                                                                             if($id==""){
                                                                            $id=$fila['id_departamento'];
                                                                           }?>

                                                                           <option value="<?php echo $fila['id_departamento'] ?>">
                                                                           <?php echo $fila['departamento'] ?></option>

                                                       

                                                      
                                                       <?php }
                                        } ?>
                           </select>
                         </div>
                       </div>

                <?php //} ?>


                       <div class="clearfix"></div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">No Factura  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" 
                          name="nofactura" placeholder="Número de factura"  type="text"
                          required="required">
                        </div>
                      </div>
                      <div class="clearfix"></div>




                     <div class="col-xs-12 col-md-12" style="display:none;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" 
                        for="fecha" 
                        
                        >Fecha  <span class="required">*</span>
                      </label>
                      <fieldset>
                        <div class="control-group">
                          <div class="controls">

                            <div class="col-md-11 xdisplay_inputx form-group has-feedback" style="    width: 67%;">
                              <input type="hidden" class="form-control has-feedback-left" id="single_cal4"  name ="fecha"
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
                      <select class="select2_single form-control" 
                      id="obra" 
                      class="form-control col-md-7 col-xs-12"  
                      name="obra"
                      placeholder="Nombre de la Obra"  type="text">
                        <?php 
                     
                      $consulta=$mysqli->query("select presupuesto_depa.*, cuentas.* from presupuesto_depa 
                                              inner join cuentas on presupuesto_depa.id_cuenta= cuentas.id_cuenta
                                              where presupuesto_depa.id_departamento=".$id)or die($mysqli->error);
                      while ( $fila=mysqli_fetch_array($consulta)) {
                       ?> <!--Concatenar el nombre de la cuenta-->
                       <option value="<?php echo $fila['id_cuenta'] ?>"><?php echo $fila['nombre']  ?><small ><?php // echo $fila['cuenta']  ?></small></option>
                       <?php } ?>
                    
                     </select>
                   </div>
                   <button type="button" class="btn btn-primary"><a href="./nuevacuenta.php" style="color:white;"><i class="fa fa-plus" aria-hidden="true"></a></i></button>
                 </div>

                 <!--Option para las cuentas existentes del departamento seleccionado
                 <div class="form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Cuenta <span class="required">*</span></label>
                                          <div class="col-md-6 col-sm-9 col-xs-12">
                                            <input class="select2_single form-control"
                                            name="cuenta"
                                            class="form-control col-md-7 col-xs-12" tabindex="-1" style="width:100%;" >
                                          
                                                        <?php 
                                                       // include './conexion.php';
                                                      //  $consulta=$mysqli->query("SELECT obras.*, cuentas.*
                                                        // from obras
                                                         //INNER JOIN cuentas ON obras.id_cuenta= cuentas.id_cuenta
                                                        // where obras.id_cuenta= cuenta.id_cuenta
                                                       //  ")or die($mysqli->error);
                                                        
                                                         ?>
                                             >

                                           </div>
                                           <button type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
                 </div>
-->







                 <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Observaciones  <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="observaciones" class="form-control col-md-7 col-xs-12" 
                    name="observaciones"
                    placeholder="Observaciones dentro de la obra" type="text"
                      required="required" >
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Vehículo  <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="vehiculo" class="form-control col-md-7 col-xs-12" 
                    name="vehiculo"
                    placeholder="Vehículo usado"
                    type="text"
                    >
                  </div>
                </div>


<!--.........................................................................................................................................-->

                   

              </div><div id="step-2" class="content" style="display: none;">
              <h2 class="StepTitle"> </h2>

              
              <?php  if ($arreglo['nivel']=='Obras Publicas'  ){
                          ?>
                          <div class="form-group">
                                       <label class="control-label col-md-3 col-sm-3 col-xs-12">Programa</label>
                                       <div class="col-md-6 col-sm-9 col-xs-12">
                                        <select class="select2_single form-control"
                                        name="programa"
                                        class="form-control col-md-8 col-xs-12" tabindex="-1" style="width:100%;">
                                       
                                                  <?php 
                                                      include './conexion.php';
                                                      $consulta=$mysqli->query("select * from programas order by id_programa ASC")or die($mysqli->error);
                                                      while ( $fila=mysqli_fetch_array($consulta)) {
                                                       ?>
                                                       <option value="<?php echo $fila['id_programa'] ?>"><?php echo $fila['programa'] ?></option>
                                                   <?php } ?>
                                       </select>
                                     </div>
                                     </div>


                          <?php } ?>
                           <div class="form-group" style="display:none;">
                                       <label class="control-label col-md-3 col-sm-3 col-xs-12">Programa</label>
                                       <div class="col-md-6 col-sm-9 col-xs-12">
                                        <select class="select2_single form-control"
                                        name="programa"
                                        class="form-control col-md-8 col-xs-12" tabindex="-1" style="width:100%;">
                                       
                                                  <?php 
                                                      include './conexion.php';
                                                      $consulta=$mysqli->query("select * from programas order by id_programa ASC")or die($mysqli->error);
                                                      while ( $fila=mysqli_fetch_array($consulta)) {
                                                       ?>
                                                       <option value="<?php echo $fila['id_programa'] ?>"><?php echo $fila['programa'] ?></option>
                                                   <?php } ?>
                                       </select>
                                     </div>
                                     </div>

              <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12">Proveedor</label>
               <div class="col-md-6 col-sm-9 col-xs-12">
                <select class="select2_single form-control"
                name="proveedor"
                class="form-control col-md-8 col-xs-12" tabindex="-1" style="width:100%;">
               
                <?php 
                include './conexion.php';
                $consulta=$mysqli->query("select * from proveedores order by id_proveedor ASC")or die($mysqli->error);
                while ( $fila=mysqli_fetch_array($consulta)) {

                 ?>
                 <option value="<?php echo $fila['id_proveedor'] ?>"><?php echo $fila['nombre'] ?></option>
                 <?php } ?>
               </select>
             </div>
             <button type="button" class="btn btn-primary"><a href="./nuevoproveedor.php" style="color:white;">
             <i class="fa fa-plus" aria-hidden="true"></i></a></button>
           </div>



           <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Material  <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="material" class="form-control col-md-7 col-xs-12" 
              name="material" placeholder="Material a comprar"  type="text"
                 required="required" >
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Cantidad  <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="cantidad" class="form-control col-md-7 col-xs-12" 
              name="cantidad" placeholder="Unidades a comprar"  type="text"
            
               required="required" >
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Precio unitario <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="precio" class="form-control col-md-7 col-xs-12" 

              name="precio" placeholder="Precio unitario"  type="text"
                required="required" >
            </div>
          </div>
        


       </div>
     </div> 
     <div class="ln_solid"></div>
  
    </div>
  </form>
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
<!-- jQuery Smart Wizard -->
<script src="./js/jquery.smartWizard.js"></script>

 <script type="text/javascript">
      $(document).ready(function  (argument) {
      $("#alerta").hide();
        $("#departamento").on('change',function(){
            $.post('./codigos/cambioobras.php',{
              id:$(this).val()
            },function  (e) {

              $("#obra").find('option').remove();
             $("#obra").append(e);
            });
        });
        /*$("#send").on("click",function  (e) {
           e.preventDefault();//para que no se vaya
         
            }
          }).done(function(e2){
            if(e2=="no"){
               $("#alerta").show();
               // alert(e2); 
                
            }else{
              $("#miForm").submit();//envio de formulario ya no se va al ajax
                //alert(e2);
            }
           
          });

        });*/
    });
   </script>
</body>
</html>
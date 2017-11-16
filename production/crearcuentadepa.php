
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
                <h3>Cuentas</h3>
              </div>

             
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Generar una nueva cuenta<small> para cada departamento</small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate action="./codigos/cuentadepa.php" method="post" id="miForm">

                     
                      <span class="section">Información</span>
                       <div class="alert alert-danger " role="alert" style="background-color: rgba(210, 20, 0, 0.19); 
              text-shadow: 0px 0px rgba(153, 153, 153, 0);  
          color: rgb(241, 83, 68);display:none" id="alerta">Has excedido el presupuesto
        </div>


                          <!--Ventana gris-->
                        <div class="well" style="overflow: auto">


                              
                         





                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Departamento</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control"
                            name="departamento"
                            id="departamento" 
                            required="required"
                           class="form-control col-md-7 col-xs-12" tabindex="-1" style="width:66%;">
                          
                            <?php 
                        include './conexion.php';
                        $consulta=$mysqli->query("select * from departamentos order by id_departamento ASC")or die($mysqli->error);
                        while ( $fila=mysqli_fetch_array($consulta)) {
                          
                         ?>
                            <option value="<?php echo $fila['id_departamento'] ?>"><?php echo $fila['departamento'] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    






                      <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Cuenta</label>
                              <div class="col-md-6 col-sm-9 col-xs-12">
                                    <select class="select2_single form-control"
                                      name="cuenta"
                                      id="cuenta" 
                                     class="form-control col-md-9 col-xs-12" tabindex="-1" style="width:100%;" >
                                               
                                                <?php 
                                            include './conexion.php';
                                            $consulta=$mysqli->query("select * from cuentas order by id_cuenta ASC ")or die($mysqli->error);
                                            while ( $fila=mysqli_fetch_array($consulta)) {
                                              
                                             ?>
                                                <option value="<?php echo $fila['id_cuenta'] ?>"><?php echo $fila['nombre'] ?><?php echo $fila['cuenta'] ?></option>
                                                <?php } ?>
                                    </select>
                              </div>
                              <button type="button" class="btn btn-primary" ><a href="./nuevacuenta.php" style="color:white;"><i class="fa fa-plus" aria-hidden="true"></i></a></button>
                      </div>



                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" > Año <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" >
                          <input id="anio" class="form-control col-md-7 col-xs-12" 
                          name="anio"
                          required="required"
                          value="<?php echo date('Y')?>" 
                           placeholder="Año de carga"  type="text">
                      

                        </div>
                      </div>
                    

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" > Monto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" >
                          <input id="monto" class="form-control col-md-7 col-xs-12" 
                          name="monto"
                          required="required"
                           placeholder="Cantidad de la cuenta"  type="number">
                      

                        </div>
                      </div>
                    


                    
                   
                    
                   
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="cancel" class="btn btn-primary">Cancelar</button>
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
	 <script type="text/javascript">
    $(document).ready(function  (argument) {
      $("#alerta").hide();
        
        $("#send").on("click",function  (e) {
           e.preventDefault();//para que no se vaya
          $.ajax({
            method:'POST',
            url:'./codigos/validardepa.php',
            data:{
              departamento:$("#departamento").val(),
              cuenta:$("#cuenta").val(),
              anio:$("#anio").val(),
              monto:$("#monto").val()
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

        });
    });
   </script>
  </body>
</html>
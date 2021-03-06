
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
            <h3>Registrar un nuevo departamento</h3>
          </div>


        </div>
        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Departamento<small></small></h2>
              
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <form class="form-horizontal form-label-left" action="./codigos/departamentos.php" method="post" id="formdepa">

                  <p>Registro del nuevo departamento <!--<code></code> -->
                  </p>
                  <span class="section">Información</span>



                  <!--Ventana gris-->
                  <div class="well" style="overflow: auto">




                  <div class="alert alert-danger alert-dismissible " role="alert" style="background-color: rgba(210, 20, 0, 0.19); text-align:center;width:50%;margin-left:25%;
                     text-shadow: 0px 0px rgba(153, 153, 153, 0);  
                     color: rgb(241, 83, 68);display:none;" id="alerta">Has excedido el presupuesto
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                  </div>



                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"

                      >Nombre <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control col-md-7 col-xs-12" 
                      name="nombre" id="nombre" 
                      placeholder="Nombre del departamento"  type="text"
                      required="required">
                    </div>
                  </div>



                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cuenta"

                    >Presupuesto  <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12" >
                    <input class="form-control col-md-7 col-xs-12"
                    name="presupuesto" id="presupuesto" 
                    min="0"
                    placeholder="Presupuesto otorgado" type="number"
                     required="required">
                  </div>
                </div>             





                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                   <button type="submit" class="btn btn-primary">Cancelar</button> <!--<a href="./index.php"></a>-->
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
<script >
   $(document).ready(function  (argument) {
      $("#alerta").hide();
         
        $("#send").on("click",function  (e) {
           e.preventDefault();//para que no se vaya  
          
          $.ajax({
            method:'POST',
            url:'./codigos/validardepartamento.php',
            data:{
              nombre:$("#nombre").val(),
              presupuesto:$("#presupuesto").val()
              
            }
          }).done(function(e2){
            //alert(e2);
            if(e2=="no"){
            
               $("#alerta").show();
               // alert(e2); 
                
            }else{
              $("#formdepa").submit();//envio de formulario ya no se va al ajax
                //alert(e2);
            }
           
          });

        });
    });
</script>
</body>
</html>
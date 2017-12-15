
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
  <!-- Datatables -->
  <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
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
            <h3>Cuentas Registradas</h3>
          </div>

        

        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                  <p>REGISTRO DE LAS CUENTAS POR DEPARTAMENTO</p>

                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <p class="text-muted font-13 m-b-30">

                </p>
              
                <div class="row">
                  <div class="col-sm-12">
                    <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                      <thead>
                                       <tr role="row">
                                        <th  style="border:0px;" class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" 
                                        colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 80px;">
                                        Id 
                                      </th>
                                      <th  style="border:0px;" class="sorting" tabindex="0" aria-controls="datatable"
                                      rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                      style="width: 200px;">
                                     Departamento
                                    </th>
                                    <th  style="border:0px;" class="sorting" tabindex="0" 
                                    aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" 
                                    style="width:350px;">
                                    Cuenta
                                  </th>
                                  <th style="border:0px;" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                  colspan="1" aria-label="Age: activate to sort column ascending" style="width: 150px;">
                                  Cantidad
                                </th>
                                <th style="border:0px;" class="sorting" tabindex="0" 
                                aria-controls="datatable" rowspan="1" colspan="1"
                                aria-label="Office: activate to sort column ascending" 
                                style="width: 80px;">

                              </th>

                            </tr>
                </thead>


          <tbody>
            <?php 
           include './conexion.php';
               $depa="";
               $consulta=$mysqli->query("



                SELECT presupuesto_depa.*,cuentas.*, departamentos.departamento
                FROM (( presupuesto_depa 

                  INNER JOIN departamentos ON presupuesto_depa.id_departamento = departamentos.id_departamento)
               INNER JOIN cuentas ON presupuesto_depa.id_cuenta = cuentas.id_cuenta);





               ")or die($mysqli->error);
               while ( $fila=mysqli_fetch_array($consulta)) {
                           # code...
                ?>
             <tr role="row" class="odd">
              <td style="border:0px;" class="sorting_1"><?php echo $fila['id_presupuesto_depa'] ?></td>
              <td style="border:0px;"> <?php echo $fila['departamento'] ?>
              <a class="pull-right"> </a></td>

              <td style="border:0px;"><?php echo $fila['nombre'] ?> <?php echo $fila['cuenta'] ?></td>
              <td style="border:0px;">
              <br>$ <?php echo number_format($fila['monto'],2); ?>
              </td>
              <td style="border:0px;"> 
                 <?php echo $fila['anio'] ?>              
                <a href="#" class="btn btn-info btn-xs btnEditar" data-toggle="modal"
                    data-target="#editar"
                    data-id="<?php echo $fila['id_presupuesto_depa'] ?>"
                    data-iddepa="<?php echo $fila['id_departamento'] ?>"
                    data-departamento="<?php echo $fila['departamento'] ?>"
                    data-cuenta="<?php echo $fila['id_cuenta'] ?>" 
                    data-anio="<?php echo $fila['anio'] ?>"
                    data-monto="<?php echo $fila['monto'] ?>">
                    <i class="fa fa-pencil">

                    </i>
                    </a>
                     <a href="#" class="btn btn-danger btn-xs btnEliminar" data-toggle="modal" 
                 data-target="#eliminar"
                 data-toggle="modal"                                   
                 data-id="<?php echo $fila['id_presupuesto_depa'] ?>"
                 data-departamento="<?php echo $fila['departamento'] ?>">
                 <i class="fa fa-trash-o">

                 </i> 
               </a>
              
           </td>

         </tr>
         <?php  }?>

      
         <!-- eliminar-->
         <div id="eliminar" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <form action="./codigos/eliminarcuentadepa.php" method="post">
                <div class="modal-header">

                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Eliminar información</h4>
                  <input type="hidden" id="idcuentadepa" name="idcuentadepa">

                </div>
                <div class="modal-body" style="text-align: center">
                  <p>Estas seguro de eliminar la cuenta del departamento? <br>
                   <span style="font-size:20px;" 
                   id="departamentoeliminar"></span> </p>
                 </div>
                 <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#eliminar"

                  >Eliminar</button>
                </div>
              </form>

            </div>
          </div>
        </div>
        <!-- eliminar-->
        <!-- editar-->
        <div id="editar" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <form action="./codigos/editarcuentadepa.php" method="post">
                <div class="modal-header">

                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Editar información de la obra</h4>
                  <input type="hidden" id="idcuentadepaedi" name="idcuentadepaedi">
                  <!-- <input type="hidden" id="idOrdene" name="idOrdene">-->
                </div>
                <div class="modal-body" style="text-align: center">
  <div class="alert alert-danger " role="alert" style="background-color: rgba(210, 20, 0, 0.19); 
              text-shadow: 0px 0px rgba(153, 153, 153, 0);  
          color: rgb(241, 83, 68);display:none" id="alerta">Has excedido el presupuesto
        </div>
                  <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Departamento</label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                                 <input   class="select2_single form-control"
                                  name="departamento"
                                  id="departamentoeditar"  disabled
                                  class="form-control col-md-7 col-xs-12" tabindex="-1" style="width:66%;">
                                 <!--   <span style="font-size:20px;" 
                               id="departamentoeditar"></span> -->
                                
                                <!--  <?php 
                                 // include './conexion.php';
                                 // $consulta=$mysqli->query("select * from departamentos order by id_departamento ASC")or die($mysqli->error);
                                  //while ( $fila=mysqli_fetch_array($consulta)) {

                                   ?>
                                   <option value="<?php// echo $fila['id_departamento'] ?>"><?php //echo $fila['departamento'] ?></option>-->
                                   <?php// } ?>
                                 
                         </div>
                 </div>

                 <div class="clearfix"></div><br>
                 <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Cuenta</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="select2_single form-control"
                    name="cuenta"
                    id="cuentaeditar" 
                    class="form-control col-md-7 col-xs-12" tabindex="-1" style="width:66%;" >
                 
                    <?php 
                    include './conexion.php';
                    $consulta=$mysqli->query("select * from cuentas order by id_cuenta ASC")or die($mysqli->error);
                    while ( $fila=mysqli_fetch_array($consulta)) {
                     ?>
                     <option value="<?php echo $fila['id_cuenta'] ?>"><?php echo $fila['cuenta'] ?></option>
                     <?php } ?>
                   </select>
                 </div>
               </div>
               <div class="clearfix"></div><br>
               <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" > Año <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12" >
                  <input  class="form-control col-md-7 col-xs-12" 
                  name="anio"
                  id="anioeditar" 
                  placeholder="Año de carga"  type="text">
                </div>
              </div>
              <div class="clearfix"></div><br>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" > Monto <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12" >
                  <input  class="form-control col-md-7 col-xs-12" 
                  name="monto"
                  id="montoeditar" 
                  placeholder="Cantidad de la cuenta"  type="text">
                </div>
              </div>



            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#editar"

              >Guardar</button>
            </div>
          </form>

        </div>
      </div>
    </div>
    <!-- editar-->













    </tbody>
  </table>
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
<!-- Datatables -->
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>


<script type="text/javascript">

  $(".btnEliminar").on('click',function(){
   var id=$(this).data('id');
   var departamento=$(this).data('departamento');
   $("#idcuentadepa").val(id);
   $("#departamentoeliminar").text(departamento) ;   
 });
  $(".btnEditar").on('click',function(){
   var id=$(this).data('id');
    var iddepa=$(this).data('iddepa');
   var departamento=$(this).data('departamento');
   var cuenta=$(this).data('cuenta');
   var anio=$(this).data('anio');
   var monto=$(this).data('monto');
    $.post('./codigos/ajax/cuentadajax.php',{
      id:iddepa
    },function(r){
      $("#cuentaeditar").find('option').remove();
      $("#cuentaeditar").append(r);
      //alert(r);
    });
   $("#idcuentadepaedi").val(id);
   $("#departamentoeditar").val(departamento) ;  
   $("#cuentaeditar").val(cuenta) ;    
   $("#anioeditar").val(anio) ;
   $("#montoeditar").val(monto) ;



 });

</script>

 <script type="text/javascript">
    $(document).ready(function  (argument) {
      $("#alerta").hide();
        
        $("#send").on("click",function  (e) {
           e.preventDefault();//para que no se vaya
          $.ajax({
            method:'POST',
            url:'./codigos/validarcuentasdepa.php',
            data:{
             // departamento:$("#departamento").val(),
              cuenta:$("#cuentaeditar").val(),
              anio:$("#anioeditar").val(),
              monto:$("#montoeditar").val()
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

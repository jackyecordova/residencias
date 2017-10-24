
<?php 

session_start();
if (isset($_SESSION['miSesion'])){
      $arreglo=$_SESSION['miSesion'];
      }else{
        header("Location: ./login.html");  

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
            <h3>Obras </h3>
          </div>

        

        <div class="clearfix"></div>

        <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Obras Registradas <small></small></h2>
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                                      <div class="panel panel-default col-xs-2 pull-right" style="    height: 32.4px;">
                                            <div class="panel-heading col-xs-4 " style="background-color:rgba(00, 00, 00, 0.0)">
                                              <h3 class="panel-title" style="font-size:9px;">Emitido</h3>
                                            </div>
                                           <div class="panel-heading col-xs-4 " style="background-color:rgba(194, 47, 47, 0.08);margin-right:0%;">
                                              <h3 class="panel-title" style="font-size: 9px;">Devengado</h3>
                                            </div>
                                            <div class="panel-heading col-xs-4 " style="background-color:rgba(24, 139, 26, 0.17);">
                                              <h3 class="panel-title" style="font-size:9px;">Pagado</h3>
                                            </div>
                                          </div>
                                          
                    
                    

                    
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="border-collapse: collapse">
                      <thead >
                        <tr >
                          <th style="width: 1% ;border:0px;">Id</th>
                          <th style="width: 25%;border:0px;">Obra</th>
                          <th style="width: 25%;border:0px;">Descripcion</th>
                          <th class="status" style="border:0px;">
                                        
                          </th style="border:0px;">
                          <th style="border:0px;"></th>
                          <th style="border:0px;"></th>
                        </tr>
                      </thead>


                      <tbody>



  <?php 
                                                   include './conexion.php';
                                                  //where orden.activo='no'
                                                   $consulta=$mysqli->query("
                                                    SELECT orden.*,cuentas.*,departamentos.departamento

                                                    FROM ((orden
                                                      INNER JOIN cuentas ON orden.id_cuenta = cuentas.id_cuenta)

                                                   INNER JOIN departamentos ON orden.id_departamento = departamentos.id_departamento)
                                                   where orden.activo='si';



                                                   ")or die($mysqli->error);
                                                   while ( $fila=mysqli_fetch_array($consulta)) {

                                                    ?>  <?php 
                                                    $todo=$fila['total_compromet'];
                                                    $dev=$fila['ppto_dev'];
                                                    $pag=$fila['ppto_pag'];
                                                    $status=$fila['status'];
                                                    if ($dev<$todo) {
                                                      $res=$dev * 100 / $todo;
                                                      echo $res;
                                                    }else {
                                                      $res =$pag * 100 / $todo;
                                                    }
                                                    // if ($dev<$todo) {

                                                           if ($status=='Devengado') {
                                                                //rojo
                                                               $pagado='background-color:rgba(194, 47, 47, 0.08)';

                                                               // }else if ($pag==$todo) {//verde
                                                                 }else if ($status=='Pagado') {//verde
                                                                  $pagado='background-color:rgba(24, 139, 26, 0.17)';
                                                                }else{
                                                                                            //blanco

                                                                 $pagado='background-color:rgba(00, 00, 00, 0.0)';
                                                               } 
                                                            
                                                 ?>




                        <tr style="<?php  echo $pagado?>;">
                          <td style="border:0px;"><?php echo $fila['ord_id'] ?></td>
                          <td style="border:0px;"><a><?php echo $fila['nombre'] ?></a><!--cuenta nombre-->

                                                    <small>
                                                    <?php echo $fila['departamento'] ?>
                                                    </small>
                          </td>
                          <td style="border:0px;">
                           <a> <?php echo $fila['observaciones'] ?></a>
                          </td>
                          <td class="project_progress " style="border:0px;">
                              <!-- <div class="progress progress_sm">
                                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php//  echo $res?>" ></div>
                                                  </div>
                                                  <small>
                                                  <?php // echo  number_format($res ,2);?>% COMPLETADO
                                                  </small>

                                                 -->

                                                  <small><?php  echo  number_format($res ,2);?>% COMPLETADO</small>
                          </td>
                          <td style="border:0px;">
                           <button type="button" class="btn btn-success btn-xs"  class="btn btn-primary"  data-method="getCroppedCanvas"
                                                  data-toggle="modal" data-target="#Devengada">
                                                  Devengado
                                                </button>
                          <button type="button" class="btn btn-success btn-xs"  data-toggle="modal" data-target="#Pagada">
                                                Pagado</button>
                                                </td>
                          <td style="border:0px;">  <a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#ver"><i class="fa fa-folder"></i> Ver </a>
                                               <a href="#" class="btn btn-info btn-xs btnEditar"
                                               data-id="<?php echo $fila['ord_id'] ?>"
                                               data-toggle="modal" data-target="#editar">
                                               <i class="fa fa-pencil"></i> Editar</a>
                                               <a href="#" class="btn btn-danger btn-xs btnEliminar" 
                                               data-id="<?php echo $fila['ord_id'] ?>"
                                               data-toggle="modal" data-target="#eliminar">
                                               <i class="fa fa-trash-o"></i> Eliminar</a></td>
                        </tr>
                        <?php } ?>
                      
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



</body>
</html>

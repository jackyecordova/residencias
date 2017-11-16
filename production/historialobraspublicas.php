
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

         
        </div>

        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Historial de todas Obras Registradas</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                         <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" 
                  colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 5%;">
                  Id orden
                </th>
                <th class="sorting" tabindex="0" aria-controls="datatable"
                rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                style="width: 20%;">
                Obra
              </th>
              <th class="sorting" tabindex="0" 
              aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" 
              style="width: 20%;">
              Descripcion
            </th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
            colspan="1" aria-label="Age: activate to sort column ascending" style="width:12%;">
            Departamento
          </th>
          <th class="sorting" tabindex="0" aria-controls="datatable" 
          rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" 
          style="width: 15%;">
          Cuenta
        </th>
        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
        aria-label="Salary: activate to sort column ascending" style="width: 5%;">
        Fecha
      </th>
    </tr>
                      </thead>


                      <tbody>
                        

                                      <?php 
                                        include './conexion.php';
                                        $consulta=$mysqli->query("select orden.*,cuentas.* ,departamentos.*
                                          from orden
                                          INNER JOIN cuentas ON orden.id_cuenta = cuentas.id_cuenta
                                          INNER JOIN departamentos ON orden.id_departamento = departamentos.id_departamento
                                         
                                          where departamentos.departamento='Obras Publicas'
                                          order by orden.ord_id DESC")or die($mysqli->error);

                                          //INNER JOIN programaorden ON orden.id_orden = programaorden.id_orden
                                        while ( $fila=mysqli_fetch_array($consulta)) {
                                        if ($fila['activo']== "si" ) {
                                                                       //blanco
                                           $activado='background-color:rgba(0, 0,0, 0)';
                                
                                
                                         }else {
                                          $activado='background-color:rgba(194, 47, 47, 0.08)';
                                        }
                                                       if ($fila['status']=="Cancelado") {
                                                         $letracancelado="red";
                                                       }else{$letracancelado="#7a8c9f";}

                                       ?>
                                
                                       <tr role="row" class="odd"  style="<?php echo $activado ?>;color:<?php echo $letracancelado?>;">
                                         <td > <?php echo $fila['ord_id'] ?>
                                         <br> <a ><small> <a style="margin-top:3px;color:<?php echo $letracancelado?>;">No Fac</a><br> <?php echo $fila['ord_numfactura'] ?></small></a> 
                                         
                                         </td>
                                         <td><?php echo $fila['nombre'] ?><br> <a style="color:<?php echo $letracancelado?>;"><small > <?php echo $fila['status'] ?></small></a> </td>
                                         <td><?php echo $fila['observaciones'] ?>
                                         <br> <a style="color:<?php echo $letracancelado?>;"><small> <?php echo $fila['material'] ?></small></a></td>
                                         
                                         <td><?php echo $fila['departamento'] ?>
                                         <?php   
                                        // $consulta2=$mysqli->query("SELECT * FROM programas 
                                         // from orden  where id_programa=". echo $fila['id_programa'])or die($mysqli->error);
                                          
                                     //  while ( $fila2=mysqli_fetch_array($consulta)) {

                                         // echo $fila2['prmgrama'];
                                          //} ?></td>
                                         <td><?php echo $fila['nombre'] ?><br><?php  echo $fila['cuenta']; ?></td>
                                         <td><?php echo $fila['fecha'] ?></td>
                                       </tr>
                                       <?php  }?>    



                      </tbody>
                    </table>
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

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
</body>
</html>

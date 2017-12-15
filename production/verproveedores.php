
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
  <!-- Datatables -->
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
             
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <p class="text-muted font-13 m-b-30">

                </p>


              </div>
              <div class="row">
                <div class="col-sm-12">
                  <table id="datatable" class="table table-striped 
                  table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
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
           <a href="#" class="btn btn-info btn-xs btnEditar" 
           data-target="#editar"
           data-toggle="modal"
           data-id="<?php echo $fila['id_proveedor'] ?>"
           data-nombre="<?php echo $fila['nombre'] ?>"
           data-direccion="<?php echo $fila['direccion'] ?>"
           data-telefono="<?php echo $fila['telefono'] ?>"
           ><i class="fa fa-pencil">

         </i>  </a>

         <a href="#" class="btn btn-danger btn-xs btnEliminar"
         data-toggle="modal" 
         data-target="#eliminar"                                       
         data-id="<?php echo $fila['id_proveedor'] ?>"
         data-nombre="<?php echo $fila['nombre'] ?>" >
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
              <input type="hidden" id="idprovedi" name="idprovedi">
              <!-- <input type="hidden" id="idOrdene" name="idOrdene">-->

            </div>
            <div class="modal-body" style="text-align: center">


              <div class="item form-group"    style=" margin-bottom: 20px;width:100%;">
                <label class="control-label
                col-md-3 col-sm-3 col-xs-12" style="width:20%">Nombre <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12" style="width:70%;">
                <input  class="form-control col-md-7 col-xs-12" style="width:100%"
                name="nombre" 
                id="nombreeditar" 

                placeholder="Nombre del Proveedor o Empresa"  type="text">
              </div>
            </div><br>
  <div class="clearfix"></div>
            <div class="item form-group" style=" margin-bottom: 20px;width:100%;">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" style="width:20%" >Direccion  <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12" style="width:70%;">
                <input  class="form-control col-md-7 col-xs-12" style="width:100%"
                name="direccion"
                id="direccioneditar" 
                placeholder="Direccion del Proveedor"  type="text">


              </div>
            </div><br>
              <div class="clearfix"></div>
            <div class="item form-group" style=" margin-bottom: 20px;width:100%;">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" style="width:20%">Teléfono <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12" style="width:70%;">
                <input  class="form-control col-md-7 col-xs-12" style="width:100%"
                name="telefono"
                id="telefonoeditar" 
                placeholder="Teléfono del Proveedor"  type="text">
              </div>
            </div><br>
              <div class="clearfix"></div>
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
            <p>Estas seguro de Eliminar al proveedor <br> 
              <span style="font-size:20px;" 
              id="nombreeliminar"></span> </p>
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








  </tbody>
</table></div></div>

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
    var nombre=$(this).data('nombre');
    $("#idprov").val(id);
    $("#nombreeliminar").text(nombre) ;         
  });
  $(".btnEditar").on('click',function(){
   var id=$(this).data('id');
   var nombre=$(this).data('nombre');
   var direccion=$(this).data('direccion');
   var telefono=$(this).data('telefono');

   $("#idprovedi").val(id);
   $("#nombreeditar").val(nombre) ;   
   $("#direccioneditar").val(direccion) ;   
   $("#telefonoeditar").val(telefono) ;   

 });

  
</script>
</body>
</html>

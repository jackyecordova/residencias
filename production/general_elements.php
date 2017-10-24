
<?php 

session_start();
if (isset($_SESSION['miSesion'])){
      $arreglo=$_SESSION['miSesion'];
      }else{
        header("Location: ./login.html");  

}
 ?>
 <?php 
 include './conexion.php';
 if ($_GET['id']=="") {
   header("Location: ./index.php");

 }else{





//departamento y su presupeusto
   $consulta=$mysqli->query("select * from departamentos where id_departamento=".$_GET['id'])or die($mysqli->error);
   //total comprometido
   $presu=$mysqli->query("SELECT sum(total_compromet) as comprometido, 
    sum(ppto_dev) as devengado, 
    sum(ppto_pag) as pagado 
    FROM orden where id_departamento=".$_GET['id'])or die($mysqli->error);

                        //departamento y su presupeusto
   while ( $fila=mysqli_fetch_array($consulta)) {
    $nombre=$fila['departamento'];
    $presupuesto=$fila['presupuesto'];
    //selecionar las cuentas de la sordenes que tiene el departamento
  }
  if (isset($nombre)) { }else{
    header("Location: ./index.php");
  }
                        //total comprometido

  while ( $fila=mysqli_fetch_array($presu)) {
    $comprometido=$fila['comprometido'];
    $devengado=$fila['devengado'];
    $pagado=$fila['pagado'];
    $restante=$presupuesto - ($comprometido + $pagado + $comprometido);
    $porcentajecomprometido =$comprometido * 100 / $presupuesto;
    $porcentajedevengado =$devengado * 100 / $presupuesto;
    $porcentajepagado =$pagado * 100 / $presupuesto;
    $porcentajerestante = $restante * 100 / $presupuesto;

    if ($porcentajerestante<=0) {
      $color="red";
      $asc="desc";
  # code...
    }else{
     $color="green";
     $asc="asc";

   }
 }
 if (isset($nombre)) { }else{
  header("Location: ./index.php");
}



}//if de si el id esta vacio
                                      //devengado

                        //pagado


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
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- bootstrap-progressbar -->
  <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

  <!-- bootstrap-datetimepicker -->
  <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
  <!-- PNotify -->

  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>


  <!-- iCheck -->
  <script src="../vendors/iCheck/icheck.min.js"></script>
  <!-- PNotify -->
  <script src="../vendors/pnotify/dist/pnotify.js"></script>
  <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
  <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>















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
              <h3>Departamento <?php echo $nombre; ?></h3>
            </div>


          </div>

          <div class="clearfix"></div>

          <div class="row tile_count" >
            <div class="col-md-2 col-sm-4 col-xs-12 tile_stats_count"  style="margin-right:30px;"  >
              <span class="count_top"><i class="fa fa-user"></i>Presupuesto</span>
              <div class="count green" style="font-size: 25px;margin-bottom: -10px;">$ <?php echo number_format($presupuesto,2);?></div>
              <span class="count_bottom"><i class=<?php echo $color; ?>>100% </i> Total</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style=" margin-right: -20px;">
              <span class="count_top" ><i class="fa fa-clock-o"></i>Comprometido</span>
              <div class="count" style="font-size: 18px;    margin-bottom: -10px;">$<?php echo  " "  .number_format($comprometido,2); ?></div>
              <span class="count_bottom"><i class=<?php echo $color; ?>><i class="fa fa-sort-asc"></i><?php echo number_format($porcentajecomprometido,2); ?>% </i> Completado</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style=" margin-right: -20px;">
              <span class="count_top"><i class="fa fa-user"></i> Devengado</span>
              <div class="count " style="font-size: 18px;    margin-bottom: -10px;">$ <?php echo " ".number_format( $devengado,2); ?></div>
              <span class="count_bottom"><i class=<?php echo $color; ?>><i class="fa fa-sort-asc"></i><?php echo number_format($porcentajedevengado,2); ?>% </i>Completado</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style=" margin-right: -20px;">
              <span class="count_top"><i class="fa fa-user"></i> Pagado</span>
              <div class="count" style="font-size: 18px;    margin-bottom: -10px;">$<?php echo " " .  number_format($pagado,2); ?></div>
              <span class="count_bottom"><i class=<?php echo $color; ?>><i class="fa fa-sort-asc"></i><?php echo number_format($porcentajepagado,2); ?>% </i> Completado</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style=" margin-right: -20px;">
              <span class="count_top"><i class="fa fa-user"></i>Restante</span>
              <div class="count green" style="font-size: 18px;    margin-bottom: -10px;">$<?php echo " " . number_format( $restante,2); ?></div>
              <span class="count_bottom"><i class=<?php echo $color; ?>><i class="fa fa-sort-"<?php echo $asc; ?>""></i><?php  echo number_format($porcentajerestante,2);?>% </i> Completado</span>
            </div>
           <!-- <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style=" margin-right: -30px;">
              <span class="count_top"><i class="fa fa-user"></i> bla bla</span>
              <div class="count" style="font-size: 25px;    margin-bottom: -10px;">$7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i>Completado</span>-->
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="">
            <div class="col-md-6 col-sm-6 col-xs-12" style="width:100%;">
              <div class="x_panel">
                <div class="x_title">
                  <h2><i class="fa fa-bars"></i> Ordenes <small>Registradas dentro de este departamento</small></h2>


                  <div class="title_right" style=" margin-left: 20px;">

                    <div class="col-md-6 col-sm-5 col-xs-12 form-group  top_search" style="margin-left: 20px;">

                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar Registros en General" id="buscar">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="button">Buscar</button>
                        </span>
                      </div>           
                    </div>

                    <div class="btn-group" class="pull-rigth" style="margin-left">
                     <button class="btn btn-info"type="button">
                      <i class="fa fa-print"></i>
                    </button>
                  </div>
                  <div class="btn-group" class="pull-rigth">
                   <button class="btn btn-success"type="button">
                    <i class="fa fa-floppy-o"></i>
                  </button>
                </div>



              </div>


              <div class="clearfix"></div>
            </div>
            <div class="x_content" style="width: 80%;">
               <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                              <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">General</a>
                              </li>
                              <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Emitido</a>
                              </li>
                              <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Devengado</a>
                              </li>
                              <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Pagado</a>
                              </li>
                               
                            </ul>
                            <div id="myTabContent" class="tab-content">
                              <div class="col-md-6 col-sm-6 col-xs-12"     style="width: 100%;">
                              <div class="x_panel" >
                            </ul>

                         <div class="x_content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                                <ul class="list-unstyled timeline"> 
                                                  <?php 
                                                  include './conexion.php';
                                                  $consulta=$mysqli->query(
                                                    "SELECT orden.*, departamentos.*, cuentas.*, proveedores.*
                                                    FROM orden
                                                    INNER JOIN departamentos ON orden.id_departamento = departamentos.id_departamento
                                                    INNER JOIN cuentas ON orden.id_cuenta = cuentas.id_cuenta
                                                    INNER JOIN proveedores ON orden.id_proveedor = proveedores.id_proveedor
                                                    where orden.id_departamento=".$_GET['id']


                                                    )or die($mysqli->error);
                                                  while ( $fila=mysqli_fetch_array($consulta)) {
                                                                  # code...
                                                    ?>
                                                    <li>
                                                      <div class="block">

                                                        <div class="tags">
                                                        <!--<div class="row">
                                                                  <div class="col-md-1 col-sm-1 col-xs-1">-->
                                                                         <a href="" class="tag ">
                                                               
                                                                       <span><?php echo $fila['ord_id'] ?></span>
                                                               
                                                                         </a>
                                                               <!--   </div>
                                                            </div>-->
                                                        </div>
                                                        <div class="block_content">

                                                        <div class="row">
                                                               <div class="col-md-1 col-sm-1 col-xs-12">
                                                                  <small>Cuenta</small> 

                                                                </div>
                                                                 <div class="col-md-3 col-sm-3 col-xs-12 pull-right" style="    text-align: right;">
                                                                 <small>No. Factura <?php echo $fila['ord_numfactura'] ?></small>
                                                                 </div>

                                                        </div>

                                                        <div class="row">
                                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                                    <a><small>  Proveedor: </small> <?php echo $fila['nombre'] ?></a> 
                                                                      <small>  <?php echo $fila['departamento'] ?> </small>
                                                                </div>
                                                                 <div class="col-md-2 col-sm-2 col-xs-12">
                                                                    <a><small>  Vehiculo: </small> <?php echo $fila['ord_vehiculo'] ?></a> 
                                                                     
                                                                </div>
                                                                
                                                                <div class="col-md-2 col-sm-2 col-xs-12 pull-right" >
                                                                    <p class="pull-right"> <small>Fecha:  </small> <?php echo $fila['fecha'];?> </p>
                                                                </div>
                                                                <div class="col-md-4 col-sm-4 col-xs-12" style="text-align: right;">
                                                                    
                                                                </div>
                                                        </div>

                                                        <div class="row">
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                              <h4       style=" width: 100%;" >
                                                                      <?php echo $fila['material'] ?> </h4>  
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                                               <small>  <a class="" style="">
                                                                        <?php echo $fila['cuenta'] ?> </a></small>
                                                                </div>
                                                              
                                                                <div class="col-md-3 col-sm-3 col-xs-12" style="text-align: right;">
                                                                                    <a > Total:   $<?php echo
                                                                        number_format($fila['total_compromet'] ,2);
                                                                        ?></a> 
                                                                                     
                                                                </div>
                                                        </div>
                                                         <div class="row">
                                                                 <div class="col-md-9 col-sm-9 col-xs-12">
                                                                       <p class="excerpt" ><?php echo $fila['observaciones'] ?>  </p>
                                                                  </div>
                                                                
                                                                  <div class="col-md-3 col-sm-3 col-xs-12" style="text-align: right;">
                                                                             <button type="button" class="btn btn-success"
                                                                             style="  
                                                                                 width: 30%;
                                                                                 height: 32px;
                                                                                 font-size: 12px;
                                                                             "  >  <?php // echo $elstatus; ?></button>
                                                                            <a  style="width: 10%;color:black;" class="pull-right"><?php echo $fila['status']; ?></a>

                                                                  </div>
                                                        </div>

                                                        </div>
                                                      </div>
                                                    </li>
                                                    <?php  } ?>
                                                  </ul>
                                    </div>


                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                                   <ul class="list-unstyled timeline"> 
                                                    <?php 
                                                    include './conexion.php';
                                                    $consulta=$mysqli->query(
                                                      "SELECT orden.*, departamentos.*, cuentas.*, proveedores.*
                                                      FROM orden
                                                      INNER JOIN departamentos ON orden.id_departamento = departamentos.id_departamento
                                                      INNER JOIN cuentas ON orden.id_cuenta = cuentas.id_cuenta
                                                      INNER JOIN proveedores ON orden.id_proveedor = proveedores.id_proveedor
                                                      where orden.id_departamento=".$_GET['id']." and orden.status='Emitido'"


                                                      )or die($mysqli->error);
                                                    while ( $fila=mysqli_fetch_array($consulta)) {
                                                                    # code...
                                                      ?>
                                                      <li>
                                                           <div class="block">
                                                        <div class="tags">
                                                          <a href="" class="tag ">
                                                            <span><?php echo $fila['ord_id'] ?></span>
                                                          </a>
                                                        </div>
                                                        <div class="block_content">

                                                        <div class="row">
                                                         <div class="col-md-3 col-sm-3 col-xs-12">
                                                                  <small> Cuenta</small> 
                                                                </div>
                                                        </div>

                                                        <div class="row">
                                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                                    <a><?php echo $fila['nombre'] ?></a> 
                                                                      <small>  <?php echo $fila['departamento'] ?> </small>
                                                                </div>
                                                                
                                                                <div class="col-md-2 col-sm-2 col-xs-12 pull-right" >
                                                                    <p class="pull-right"> <small>Fecha:  </small> <?php echo $fila['fecha'];?> </p>
                                                                </div>
                                                                <div class="col-md-4 col-sm-4 col-xs-12" style="text-align: right;">
                                                                    
                                                                </div>
                                                        </div>

                                                        <div class="row">
                                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                                              <h4       style=" width: 100%;" >
                                                                      <?php echo $fila['material'] ?> </h4>  
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                                               <small>  <a class="" style="">
                                                                        <?php echo $fila['cuenta'] ?> </a></small>
                                                                </div>
                                                                <div class="col-md-2 col-sm-2 col-xs-12" >
                                                                               
                                                                        
                                                                </div>
                                                                <div class="col-md-4 col-sm-4 col-xs-12" style="text-align: right;">
                                                                                    <a > Total:   $<?php echo
                                                                        number_format($fila['total_compromet'] ,2);
                                                                        ?></a> 
                                                                                     
                                                                </div>
                                                        </div>
                                                         <div class="row">
                                                                 <div class="col-md-8 col-sm-8 col-xs-12">
                                                                       <p class="excerpt" ><?php echo $fila['observaciones'] ?>  </p>
                                                                  </div>
                                                                  <div class="col-md-4 col-sm-4 col-xs-12">
                                                                            <a  style="width: 10%;color:black;" class="pull-right"><?php echo $fila['status']; ?></a>
                                                                  </div>
                                                        </div>

                                                        </div>
                                                      </div>
                                                      </li>
                                                      <?php  } ?>
                                                    </ul>
                                    </div>


                                  <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                          <ul class="list-unstyled timeline"> 
                                            <?php 
                                            include './conexion.php';
                                            $consulta=$mysqli->query(
                                              "SELECT orden.*, departamentos.*, cuentas.*, proveedores.*
                                              FROM orden
                                              INNER JOIN departamentos ON orden.id_departamento = departamentos.id_departamento
                                              INNER JOIN cuentas ON orden.id_cuenta = cuentas.id_cuenta
                                              INNER JOIN proveedores ON orden.id_proveedor = proveedores.id_proveedor
                                              where orden.id_departamento=".$_GET['id']#." and orden.status='Devengado'"


                                              )or die($mysqli->error);
                                            while ( $fila=mysqli_fetch_array($consulta)) {
                                                            # code...
                                              ?>
                                              <li>
                                                  <div class="block">
                                                          <div class="tags">
                                                            <a href="" class="tag ">
                                                              <span><?php echo $fila['ord_id'] ?></span>
                                                            </a>
                                                          </div>
                                                          <div class="block_content">

                                                          <div class="row">
                                                           <div class="col-md-3 col-sm-3 col-xs-12">
                                                                    <small> Cuenta</small> 
                                                                  </div>
                                                          </div>

                                                          <div class="row">
                                                                  <div class="col-md-3 col-sm-3 col-xs-12">
                                                                      <a><?php echo $fila['nombre'] ?></a> 
                                                                        <small>  <?php echo $fila['departamento'] ?> </small>
                                                                  </div>
                                                                  
                                                                  <div class="col-md-2 col-sm-2 col-xs-12 pull-right" >
                                                                      <p class="pull-right"> <small>Fecha:  </small> <?php echo $fila['fecha'];?> </p>
                                                                  </div>
                                                                  <div class="col-md-4 col-sm-4 col-xs-12" style="text-align: right;">
                                                                      
                                                                  </div>
                                                          </div>

                                                          <div class="row">
                                                                  <div class="col-md-3 col-sm-3 col-xs-12">
                                                                                <h4       style=" width: 100%;" >
                                                                        <?php echo $fila['material'] ?> </h4>  
                                                                  </div>
                                                                  <div class="col-md-3 col-sm-3 col-xs-12">
                                                                                 <small>  <a class="" style="">
                                                                          <?php echo $fila['cuenta'] ?> </a></small>
                                                                  </div>
                                                                  <div class="col-md-2 col-sm-2 col-xs-12" >
                                                                                 
                                                                          
                                                                  </div>
                                                                  <div class="col-md-4 col-sm-4 col-xs-12" style="text-align: right;">
                                                                                      <a > Total:   $<?php echo
                                                                          number_format($fila['total_compromet'] ,2);
                                                                          ?></a> 
                                                                                       
                                                                  </div>
                                                          </div>
                                                           <div class="row">
                                                                   <div class="col-md-8 col-sm-8 col-xs-12">
                                                                         <p class="excerpt" ><?php echo $fila['observaciones'] ?>  </p>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                                              <a  style="width: 10%;color:black;" class="pull-right"><?php echo $fila['status']; ?></a>
                                                                    </div>
                                                          </div>

                                                          </div>
                                                        </div>
                                              </li>
                                              <?php  } ?>
                                            </ul>
                                  </div>
                                   <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                                          <ul class="list-unstyled timeline"> 
                                            <?php 
                                            include './conexion.php';
                                            $consulta=$mysqli->query(
                                              "SELECT orden.*, departamentos.*, cuentas.*, proveedores.*
                                              FROM orden
                                              INNER JOIN departamentos ON orden.id_departamento = departamentos.id_departamento
                                              INNER JOIN cuentas ON orden.id_cuenta = cuentas.id_cuenta
                                              INNER JOIN proveedores ON orden.id_proveedor = proveedores.id_proveedor
                                              where orden.id_departamento=".$_GET['id']#."and orden.status='Pagado'"


                                              )or die($mysqli->error);
                                            while ( $fila=mysqli_fetch_array($consulta)) {
                                                            # code...
                                              ?>
                                              <li>
                                                   <div class="block">
                                                          <div class="tags">
                                                            <a href="" class="tag ">
                                                              <span><?php echo $fila['ord_id'] ?></span>
                                                            </a>
                                                          </div>
                                                          <div class="block_content">

                                                          <div class="row">
                                                           <div class="col-md-3 col-sm-3 col-xs-12">
                                                                    <small> Cuenta</small> 
                                                                  </div>
                                                          </div>

                                                          <div class="row">
                                                                  <div class="col-md-3 col-sm-3 col-xs-12">
                                                                      <a><?php echo $fila['nombre'] ?></a> 
                                                                        <small>  <?php echo $fila['departamento'] ?> </small>
                                                                  </div>
                                                                  
                                                                  <div class="col-md-2 col-sm-2 col-xs-12 pull-right" >
                                                                      <p class="pull-right"> <small>Fecha:  </small> <?php echo $fila['fecha'];?> </p>
                                                                  </div>
                                                                  <div class="col-md-4 col-sm-4 col-xs-12" style="text-align: right;">
                                                                      
                                                                  </div>
                                                          </div>

                                                          <div class="row">
                                                                  <div class="col-md-3 col-sm-3 col-xs-12">
                                                                                <h4       style=" width: 100%;" >
                                                                        <?php echo $fila['material'] ?> </h4>  
                                                                  </div>
                                                                  <div class="col-md-3 col-sm-3 col-xs-12">
                                                                                 <small>  <a class="" style="">
                                                                          <?php echo $fila['cuenta'] ?> </a></small>
                                                                  </div>
                                                                  <div class="col-md-2 col-sm-2 col-xs-12" >
                                                                                 
                                                                          
                                                                  </div>
                                                                  <div class="col-md-4 col-sm-4 col-xs-12" style="text-align: right;">
                                                                                      <a > Total:   $<?php echo
                                                                          number_format($fila['total_compromet'] ,2);
                                                                          ?></a> 
                                                                                       
                                                                  </div>
                                                          </div>
                                                           <div class="row">
                                                                   <div class="col-md-8 col-sm-8 col-xs-12">
                                                                         <p class="excerpt" ><?php echo $fila['observaciones'] ?>  </p>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                                              <a  style="width: 10%;color:black;" class="pull-right"><?php echo $fila['status']; ?></a>
                                                                    </div>
                                                          </div>

                                                          </div>
                                                        </div>
                                              </li>
                                              <?php  } ?>
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

    <!--  --><div style="width:10%;position:fixed;margin-left:70%;margin-top:70%;">ertyuiop</div>

    <div class="clearfix"></div>



    <div class="clearfix"></div>
  </div>

  <div class="clearfix"></div>




</div>
<div class="clearfix"></div>
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

<div id="custom_notifications" class="custom-notifications dsp_none">
  <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
  </ul>
  <div class="clearfix"></div>
  <div id="notif-group" class="tabbed_notifications"></div>
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
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- PNotify -->

<!-- bootstrap-datetimepicker -->    
<script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
<script >
          $(document).ready(function(){
                  $("#buscar").on('keyup',function(){
                    var op =$("#myTab").find(".active").find("a").text();
                    var div="";
                  if (  op=="General") {
                        $("#tab_content1").find("ul").find("li").remove();
                        div="#tab_content1";

                  };
                   if (  op=="Emitido") {
                        $("#tab_content2").find("ul").find("li").remove();
                         div="#tab_content2";
                  };
                   if (  op=="Devengado") {
                        $("#tab_content3").find("ul").find("li").remove();
                         div="#tab_content3";
                  };
                   if (  op=="Pagado") {
                        $("#tab_content4").find("ul").find("li").remove();
                         div="#tab_content4";
                  };
                          $.ajax({
                                  url: "./codigos/busqueda.php",
                                  method:"POST",
                                  data:{ 
                                    texto:$("#buscar").val(),
                                    opcion:op,
                                    id:<?php  echo $_GET['id']; ?>
                                  }
                          }).done(function(respuesta){
                                  $(div).find("ul").append(respuesta);
                          });
                  });
          });
</script>

</body>
</html>
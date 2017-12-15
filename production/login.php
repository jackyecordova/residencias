<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Inicio de Sesión </title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
   <!-- -->
   <a class="hiddenanchor" id="signup"></a>
   <a class="hiddenanchor" id="signin"></a>

   <div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <form class="entrar" method="post" action="./codigos/verificarlogin.php" id="entrar">
          <h1>Inicio de sesión</h1>
          <div>
            <input type="text" class="form-control" placeholder="Nombre de Usuario"
            name="nombre"
            id="nombre" required="required" />
          </div>
          <div>
            <input type="password" class="form-control" placeholder="Contraseña"
            name="contrasena"
            id="contrasena" required="required"  />
          </div>
          <div>
            <button class="btn btn-default" type="submit" id="send" >Iniciar Sesión</button> 

          </div>

          <div class="alert alert-danger" role="alert" 
          style="background-color: rgba(210, 20, 0, 0.19); 
              text-shadow: 0px 0px rgba(153, 153, 153, 0);  
          color: rgb(241, 83, 68);
              display: none;"
          id="error"
          >Usuario o contraseña inválida
        </div>

        <div class="clearfix"></div>
                        <div class="alert alert-danger alert-dismissible " role="alert" style="background-color: rgba(210, 20, 0, 0.19); 
                                 text-shadow: 0px 0px rgba(153, 153, 153, 0);  
                              color: rgb(241, 83, 68);display:none;" id="alerta">La contraseña es incorrecta
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                 </button>
                                 </div>
        <div class="separator">
          <p class="change_link">
            <a href="#signup" class="register"> Crear una cuenta </a>
          </p>

          <div class="clearfix"></div>
          <br />

          <div>
            <h1><i class="fa fa-university"></i> Presidencia Municipal</h1>
            <p>de Nuevo Casas Grandes</p>
          </div>
        </div>
      </form>
    </section>
  </div>























  <div id="register" class="animate form registration_form">
    <section class="login_content">
      <form >
        <h1>Crear Cuenta</h1>
       <br>
      <br>
      <div>
        <label> Asiste con el Oficial Mayor Para Tu Registro</label>
      </div>


     <!-- <div>
        <button class="btn btn-default" type="submit" >Registrar</button> 
      </div>-->
      

<br>
<br>


      <div class="clearfix"></div>

      <div class="separator">
       <p class="change_link">
         <a href="#signin" class="to_register" id=""> Iniciar Sesión</a>
       </p>


       <div class="clearfix"></div>
       <br />

       <div>
        <h1><i class="fa fa-university"></i> Presidencia Municipal</h1>
        <p>de Nuevo Casas Grandes</p>
      </div>
    </div>
  </form>
</section>
</div>


</div>
</div>
<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>

<script >
      $(document).ready(function  (argument) {
      $("#alerta").hide();
      //alert("fg");
        
  $("#send").on("click",function  (e) {
           e.preventDefault();//para que no se vaya
          $.ajax({
            method:'POST',
            url:'./codigos/validarlogin.php',
            data:{
              nombre:$("#nombre").val(),
              contrasena:$("#contrasena").val()
            }
          }).done(function(e2){
            if(e2=="no"){
               $("#alerta").show();
                //alert(e2); 
                
            }else{
              $("#entrar").submit();//envio de formulario ya no se va al ajax
                //alert(e2);
            }
           
          });

        });

       
    });
   </script>
</body>
</html>

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
            <button class="btn btn-default" type="submit" >Iniciar Sesión</button> 

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
         <a href="#signin" class="to_register"> Iniciar Sesión</a>
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



<!--...........................................................................................



 <div id="confirmar" class="animate form registration_form">
    <section class="login_content">
      <form action="./codigos/nuevousuario.php" method="post">
        <h1>Crear Cuenta</h1>
       
        <div>
          <input type="password" class="form-control" placeholder="Contraseña" required="" 
          id="contrasena"
          name="contrasena"
          required="required"  />
        </div>


       
      <div>
        <button class="btn btn-default" type="submit" >Confirmar </button> 
      </div>

      <div class="clearfix"></div>

      <div class="separator">
       <p class="change_link">
         <a href="#signin" class="to_register"> Iniciar Sesión</a>
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





-->




</div>
</div>
<script>
   // var formulariologin=document.getElementById("entrar");
   // var txtusuario=document.getElementById("nombre");
   // var txcontrasenia=document.getElementById("contrasena");
//
   // var divEr=document.getElementById("error");
   // 
   // formulariologin.addEventListener("submit",function(evt){
   //   
   //   if(txtusuario.value !="" && txcontrasenia.value!=""){
      

   //   }else {
   //     evt.preventDefault();
   //     divEr.style.display="block";
    //    divEr.innerHTML="<b>Error:</b> Llenar campos";
   //   }
      
  //  });
   // txtusuario.addEventListener("keypress",function(evt){
   //   divEr.style.display="none";
    });
   // txcontrasenia.addEventListener("keypress",function(evt){
  //    divEr.style.display="none";
   // });
 //   function ocultar(evt){
 //     divEr.style.display="none";
 //   }

  </script>
</body>
</html>

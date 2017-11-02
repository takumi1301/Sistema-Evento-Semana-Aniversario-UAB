<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

       <script type="text/javascript" src="view/jquery/jquery-3.2.1.min.js"></script> 
       <script src="view/Index/js/AutentificarAjax.js"></script> 
       <link href="view/Index/css/style-login.css" rel="stylesheet" type="text/css" media="all" />

<!-- Funte WEB Roboto  --> 
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,700i" rel="stylesheet">
<!-- //web font --> 
</head>
<body>
  <!-- main -->
  <div class="main">
    <div class="mt-5 main-w3lsrow">
      <!-- login form -->
      <div class=" login-form login-form-left"> 
        <div class="agile-row" >
          <h2>Ingreso al Sistema</h2> 
          <div class="login-agileits-top">  
            <form id = "autentificacion"  name="contact_form" method="POST"> 
              <p>Usuario</p>
              <input type=text name="usuario" class="name"  placeholder="Ingrese un usuario" required=""/>
              <br>

              <p >Contraseña</p>
              <input type=password name="contrasenia"  class="password" placeholder="Ingrese una contraseña valida" required=""/>     
              <input type="submit" value="Ingresar"> 
            </form>   
          </div> 

        </div>  
      </div>  
    </div>  
  </div>  
  <!-- //main --> 
</body>
</html

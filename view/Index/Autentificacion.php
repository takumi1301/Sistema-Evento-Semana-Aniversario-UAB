<!DOCTYPE html>
<html>
<head charset="utf-8">
  <title>Login</title>
</head>

      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0"> 
       <link rel="stylesheet" type="text/css" href="view/Index/bootstrap/css/bootstrap.min.css">  
       <link rel="stylesheet" type="text/css" href="view/Index/css/estilos.css" /> 
       <script type="text/javascript" src="view/jquery/jquery-3.2.1.min.js"></script> 
       <script src="view/Index/js/AutentificarAjax.js"></script> 

<body>



  <div class="container" aling = center>
    <FORM id = "autentificacion" class="contact_form" name="contact_form" method="POST">
        <h1>Ingresar el Usuario</h1> <br>
        <TABLE BORDER=0>
            <TR>
              <TD>Usuario:</TD>
              <TD><INPUT type=text name="usuario" class="form-control" title="Se requiere un usuario valido" placeholder="Ingrese un usuario"  required/>  </TD>
            </TR>
            <TR>
              <TD>Contaseña:</TD>
              <TD><INPUT type=password name="contrasenia" class="form-control" title="Ingrese una contraseña" placeholder="Ingrese una contraseña valida"  required/>  </TD>
          </TR>
          <TR>
              <TD>
               <input type="hidden" name="datos" value="1">
              <button class="btn btn-primary btn" type="submit">Ingresar</button>
              <button class="btn btn-danger btn" type="reset">Cancelar</button>
            </TD>
          </TR>
        </TABLE>
    </FORM>
</div>

</body>
       
</html>


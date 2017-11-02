<?php include("view/Index/cabecera.php");?>

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

<?php include("view/Index/pies.php"); ?>

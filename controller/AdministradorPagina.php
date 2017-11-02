<?php

class AdministradorPagina
{
  private $Modo;

  public function __construct($modo)
  {
    $this->Modo = $modo;
  }

  public function MenuIndex()
  {
    switch ($this->Modo) {
 
        case 'AccesoDenegado':
          echo "Acceso denegado";
        break;

        case 'SesionCaducada':
          echo "Sesion caducada";
        break;

        case 'UsuarioInexistente':
          echo "Usuario inexistente";
        break;

        case 'ContrasenaIncorrecta':
          echo "Error en la contraseña";
        break;

        case 'UsuarioInactivo':
          echo "Usuario Inactivo";
        break;

        case 'CamposLlenos':
               //echo $_POST['usuario'].$_POST['contrasenia'];
          if (isset($_POST['usuario']) && isset($_POST['contrasenia']) )
          {
            include 'model/Conexion.php';
            include 'model/UsuarioModel.php';
            include 'model/ManejadorUsuario.php';
            include 'controller/UsuarioController.php';
            include 'model/SesionUsuario.php';
            
            $conexion = new Conexion();
            $objetoUsuario  = new UsuarioModel();
            $objetoUsuario->user = $_POST['usuario'];
            $objetoUsuario->password = $_POST['contrasenia'];
        
            $objetoUsuarioController = new UsuarioController($conexion);
            $objetoUsuarioController->datosUsuario($objetoUsuario);
          }
          else
          {
            echo "Llene el formulario";
          }
        break;//fin campos llenos del usuario que se autentifica


        case 'Salir':
          session_start();
          session_destroy();
          header("Location: index.php");
        break;

        case 'default':
            //include 'view/Index/header.php';
            include 'view/Index/Autentificacion.php';//es el inicio de la pagina cuando se carga
            //include 'view/Index/footer.php';
        break;

    }//end swish

  }//end function


}//end class


?>

<?php 

class UsuarioController
{
	private $Conexion;
	function __construct($conexionn)
  {
    $this->Conexion = $conexionn;
  }

  public function registrarUsuario(UsuarioModel $usuario)
  {
    $objManejadorUsuario = new ManejadorUsuario($this->Conexion);
    return $objManejadorUsuario->registrarUsuario($usuario);
  }//end function

  public function datosUsuario(UsuarioModel $objUsuario)
  { //var_dump($objUsuario);
    $objetoUsuario = new ManejadorUsuario($this->Conexion);
    $datosUsuario = $objetoUsuario->datosUsuario($objUsuario->user);
    //var_dump($datosUsuario);
    $datosUsuario = $datosUsuario[0];
    if (!empty($datosUsuario))
    {
      if ($datosUsuario['password'] == $objUsuario->password)
      {
          if ($datosUsuario['estado'] == 1)
          {   //echo "usuario activo";
            $objUsuario->idUsuario = $datosUsuario['idUsuario'];
            $objUsuario->user = $datosUsuario['user'];
            $objUsuario->idRolUsuario = $datosUsuario['idRolUsuario'];
            $objUsuario->primerNombre = $datosUsuario['primerNombre'];
            $objUsuario->primerApellido = $datosUsuario['primerApellido'];
            $objUsuario->estado = $datosUsuario['estado'];

            //iniciando la sesion del usuario
            session_start();
            $sesion = new SesionUsuario($objUsuario);
            $sesion->crearSession();

            echo $objUsuario->idRolUsuario;
            //echo "usuario activo";
          }
          else
          {
            echo "UsuarioInactivo";
          }
      }
      else
      {
            echo "ContrasenaIncorrecta";
      }
    }
    else
    {
      echo "UsuarioInexistente";
    }
  }//end function  
  


}


 ?>
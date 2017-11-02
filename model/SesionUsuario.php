<?php

class SesionUsuario //Clase para abrir una sesion
{
      private $objUsuario;

      function __construct(UsuarioModel $usuario)
      {
          $this->objUsuario = $usuario;
      }

      public function crearSession()
      {
         $_SESSION['idUsuario'] = $this->objUsuario->idUsuario;
         $_SESSION['user'] = $this->objUsuario->user;
         //$_SESSION['password'] = $this->objUsuario->password;
         $_SESSION['idRolUsuario'] = $this->objUsuario->idRolUsuario;
         $_SESSION['nombre'] = $this->objUsuario->devolverNombreCompleto();

         //var_dump($_SESSION);
      }//end function
  
}//end SesionUsuario

?>

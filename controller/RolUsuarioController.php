<?php 

class RolUsuarioController
{



	private $Conexion;
	function __construct($conexionn)
  {
    $this->Conexion = $conexionn;
  }




  public function registrarRolUsuario(RolUsuarioModel $rolUsuario)
 {
    $objManejadorRolUsuario = new ManejadorRolUsuario($this->Conexion);
    return $objManejadorRolUsuario->registrarRolUsuario($rolUsuario);
  }//end function




 public function listaDeRolUsuario(){
      
      $objetoManejadorRolUsuario = new ManejadorRolUsuario($this->Conexion);
      $resultadoListaRolesUsuarios = $objetoManejadorRolUsuario->listarRolUsuario();
      $arregloRoles = array();
      $i = 0;

      foreach ($resultadoListaRolesUsuarios as $registroRolUsuario)
      {
          $objetoRolUsuario = new RolUsuarioModel();
          $objetoRolUsuario->idRolUsuario=$registroRolUsuario['idRolUsuario'];
          $objetoRolUsuario->nombreRol=$registroRolUsuario['nombreRol'];
        
         
          $arregloRoles[$i] = $objetoRolUsuario;
          $i++;
      }
      return $arregloRoles;
   }//end function listaDeColegios


  


}


 ?>
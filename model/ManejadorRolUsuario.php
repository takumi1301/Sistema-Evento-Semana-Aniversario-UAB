<?php 

class ManejadorRolUsuario
{

private $Conexion;
		function __construct($conexion)
		{
			$this->Conexion = $conexion;
		}



public function registrarRolUsuario(RolUsuarioModel $rolUsuario)
		{
			
			$nombreRol = $rolUsuario->nombreRol;
		
		
			try
			{
				$this->Conexion->beginTransaction();


				$insertarRolUsuario = "INSERT INTO rolUsuario(nombreRol) VALUES (:nombreRol);";

					$atributoRolUsuario = $this->Conexion->prepare($insertarRolUsuario);

				
				
					$atributoRolUsuario->bindParam(":nombreRol",$nombreRol);
					
					$atributoRolUsuario->execute();

					$this->Conexion->commit();
					return TRUE;
			}
			catch(PDOExeption $e)
			{
				  echo ' ERROR: No se logro realizar el registro - '.$e->getMesage();
      			  $this->Conexion->rollBack();
      			  return FALSE;
			}

		} // fin funcion registrar participante



public function listarRolUsuario(){
    $consultaRol = "SELECT idRolUsuario,nombreRol 
                      FROM rolUsuario 
                      ORDER BY nombreRol;";
    $consulta = $this->Conexion->prepare($consultaRol);
    $consulta->execute();
    $listaRol = $consulta->fetchAll();
    return $listaRol;
}//end function





}


 ?>
<?php 

class ManejadorTipoActividad
{

private $Conexion;
		function __construct($conexion)
		{
			$this->Conexion = $conexion;
		}


public function verificarExisteNombreTipoActividad($tipoActividad)
		{
			$consultaExisteTipoActividad = "SELECT nombreTipoActividad FROM tipoActividad WHERE nombreTipoActividad = :nombreTipoActividad;";
			$consulta = $this->Conexion->prepare($consultaExisteActividad);
			$consulta->bindParam(":nombreEvento",$nombreEvento); //vincula un parametro con una variable
			$consulta->execute();
			$resultadoExisteEvento = $consulta->fetchAll();
			return $resultadoExisteEvento;
		}





public function registrarTipoActividad(TipoActividadModel $tipoActividad)
		{
		//	$idTipoActividad = $tipoActividad->idTipoActividad;
			$nombreTipoActividad = $tipoActividad->nombreTipoActividad;
			$estadoTipoActividad = $tipoActividad->estadoTipoActividad;
		
		
			try
			{
				$this->Conexion->beginTransaction();


				$insertarTipoActividad = "INSERT INTO tipoActividad(nombreTipoActividad, estadoTipoActividad) VALUES (:nombreTipoActividad, :estadoTipoActividad);";

					$atributoTipoActividad = $this->Conexion->prepare($insertarTipoActividad);

				
				//	$atributoTipoActividad->bindParam(":idTipoActividad",$idTipoActividad);
					$atributoTipoActividad->bindParam(":nombreTipoActividad",$nombreTipoActividad);
					$atributoTipoActividad->bindParam(":estadoTipoActividad",$estadoTipoActividad);
					
					$atributoTipoActividad->execute();

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



		public function devolverDatosTipoActividad($idTipoActividad)
		{
	
			$consultaDatosTipoActividad = "SELECT idTipoActividad,nombreTipoActividad,estadoTipoActividad FROM tipoActividad WHERE idTipoActividad = :idTipoActividad;";
			$consultaDatosTipoActividad = $this->Conexion->prepare($consultaDatosTipoActividad);
			$consultaDatosTipoActividad->bindParam(":idTipoActividad",$idTipoActividad); //vincula un parametro con una variable
			$consultaDatosTipoActividad->execute();
			$resultadoDatosTipoActividad = $consultaDatosTipoActividad->fetchAll();

			return $resultadoDatosTipoActividad;
		}









public function listaDeTipoActividades(){
    $consultaTipoActividad = "SELECT idTipoActividad,nombreTipoActividad, estadoTipoActividad
                      FROM tipoActividad 
                      ORDER BY nombreTipoActividad;";
    $consulta = $this->Conexion->prepare($consultaTipoActividad);
    $consulta->execute();
    $listaTipoActividad = $consulta->fetchAll();
    return $listaTipoActividad;
}//end function




public function actualizarTipoActividad(TipoActividadModel $tipoActividad)
		{
			
			$idTipoActividad = $tipoActividad->idTipoActividad;
			
			$nombreTipoActividad = $tipoActividad->nombreTipoActividad;
			
			$estadoTipoActividad = $tipoActividad->estadoTipoActividad;

			try
			{
				$this->Conexion->beginTransaction();

					$actualizarTipoActividad = "UPDATE tipoActividad SET nombreTipoActividad = :nombreTipoActividad,estadoTipoActividad = :estadoTipoActividad WHERE idTipoActividad = :idTipoActividad;";
					
					$atributoTipoActividad = $this->Conexion->prepare($actualizarTipoActividad);
					$atributoTipoActividad->bindParam(":nombreTipoActividad",$nombreTipoActividad);
			       
					$atributoTipoActividad->bindParam(":estadoTipoActividad",$estadoTipoActividad);
					$atributoTipoActividad->bindParam(":idTipoActividad",$idTipoActividad);
				


					$atributoTipoActividad->execute();

					$this->Conexion->commit();
					return true;
			}
			catch(PDOExeption $e)
			{
				  echo ' ERROR: No se logro actualizar el registro - '.$e->getMesage();
      			  $this->Conexion->rollBack();
      			  return FALSE;
			}

		} // fin funcion










}


 ?>
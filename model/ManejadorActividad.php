<?php 

class ManejadorActividad
{

	private $Conexion;
		function __construct($conexion)
		{
			$this->Conexion = $conexion;
		}



	/*	public function verificarExisteNombreActividad($nombreevento)
		{
			$consultaExisteEvento = "SELECT nombreEvento FROM evento WHERE nombreEvento = :nombreEvento;";
			$consulta = $this->Conexion->prepare($consultaExisteActividad);
			$consulta->bindParam(":nombreEvento",$nombreEvento); //vincula un parametro con una variable
			$consulta->execute();
			$resultadoExisteEvento = $consulta->fetchAll();
			return $resultadoExisteEvento;
		}*/



		public function registrarActividad(ActividadModel $actividad)
		{


			$idEvento = $actividad->idEvento;
			$nombreActividad = $actividad->nombreActividad;
			$idTipoActividad = $actividad->idTipoActividad;
			$estadoActividad = $actividad->estadoActividad;


			try
			{
				$this->Conexion->beginTransaction();

					$insertarActividad = "INSERT INTO actividad(idEvento,nombreActividad,idTipoActividad,estadoActividad) VALUES (:idEvento,:nombreActividad,:idTipoActividad,:estadoActividad);";
				

					$atributoActividad = $this->Conexion->prepare($insertarActividad);

					$atributoActividad->bindParam(":nombreActividad",$nombreActividad);
			        $atributoActividad->bindParam(":idEvento",$idEvento);
					$atributoActividad->bindParam(":idTipoActividad",$idTipoActividad);
					$atributoActividad->bindParam(":estadoActividad",$estadoActividad);					
					$atributoActividad->execute();

					$this->Conexion->commit();
					return true;
			}
			catch(PDOExeption $e)
			{
				  echo ' ERROR: No se logro realizar el registro - '.$e->getMesage();
      			  $this->Conexion->rollBack();
      			  return FALSE;
			}

		} // fin funcion

		


		public function actualizarActividad(ActividadModel $actividad)
		{
			//var_dump($evento);
			$idEvento = $actividad->idEvento;
			$idActividad = $actividad->idActividad;
			$nombreActividad = $actividad->nombreActividad;
			//echo "Nombre Evento:      ".$nombreEvento;
			$estadoActividad = $actividad->estadoActividad;
			$idTipoActividad = $actividad->idTipoActividad;
			

			try
			{
				$this->Conexion->beginTransaction();

					$actualizarActividad = "UPDATE actividad SET nombreActividad = :nombreActividad,estadoActividad = :estadoActividad,idEvento = :idEvento,idTipoActividad = :idTipoActividad  WHERE idActividad = :idActividad;";
					
					$atributoActividad = $this->Conexion->prepare($actualizarEvento);
					$atributoActividad->bindParam(":nombreActividad",$nombreActividad);
			        $atributoActividad->bindParam(":idEvento",$idEvento);
					$atributoActividad->bindParam(":idTipoActividad",$idTipoActividad);
					$atributoActividad->bindParam(":estadoActividad",$estadoActividad);
					$atributoActividad->bindParam(":idActividad",$idActividad);
					


					$atributoActividad->execute();

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




		public function devolverDatosActividad($idActividad)
		{
			$consultaDatosActividad = "SELECT idActividad,idEvento,nombreActividad,idTipoActividad,estadoActividad FROM actividad WHERE idActividad = :idActividad;";
			$consultaDatosActividad = $this->Conexion->prepare($consultaDatosActividad);
			$consultaDatosActividad->bindParam(":idActividad",$idActividad); //vincula un parametro con una variable
			$consultaDatosActividad->execute();
			$resultadoDatosActividad = $consultaDatosActividad->fetchAll();

			return $resultadoDatosActividad;
		}


		public function listaDeActividades(){
		    $consultaListaDeActividades = "SELECT idActividad,nombreActividad,estadoActividad,idTipoActividad,idEvento 
				                       FROM actividad
				                       ORDER BY nombreActividad;";
		    $consultaListaDeActividades = $this->Conexion->prepare($consultaListaDeActividades);
		    $consultaListaDeActividades->execute();
		    $resultadoListaDeActividades = $consultaListaDeActividades->fetchAll();
		    return $resultadoListaDeActividades;
		}//end function









}
	



 ?>
<?php 

class ManejadorInscripcion
{

	private $Conexion;
		function __construct($conexion)
		{
			$this->Conexion = $conexion;
		}



	/*	public function verificarExisteNombreEvento($nombreevento)
		{
			$consultaExisteEvento = "SELECT nombreEvento FROM evento WHERE nombreEvento = :nombreEvento;";
			$consulta = $this->Conexion->prepare($consultaExisteActividad);
			$consulta->bindParam(":nombreEvento",$nombreEvento); //vincula un parametro con una variable
			$consulta->execute();
			$resultadoExisteEvento = $consulta->fetchAll();
			return $resultadoExisteEvento;
		} */



		public function registrarInscripcion(InscripcionModel $inscripcion)
		{


		//	$idInscripcion = $inscripcion->idInscripcion;
			$idEvento = $inscripcion->idEvento;
			$idParticipante = $inscripcion->idParticipante;
			$idPaquete = $inscripcion->idPaquete;
			$fechaHoraInscripcion = $inscripcion->fechaHoraInscripcion;
			$montoTotal = $inscripcion->montoTotal;
			$fueValidado = $inscripcion->fueValidado;
			$horaFechaValidacion = $inscripcion->horaFechaValidacion;
			$idUsuario = $inscripcion->idUsuario;

			try
			{
				$this->Conexion->beginTransaction();

					$insertarInscripcion = "INSERT INTO inscripcion(idEvento, idParticipante, idPaquete, fechaHoraInscripcion, montoTotal, fueValidado, horaFechaValidacion, idUsuario) VALUES (:idEvento, :idParticipante, :idPaquete, :fechaHoraInscripcion, :montoTotal, :fueValidado, :horaFechaValidacion, :idUsuario);";
				
					$atributoInscripcion = $this->Conexion->prepare($insertarInscripcion);
					$atributoInscripcion->bindParam(":idEvento",$idEvento);
					$atributoInscripcion->bindParam(":idParticipante",$idParticipante);
					$atributoInscripcion->bindParam(":idPaquete",$idPaquete);
					$atributoInscripcion->bindParam(":fechaHoraInscripcion",$fechaHoraInscripcion);
					$atributoInscripcion->bindParam(":montoTotal",$montoTotal);
					$atributoInscripcion->bindParam(":fueValidado",$fueValidado);
					$atributoInscripcion->bindParam(":horaFechaValidacion",$horaFechaValidacion);
					$atributoInscripcion->bindParam(":idUsuario",$idUsuario);
			       

					$atributoInscripcion->execute();

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

		


		/*public function actualizarEvento(EventoModel $evento)
		{
			//var_dump($evento);
			$idEvento = $evento->idEvento;
			$idUsuario = $evento->idUsuario;
			$nombreEvento = $evento->nombreEvento;
			//echo "Nombre Evento:      ".$nombreEvento;
			$fechaInicio = $evento->fechaInicio;
			$fechaFin = $evento->fechaFin;
			$estado = $evento->estado;

			try
			{
				$this->Conexion->beginTransaction();

					$actualizarEvento = "UPDATE evento SET nombreEvento = :nombreEvento,fechaInicio = :fechaInicio,fechaFin = :fechaFin,idUsuario = :idUsuario,estado = :estado WHERE idEvento = :idEvento;";
					
					$atributoEvento = $this->Conexion->prepare($actualizarEvento);
					$atributoEvento->bindParam(":nombreEvento",$nombreEvento);
			        $atributoEvento->bindParam(":fechaInicio",$fechaInicio);
					$atributoEvento->bindParam(":fechaFin",$fechaFin);
					$atributoEvento->bindParam(":estado",$estado);
					$atributoEvento->bindParam(":idEvento",$idEvento);
					$atributoEvento->bindParam(":idUsuario",$idUsuario);


					$atributoEvento->execute();

					$this->Conexion->commit();
					return true;
			}
			catch(PDOExeption $e)
			{
				  echo ' ERROR: No se logro actualizar el registro - '.$e->getMesage();
      			  $this->Conexion->rollBack();
      			  return FALSE;
			}

		} // fin funcion*/




	/*	public function devolverDatosEvento($idEvento)
		{
			$consultaDatosEvento = "SELECT idEvento,nombreEvento,fechaInicio,fechaFin,estado FROM evento WHERE idEvento = :idEvento;";
			$consultaDatosEvento = $this->Conexion->prepare($consultaDatosEvento);
			$consultaDatosEvento->bindParam(":idEvento",$idEvento); //vincula un parametro con una variable
			$consultaDatosEvento->execute();
			$resultadoDatosEvento = $consultaDatosEvento->fetchAll();

			return $resultadoDatosEvento;
		}*/


		/*public function listaDeEventos(){
		    $consultaListaDeEventos = "SELECT idEvento,nombreEvento,fechaInicio,fechaFin,estado 
				                       FROM evento
				                       ORDER BY fechaInicio,fechaFin,nombreEvento;";
		    $consultaListaDeEventos = $this->Conexion->prepare($consultaListaDeEventos);
		    $consultaListaDeEventos->execute();
		    $resultadoListaDeEventos = $consultaListaDeEventos->fetchAll();
		    return $resultadoListaDeEventos;
		}//end function*/









}
	



 ?>
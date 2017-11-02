<?php 

class ManejadorParticipante
{

	private $Conexion;
		function __construct($conexion)
		{
			$this->Conexion = $conexion;
		}



		public function registrarParticipante(ParticipanteModel $participante)
		{
			$ciParticipante = $participante->ciParticipante;
			$sexoParticipante = $participante->sexoParticipante;
			$primerNombre = $participante->primerNombre;
			$segundoNombre = $participante->segundoNombre;
			$primerApellido = $participante->primerApellido;
			$segundoApellido = $participante->segundoApellido;
			$paisProcedencia = $participante->paisProcedencia;
			$ciudadProcedencia = $participante->ciudadProcedencia;
			$estudioUAB = $participante->estudioUAB;
			$promocionUAB = $participante->promocionUAB;
			$telefonoParticipante = $participante->telefonoParticipante;
			$correoParticipante = $participante->correoParticipante;
			$edadParticipante = $participante->edadParticipante;
			$tallaPolera = $participante->tallaPolera;
			
			try
			{
				$this->Conexion->beginTransaction();


				$insertarParticipante = "INSERT INTO participante(ciParticipante, sexoParticipante, primerNombre, segundoNombre, primerApellido, segundoApellido, paisProcedencia, ciudadProcedencia, estudioUAB, promocionUAB, telefonoParticipante, correoParticipante, edadParticipante, tallaPolera) VALUES (:ciParticipante, :sexoParticipante, :primerNombre, :segundoNombre, :primerApellido, :segundoApellido, :paisProcedencia, :ciudadProcedencia, :estudioUAB, :promocionUAB, :telefonoParticipante, :correoParticipante, :edadParticipante, :tallaPolera);";

					$atributoParticipante = $this->Conexion->prepare($insertarParticipante);

				
					$atributoParticipante->bindParam(":ciParticipante",$ciParticipante);
					$atributoParticipante->bindParam(":sexoParticipante",$sexoParticipante);
					$atributoParticipante->bindParam(":primerNombre",$primerNombre);
					$atributoParticipante->bindParam(":segundoNombre",$segundoNombre);
					$atributoParticipante->bindParam(":primerApellido",$primerApellido);
					$atributoParticipante->bindParam(":segundoApellido",$segundoApellido);
					$atributoParticipante->bindParam(":paisProcedencia",$paisProcedencia);
					$atributoParticipante->bindParam(":ciudadProcedencia",$ciudadProcedencia);
					$atributoParticipante->bindParam(":estudioUAB",$estudioUAB);
					$atributoParticipante->bindParam(":promocionUAB",$promocionUAB);
					$atributoParticipante->bindParam(":telefonoParticipante",$telefonoParticipante);
					$atributoParticipante->bindParam(":correoParticipante",$correoParticipante);
					$atributoParticipante->bindParam(":edadParticipante",$edadParticipante);
					$atributoParticipante->bindParam(":tallaPolera",$tallaPolera);
					$atributoParticipante->execute();


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



}
	



 ?>
<?php 

class ParticipanteController
{



	private $Conexion;
	function __construct($conexionn)
  {
    $this->Conexion = $conexionn;
  }




  public function registrarParticipante(ParticipanteModel $paticipante)
 {
    $objManejadorParticipante = new ManejadorParticipante($this->Conexion);
    return $objManejadorParticipante->registrarParticipante($participante);
  }//end function




}


 ?>
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










 public function devolverDatosDelParticipante($idParticipante)
     {  
        $objetoParticipante = new ParticipanteModel();
        $objetoManejadorParticipante = new ManejadorParticipante($this->Conexion);
        $resultadoDatosDelParticipante = $objetoManejadorParticipante->devolverDatosParticipante($idParticipante);
        $resultadoDatosDelParticipante = $resultadoDatosDelParticipante[0];
    

            $objetoParticipante->idParticipante = $resultadoDatosDelParticipante['idParticipante'];
            $objetoParticipante->ciParticipante=$resultadoDatosDelParticipante['ciParticipante'];
            $objetoParticipante->sexoParticipante=$resultadoDatosDelParticipante['sexoParticipante'];
            $objetoParticipante->primerNombre=$resultadoDatosDelParticipante['primerNombre'];
            $objetoParticipante->segundoNombre=$resultadoDatosDelParticipante['segundoNombre'];
            $objetoParticipante->primerApellido=$resultadoDatosDelParticipante['primerApellido'];
            $objetoParticipante->segundoApellido=$resultadoDatosDelParticipante['segundoApellido'];
            $objetoParticipante->paisProcedencia=$resultadoDatosDelParticipante['paisProcedencia'];
            $objetoParticipante->ciudadProcedencia=$resultadoDatosDelParticipante['ciudadProcedencia'];
            $objetoParticipante->estudioUAB=$resultadoDatosDelParticipante['estudioUAB'];
            $objetoParticipante->promocionUAB=$resultadoDatosDelParticipante['promocionUAB'];
            $objetoParticipante->telefonoParticipante=$resultadoDatosDelParticipante['telefonoParticipante'];
            $objetoParticipante->correoParticipante=$resultadoDatosDelParticipante['correoParticipante'];
            $objetoParticipante->edadParticipante=$resultadoDatosDelParticipante['edadParticipante'];
       		$objetoParticipante->tallaPolera=$resultadoDatosDelParticipante['tallaPolera'];
   

        return $objetoParticipante;

     }//end function




 public function listaDeParticipantes(){
        $objetoManejadorParticipante = new ManejadorParticipante($this->Conexion);
        $resultadoListaDeParticipantes = $objetoManejadorParticipante->listaDeParticipantes();
        $arregloDeParticipantes = array();
        $i = 0;

       foreach ($resultadoListaDeParticipantes as $registroParticipante)
        {
            $objetoParticipante = new ParticipanteModel();
            $objetoParticipante->idParticipante=$registroParticipante['idParticipante'];
            $objetoParticipante->ciParticipante=$registroParticipante['ciParticipante'];
            $objetoParticipante->sexoParticipante=$registroParticipante['sexoParticipante'];
            $objetoParticipante->primerNombre=$registroParticipante['primerNombre'];
            $objetoParticipante->segundoNombre=$registroParticipante['segundoNombre'];
            $objetoParticipante->primerApellido=$registroParticipante['primerApellido'];
            $objetoParticipante->segundoApellido=$registroParticipante['segundoApellido'];
            $objetoParticipante->paisProcedencia=$registroParticipante['paisProcedencia'];
            $objetoParticipante->ciudadProcedencia=$registroParticipante['ciudadProcedencia'];
            $objetoParticipante->estudioUAB=$registroParticipante['estudioUAB'];
            $objetoParticipante->promocionUAB=$registroParticipante['promocionUAB'];
            $objetoParticipante->telefonoParticipante=$registroParticipante['telefonoParticipante'];
            $objetoParticipante->correoParticipante=$registroParticipante['correoParticipante'];
            $objetoParticipante->edadParticipante=$registroParticipante['edadParticipante'];
       		$objetoParticipante->tallaPolera=$registroParticipante['tallaPolera'];
           
            $arregloDeParticipantes[$i] = $objetoParticipante;
            $i++;
        }
        return $arregloDeParticipantes;
      }//end function listaDeParticipantes



}


 ?>
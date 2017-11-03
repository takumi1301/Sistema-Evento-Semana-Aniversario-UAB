<?php 

class InscripcionController
{



	private $Conexion;
	function __construct($conexionn)
  {
    $this->Conexion = $conexionn;
  }




     public function registrarInscripcion($inscripcion)
     {
        $objetoConsulta = new ManejadorInscripcion($this->Conexion);
        return $objetoConsulta->registrarInscripcion($inscripcion);
     }//end function



/* public function devolverDatosDelEvento($idEvento)
     {  
        $objetoEvento = new EventoModel();
        $objetoManejadorEvento = new ManejadorEvento($this->Conexion);
        $resultadoDatosDelEvento = $objetoManejadorEvento->devolverDatosEvento($idEvento);
        $resultadoDatosDelEvento = $resultadoDatosDelEvento[0];
    

        $objetoEvento->idEvento = $resultadoDatosDelEvento['idEvento'];
        $objetoEvento->nombreEvento = $resultadoDatosDelEvento['nombreEvento'];
        $objetoEvento->fechaInicio = $resultadoDatosDelEvento['fechaInicio'];
        $objetoEvento->fechaFin = $resultadoDatosDelEvento['fechaFin'];
        $objetoEvento->estado = $resultadoDatosDelEvento['estado'];

        return $objetoEvento;

     }//end function

     public function listaDeEventos(){
        $objetoManejadorEvento = new ManejadorEvento($this->Conexion);
        $resultadoListaDeEventos = $objetoManejadorEvento->listaDeEventos();
        $arregloDeEventos = array();
        $i = 0;

        foreach ($resultadoListaDeEventos as $registroEvento)
        {
            $objetoEvento = new EventoModel();
            $objetoEvento->idEvento=$registroEvento['idEvento'];
            $objetoEvento->nombreEvento=$registroEvento['nombreEvento'];
            $objetoEvento->fechaInicio=$registroEvento['fechaInicio'];
            $objetoEvento->fechaFin=$registroEvento['fechaFin'];
            $objetoEvento->estado=$registroEvento['estado'];
           
            $arregloDeEventos[$i] = $objetoEvento;
            $i++;
        }
        return $arregloDeEventos;
      }//end function listaDeEventos*/


  


}


 ?>
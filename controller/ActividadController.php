<?php 

class ActividadController
{



	private $Conexion;
	function __construct($conexionn)
  {
    $this->Conexion = $conexionn;
  }




     public function registrarActividad($actividad)
     {
        $objetoConsulta = new ManejadorActividad($this->Conexion);
        return $objetoConsulta->registrarActividad($actividad);
     }//end function



 public function devolverDatosDelActividad($idActividad)
     {  
        $objetoActividad = new ActividadModel();
        $objetoManejadorActividad = new ManejadorActividad($this->Conexion);
        $resultadoDatosDelActividad = $objetoManejadorActividad->devolverDatosActividad($idActividad);
        $resultadoDatosDelActividad = $resultadoDatosDelActividad[0];
    

        $objetoActividad->idActividad = $resultadoDatosDelActividad['idActividad'];
        $objetoActividad->idEvento = $resultadoDatosDelActividad['idEvento'];
        $objetoActividad->nombreActividad = $resultadoDatosDelActividad['nombreActividad'];
        $objetoActividad->idTipoActividad = $resultadoDatosDelActividad['idTipoActividad'];
        $objetoActividad->estadoActividad = $resultadoDatosDelActividad['estadoActividad'];
     

        return $objetoActividad;

     }//end function

     public function listaDeActividades(){
        $objetoManejadorActividad = new ManejadorActividad($this->Conexion);
        $resultadoListaDeActividades = $objetoManejadorActividad->listaDeActividades();
        $arregloDeActividades = array();
        $i = 0;

        foreach ($resultadoListaDeActividades as $registroActividad)
        {
            $objetoActividad = new ActividadModel();
            $objetoActividad->idActividad=$registroActividad['idActividad'];
            $objetoActividad->idEvento=$registroActividad['idEvento'];
            $objetoActividad->nombreActividad=$registroActividad['nombreActividad'];
            $objetoActividad->idTipoActividad=$registroActividad['idTipoActividad'];
            $objetoActividad->estadoActividad=$registroActividad['estadoActividad'];
        
           
            $arregloDeActividades[$i] = $objetoActividad;
            $i++;
        }
        return $arregloDeActividades;
      }//end function listaDeEventos


  


}


 ?>
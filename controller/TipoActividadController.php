<?php 

class TipoActividadController
{
	private $Conexion;
	function __construct($conexionn)
  {
    $this->Conexion = $conexionn;
  }




     public function registrarTipoActividad($tipoActividad)
     {
        $objetoConsulta = new ManejadorTipoActividad($this->Conexion);
        return $objetoConsulta->registrarTipoActividad($tipoActividad);
     }//end function



 public function devolverDatosDelTipoActividad($idTipoActividad)
     {  
        $objetoTipoActividad = new TipoActividadModel();
        $objetoManejadorTipoActividad = new ManejadorTipoActividad($this->Conexion);

        $resultadoDatosDelTipoActividad = $objetoManejadorTipoActividad->devolverDatosTipoActividad($idTipoActividad);
        $resultadoDatosDelTipoActividad = $resultadoDatosDelTipoActividad[0];
    

        $objetoTipoActividad->idTipoActividad = $resultadoDatosDelTipoActividad['idTipoActividad'];
        $objetoTipoActividad->nombreTipoActividad = $resultadoDatosDelTipoActividad['nombreTipoActividad'];
        $objetoTipoActividad->estadoTipoActividad = $resultadoDatosDelTipoActividad['estadoTipoActividad'];

        return $objetoTipoActividad;

     }//end function

     public function listaDeTipoActividades()
     { //lista de eventos
        $objetoManejadorTipoActividad = new ManejadorTipoActividad($this->Conexion);
        $resultadoListaDeTipoActividades = $objetoManejadorTipoActividad->listaDeTipoActividades();
        $arregloDeTipoActividades = array();
        $i = 0;

        foreach ($resultadoListaDeTipoActividades as $registroTipoActividad)
        {
            $objetoTipoActividad = new TipoActividadModel();
            $objetoTipoActividad->idTipoActividad=$registroTipoActividad['idTipoActividad'];
            $objetoTipoActividad->nombreTipoActividad=$registroTipoActividad['nombreTipoActividad'];
            $objetoTipoActividad->estadoTipoActividad=$registroTipoActividad['estadoTipoActividad'];
          
            $arregloDeTipoActividades[$i] = $objetoTipoActividad;
            $i++;
        }
        return $arregloDeTipoActividades;
      }//end function listaDeEventos


  


}


 ?>
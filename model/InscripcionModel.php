<?php 

class InscripcionModel
{

  private $idInscripcion;
  private $idEvento;
  private $idParticipante;
  private $idPaquete;
  private $fechaHoraInscripcion;
  private $montoTotal;
  private $fueValidado;
  private $horaFechaValidacion;
  private $idUsuario; //se da por session


		 function __construct(){}


 public function __set($atributo, $value)
    {
        if (property_exists($this, $atributo)) 
        {
          $this->$atributo = $value;
        }
        else
         {
          echo "Error al encontrar Atributo SET {$atributo} .";
         }
    }

  public function __get($atributo)
    {
        if (property_exists($this, $atributo)) 
        {
          return $this->$atributo;
        }
        else
         {
          return "Error al encontrar Atributo GET {$atributo} .";
         }
    }

}





 ?>
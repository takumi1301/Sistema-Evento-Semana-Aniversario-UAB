<?php 

class ParticipanteModel
{

  private $idParticipante;
  private $ciParticipante;
  private $sexoParticipante;
  private $primerNombre;
  private $segundoNombre;
  private $primerApellido;
  private $segundoApellido;
  private $paisProcedencia;
  private $ciudadProcedencia;
  private $estudioUAB;
  private $promocionUAB;
  private $telefonoParticipante;
  private $correoParticipante;
  private $edadParticipante;
  private $tallaPolera;

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
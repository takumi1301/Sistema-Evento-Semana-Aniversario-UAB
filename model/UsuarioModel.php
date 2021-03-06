<?php 

class UsuarioModel
{
	 private $idUsuario;
	 private $idRolUsuario;
	 private $primerNombre;
 	 private $segundoNombre;
 	 private $primerApellido;
 	 private $segundoApellido;
 	 private $ciUsuario;
 	 private $user;
 	 private $password;
   private $estado;

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

      public function devolverNombreCompleto(){
         return $this->primerNombre." ".$this->primerApellido; 

    }


}


 ?>
<?php

class Conexion extends PDO {
   private $tipoBaseDato = 'mysql';
   private $host = 'localhost';
   private $nombreBaseDato = 'aniversariobd';
   private $login = 'root';
   private $password = '142536';

   public function __construct() {
      try{
         parent::__construct($this->tipoBaseDato.':host='.$this->host.';dbname='.$this->nombreBaseDato, $this->login, $this->password);
      }
      catch(PDOException $e)
      {
         echo 'Error al conectarse a base de datos. Detalle: ' . $e->getMessage();
         exit;
      }

      

   }//end function



 }//end class

?>
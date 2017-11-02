<?php 

class ManejadorUsuario
{

	private $Conexion;
		function __construct($conexion)
		{
			$this->Conexion = $conexion;
		}



		public function registrarUsuario(UsuarioModel $usuario)
		{
			$idRolUsuario = $usuario->idRolUsuario;
			$primerNombre = $usuario->primerNombre;
			$segundoNombre = $usuario->segundoNombre;
			$primerApellido = $usuario->primerApellido;
			$segundoApellido = $usuario->segundoApellido;
			$ciUsuario = $usuario->ciUsuario;
			$user = $usuario->user;
			$password = $usuario->password;
			$estado = $usuario->estado;
		
			
			try
			{
				$this->Conexion->beginTransaction();


				$insertarUsuario = "INSERT INTO usuario(idRolUsuario, primerNombre, segundoNombre, primerApellido, segundoApellido, ciUsuario, user, password, estado) VALUES (:idRolUsuario, :primerNombre, :segundoNombre, :primerApellido, :segundoApellido, :ciUsuario, :user, :password, :estado);";

					$atributoUsuario = $this->Conexion->prepare($insertarUsuario);

				
					$atributoUsuario->bindParam(":idRolUsuario",$idRolUsuario);
					$atributoUsuario->bindParam(":primerNombre",$primerNombre);
					$atributoUsuario->bindParam(":segundoNombre",$segundoNombre);
					$atributoUsuario->bindParam(":primerApellido",$primerApellido);
					$atributoUsuario->bindParam(":segundoApellido",$segundoApellido);
					$atributoUsuario->bindParam(":ciUsuario",$ciUsuario);
					$atributoUsuario->bindParam(":user",$user);
					$atributoUsuario->bindParam(":password",$password);
					$atributoUsuario->bindParam(":estado",$estado);
					
					$atributoUsuario->execute();

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



 public function datosUsuario($loginUsuario)
  {
      $consultaDatosUsuario = "SELECT idUsuario,idRolUsuario,user,password,estado,ciUsuario,primerNombre,primerApellido
								FROM usuario 
								WHERE user = :loginUsuario;";
      $consultaDatosUsuario = $this->Conexion->prepare($consultaDatosUsuario);
      $consultaDatosUsuario->bindParam(':loginUsuario', $loginUsuario);
      $consultaDatosUsuario->execute();
      $resultadoDatosUsuario = $consultaDatosUsuario->fetchAll();
      return $resultadoDatosUsuario;
  }//end function







}
	



 ?>
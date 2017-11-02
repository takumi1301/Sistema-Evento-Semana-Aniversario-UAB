<?php 

class MenuAdministradorControlador
{

	private $Modo;

	public function __construct($modo)
	{
		$this->Modo = $modo;
	}//end unction __construct

	public function Menu()
	{
		switch ($this->Modo) {
			
	        default:
		        include 'cabecera.php';
		        include 'cuerpo.php';
		        include 'pies.php';
            break;	

            case 'salir':
		        session_start();
		        session_destroy();
		        header("Location: ../../index.php");
            break;


	        case 'listaDeEventos':
		        include 'cabecera.php';
		        include 'ListaEventos.php';
		        include 'pies.php';
            break;	





	        case 'registrarEvento':
		        include 'cabecera.php';
		        include 'RegistrarEvento.php';
		        include 'pies.php';
            break;	


			case 'insertarEvento':
				  	require ("../../model/Conexion.php");
					require ("../../model/EventoModel.php");
					require ("../../model/ManejadorEvento.php");

				    $conexion = new Conexion();
					$evento = new EventoModel();
					$manejadorEvento = new ManejadorEvento($conexion);

					$evento->nombreEvento = $_POST["nombreEvento"];
					$evento->fechaInicio = $_POST["fechaInicio"];
					$evento->fechaFin = $_POST["fechaFin"];
					$evento->estado = $_POST["estado"];
					$evento->idUsuario = $_POST["idUsuario"];

					if ($manejadorEvento->registrarEvento($evento))
					{
						echo "Exito";
					}
					else
					{
						echo "Error";
					}
			break;




			/*Editar y actualizar evento*/
	        case 'editarEvento':
		        include 'cabecera.php';
		        include 'EditarEvento.php';
		        include 'pies.php';
            break;	

	        case 'actualizarEvento':
	        	
			  	require ("../../model/Conexion.php");
				require ("../../model/EventoModel.php");
				require ("../../model/ManejadorEvento.php");

			    $conexion = new Conexion();
				$objetoEvento = new EventoModel();
				$objetoManejadorEvento = new ManejadorEvento($conexion);
				
				$objetoEvento->idEvento =  $_POST["idEvento"];
				$objetoEvento->nombreEvento = $_POST["nombreEvento"];
				$objetoEvento->fechaInicio = $_POST["fechaInicio"];
				$objetoEvento->fechaFin = $_POST["fechaFin"];
				$objetoEvento->estado = $_POST["estado"];
				$objetoEvento->idUsuario = $_POST["idUsuario"];

			    if ($objetoManejadorEvento->actualizarEvento($objetoEvento))
				{
					echo "Exito";
				}
				else
				{
					echo "Error";
				}
            break;	


            






            	  case 'registrarTipoActividad':
		        include 'cabecera.php';
		        include 'RegistrarTipoActividad.php';
		        include 'pies.php';
            break;	



			case 'insertarTipoActividad':
				  	require ("../../model/Conexion.php");
					require ("../../model/TipoActividadModel.php");
					require ("../../model/ManejadorTipoActividad.php");

				    $conexion = new Conexion();
					$tipoActividad = new TipoActividadModel();
					$manejadorTipoActividad = new ManejadorTipoActividad($conexion);

					$tipoActividad->nombreTipoActividad = $_POST["nombreTipoActividad"];
					
					$tipoActividad->estadoTipoActividad = $_POST["estadoTipoActividad"];
				

					if ($manejadorTipoActividad->registrarTipoActividad($tipoActividad))
					{
						echo "Exito";
					}
					else
					{
						echo "Error";
					}
			break;



			 case 'listaDeTipoActividades':
		        include 'cabecera.php';
		        include 'ListaTipoActividad.php';
		        include 'pies.php';
            break;	






				 case 'editarTipoActividad':
		        include 'cabecera.php';
		        include 'EditarTipoActividad.php';
		        include 'pies.php';
            break;	

	        case 'actualizarTipoActividad':
	        	
			  	require ("../../model/Conexion.php");
				require ("../../model/TipoActividadModel.php");
				require ("../../model/ManejadorTipoActividad.php");

			    $conexion = new Conexion();
				$objetoTipoActividad = new TipoActividadModel();
				$objetoManejadorTipoActividad = new ManejadorTipoActividad($conexion);
				
				$objetoTipoActividad->idTipoActividad =  $_POST["idTipoActividad"];
				$objetoTipoActividad->nombreTipoActividad = $_POST["nombreTipoActividad"];				
				$objetoTipoActividad->estadoTipoActividad = $_POST["estadoTipoActividad"];
			

			    if ($objetoManejadorTipoActividad->actualizarTipoActividad($objetoTipoActividad))
				{
					echo "Exito";
				}
				else
				{
					echo "Error";
				}
            break;	






  case 'registrarParticipante':
		        include 'cabecera.php';
		        include 'RegistrarParticipante.php';
		        include 'pies.php';
            break;	


			case 'insertarParticipante':
				  	require ("../../model/Conexion.php");
					require ("../../model/ParticipanteModel.php");
					require ("../../model/ManejadorParticipante.php");

				    $conexion = new Conexion();
					$participante = new ParticipanteModel();
					$manejadorParticipante = new ManejadorParticipante($conexion);

					$participante->ciParticipante = $_POST["ciParticipante"];
					$participante->sexoParticipante = $_POST["sexoParticipante"];
					$participante->primerNombre = $_POST["primerNombre"];
					$participante->segundoNombre = $_POST["segundoNombre"];
					$participante->primerApellido = $_POST["primerApellido"];
					$participante->segundoApellido = $_POST["segundoApellido"];
					$participante->paisProcedencia = $_POST["paisProcedencia"];
					$participante->ciudadProcedencia = $_POST["ciudadProcedencia"];
					$participante->estudioUAB = $_POST["estudioUAB"];
					$participante->promocionUAB = $_POST["promocionUAB"];
					$participante->telefonoParticipante = $_POST["telefonoParticipante"];
					$participante->correoParticipante = $_POST["correoParticipante"];
					$participante->edadParticipante = $_POST["edadParticipante"];
					$participante->tallaPolera = $_POST["tallaPolera"];

				

					if ($manejadorParticipante->registrarParticipante($participante))
					{
						echo "Exito";
					}
					else
					{
						echo "Error";
					}
			break;














  case 'registrarActividad':
		        include 'cabecera.php';
		        include 'RegistrarActividad.php';
		        include 'pies.php';
            break;	


			case 'insertarActividad':
				  	require ("../../model/Conexion.php");
					require ("../../model/ActividadModel.php");
					require ("../../model/ManejadorActividad.php");

				    $conexion = new Conexion();
					$actividad = new ActividadModel();
					$manejadorActividad = new ManejadorActividad($conexion);


					$actividad->idEvento = $_POST["idEvento"];
					$actividad->nombreActividad = $_POST["nombreActividad"];
					$actividad->idTipoActividad = $_POST["idTipoActividad"];
					$actividad->estadoActividad = $_POST["estadoActividad"];
				

					if ($manejadorActividad->registrarActividad($actividad))
					{
						echo "Exito";
					}
					else
					{
						echo "Error";
					}
			break;



 case 'editarActividad':
		        include 'cabecera.php';
		        include 'EditarActividad.php';
		        include 'pies.php';
            break;	

	        case 'actualizarActividad':
	        	
			  	require ("../../model/Conexion.php");
				require ("../../model/ActividadModel.php");
				require ("../../model/ManejadorActividad.php");

			    $conexion = new Conexion();
				$objetoActividad = new ActividadModel();
				$objetoManejadorActividad = new ManejadorActividad($conexion);
				
				$objetoActividad->idActividad =  $_POST["idActividad"];
				$objetoActividad->nombreActividad = $_POST["nombreActividad"];				
				$objetoActividad->estadoActividad = $_POST["estadoActividad"];
			

			    if ($objetoManejadorActividad->actualizarActividad($objetoActividad))
				{
					echo "Exito";
				}
				else
				{
					echo "Error";
				}
            break;	




             case 'listaDeActividades':
		        include 'cabecera.php';
		        include 'ListaActividades.php';
		        include 'pies.php';
            break;	





             case 'registrarUsuario':
		        include 'cabecera.php';
		        include 'RegistrarUsuario.php';
		        include 'pies.php';
            break;	



			case 'insertarUsuario':
				  	require ("../../model/Conexion.php");
					require ("../../model/UsuarioModel.php");
					require ("../../model/ManejadorUsuario.php");

				    $conexion = new Conexion();
					$usuario = new UsuarioModel();
					$ManejadorUsuario = new ManejadorUsuario($conexion);


	
   					$usuario->idRolUsuario = $_POST["idRolUsuario"];
					$usuario->primerNombre = $_POST["primerNombre"];
					$usuario->segundoNombre = $_POST["segundoNombre"];
					$usuario->primerApellido = $_POST["primerApellido"];
					$usuario->segundoApellido = $_POST["segundoApellido"];
					$usuario->user = $_POST["user"];
					$usuario->ciUsuario = $_POST["ciUsuario"];
					$usuario->password = $_POST["password"];
					$usuario->estado = $_POST["estado"];

					if ($ManejadorUsuario->registrarUsuario($usuario))
					{
						echo "Exito";
					}
					else
					{
						echo "Error";
					}
			break;










        }//end switch	
	}//end Menu


}//end class



 ?>
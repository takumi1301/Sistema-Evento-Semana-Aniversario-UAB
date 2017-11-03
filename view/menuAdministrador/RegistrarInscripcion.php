<?php 
include '../../model/Conexion.php';
//Evento
include '../../model/EventoModel.php';
include '../../model/ManejadorEvento.php';
include '../../controller/EventoController.php';
// Participante
include '../../model/ParticipanteModel.php';
include '../../model/ManejadorParticipante.php';
include '../../controller/ParticipanteController.php';
// Paquete
/*
include '../../model/PaqueteModel.php';
include '../../model/ManejadorPaquete.php';
include '../../controller/PaqueteController.php';*/
$idUsuario = $_SESSION['idUsuario'];

$objetoConexion = new Conexion();
$objetoEventoController = new EventoController($objetoConexion);
$listaDeEventos = $objetoEventoController->listaDeEventos();

$objetoParticipanteController = new ParticipanteController($objetoConexion);
$listaDeParticipantes = $objetoParticipanteController->listaDeParticipantes();

 ?>

<script type="text/javascript" src="../Index/js/RegistrarInscripcionAjax.js"></script>
  <div id="exitoRegistrarInscripcion" style="display: none"></div>
  <div id="errorRegistrarInscripcion" style="display: none"></div>



    <form  method="POST" id="RegistrarInscripcion">
        <table border = 0>

            
			 <td><label>Evento: </label></td>
            <td><select id="idEvento" placeholder="Seleccione Evento: "  name="idEvento" required>
                <?php foreach ($listaDeEventos as $evento): ?>
                        <option value="<?php echo $evento->idEvento; ?>">
                          <?php echo $evento->nombreEvento; ?>
                        </option>
                <?php endforeach; ?>
                </select>
            </td>
            <td><input type="hidden" name ="idUsuario" value = <?php echo $idUsuario ?> ></td>
        </tr>



 <td>
 	<label>Participante: </label></td>
            <td><select id="idParticipante" placeholder="Seleccione Participante: "  name="idParticipante" required>
                <?php foreach ($listaDeParticipantes as $participante): ?>
                        <option value="<?php echo $participante->idParticipante; ?>">
                          <?php echo $participante->primerNombre." ".$participante->primerApellido; ?>
                        </option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>
		

		     <tr>
                <td><label for="idPaquete">Paquete:</label> </td>
                <td><input type="text" name ="idPaquete" id="" /></td>
            </tr>

			   <tr>
                <td><label>Fecha Inscripcion:</label> </td>
                <td><input type="text" name ="fechaHoraInscripcion" id="" /></td>
            </tr>


			  <tr>
                <td><label>Monto Total:</label> </td>
                <td><input type="text" name ="montoTotal" id="" /></td>
            </tr>



                <td><label>Activo:</label></td>
                <td>
                    <input type="radio" name="fueValidado" value="1" checked/> Si
                    <input type="radio" name="fueValidado" value="0"/> No
                </td>

				 <tr>
                <td><label>Hora fecha Validacion:</label> </td>
                <td><input type="text" name ="horaFechaValidacion" id="" /></td>
            </tr>
			

			


            </tr>
                <td><button type="submit" class="btn btn-primary" >Registrar</button></td>
                <td><button type="reset">Cancelar</button></td>
            <tr>
            </tr>
        </table>
    </form>
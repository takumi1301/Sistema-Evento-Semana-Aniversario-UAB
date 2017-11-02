<?php 

include '../../model/Conexion.php';
include '../../model/EventoModel.php';
include '../../model/TipoActividadModel.php';
include '../../model/ManejadorEvento.php';
include '../../model/ManejadorTipoActividad.php';
include '../../controller/EventoController.php';
include '../../controller/TipoActividadController.php';

$objetoConexion = new Conexion();
$objetoEventoController = new EventoController($objetoConexion);
$listaDeEventos = $objetoEventoController->listaDeEventos();

$objetoTipoActividadController = new TipoActividadController($objetoConexion);
$listaDeTipoActividades = $objetoTipoActividadController->listaDeTipoActividades();



 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Evento</title>
    <script type="text/javascript" src="../jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../index/js/RegistrarActividadAjax.js"></script>
</head>
<body>
        <div id="exitoRegistrarActividad" style="display: none"></div>
        <div id="errorRegistrarActividad" style="display: none"></div>




    <form  method="POST" id="RegistrarActividad">
        <table border = 0>

            



            <tr>
                <td><label for="nombre">Nombre:</label> </td>
                <td><input type="text" name ="nombreActividad" id="" /></td>
              
                
            </tr>


                
                  <tr>
            <td><label>Evento: </label></td>
            <td><select id="idEvento" placeholder="Seleccione Evento: "  name="idEvento" required>
                <?php foreach ($listaDeEventos as $evento): ?>
                        <option value="<?php echo $evento->idEvento; ?>">
                          <?php echo $evento->nombreEvento; ?>
                        </option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>

              <tr>
            <td><label>Tipo Actividad: </label></td>
            <td><select id="idTipoActividad" placeholder="Seleccione Tipo Actividad: "  name="idTipoActividad" required>
                <?php foreach ($listaDeTipoActividades as $TipoActividad): ?>
                        <option value="<?php echo $TipoActividad->idTipoActividad; ?>">
                          <?php echo $TipoActividad->nombreTipoActividad; ?>
                        </option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>



            <tr>
                <td><label for="activo">Activo:</label></td>
                <td>
                    <input type="radio" name="estadoActividad" value="1" checked/> Si
                    <input type="radio" name="estadoActividad" value="0"/> No
                </td>

            </tr>
                <td><button type="submit">Registrar</button></td>
                <td><button type="reset">Cancelar</button></td>
            <tr>
            </tr>
        </table>
    </form>



</body>
</html>





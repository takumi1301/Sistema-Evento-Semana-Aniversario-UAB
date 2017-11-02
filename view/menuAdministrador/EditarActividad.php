<?php
include '../../model/Conexion.php';
include '../../model/EventoModel.php';
include '../../model/ManejadorEvento.php';
include '../../controller/EventoController.php';

$idActividad = $_POST["idActividad"];
$conexion = new Conexion();
$objetoActividadController = new ActividadController($conexion);
$datosActividad = $objetoActividadController->devolverDatosDelActividad($idActividad);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Actividad</title>
    <script type="text/javascript" src="../jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../index/js/ActualizarActividadAjax.js"></script>
</head>
<body>
    <form  method="POST" id="ActualizarActividad">
        <div id="exitoActualizarActividad" style="display: none"></div>
        <div id="errorActualizarActividad" style="display: none"></div>




 <tr>
                <td><label for="nombre">Nombre:</label> </td>
                <td><input type="text" name ="nombreActividad" id="" /></td>
              
                
            </tr>


                
                  <tr>
            <td><label>Evento: </label></td>
            <td><select id="idEvento" placeholder="Seleccione Evento: "  name="idEvento" value= <?php echo $datosEvento->nombreEvento ?> required>
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
            <td><select id="idTipoActividad" placeholder="Seleccione Tipo Actividad: "  name="idTipoActividad" value= <?php echo $datosActividad->nombreActividad ?> required>
                <?php foreach ($listaDeTipoActividades as $TipoActividad): ?>
                        <option value="<?php echo $TipoActividad->idTipoActividad; ?>">
                          <?php echo $TipoActividad->nombreTipoActividad; ?>
                        </option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>

          
        <div>
            <label for="activo">Activo:</label>
                <?php if($datosEvento->estado==1){ ?>
                    <input type="radio" name="estadoActividad" value="1" checked> Si
                    <input type="radio" name="estadoActividad" value="0"> No
                <?php 
                      }else{
                ?> 
                    <input type="radio" name="estadoActividad" value="1"> Si
                    <input type="radio" name="estadoActividad" value="0" checked> No
                <?php        
                      }
                ?>    

        </div>




           













      
        <div>
            <button type = "submit">Actualizar</button>
            <button type = "reset">Cancelar</button>
        </div>

    </form>
</body>
</html>





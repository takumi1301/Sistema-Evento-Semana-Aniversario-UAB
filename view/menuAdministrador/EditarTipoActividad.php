<?php
include '../../model/Conexion.php';
include '../../model/TipoActividadModel.php';
include '../../model/ManejadorTipoActividad.php';
include '../../controller/TipoActividadController.php';

$idTipoActividad = $_POST["idTipoActividad"];

$conexion = new Conexion();
$objetoTipoActividadController = new TipoActividadController($conexion);
$datosTipoActividad = $objetoTipoActividadController->devolverDatosDelTipoActividad($idTipoActividad);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Tipo Actividad</title>
    <script type="text/javascript" src="../jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../index/js/ActualizarTipoActividadAjax.js"></script>
</head>
<body>
    <form  method="POST" id="ActualizarTipoActividad">
        <div id="exitoActualizarTipoActividad" style="display: none"></div>
        <div id="errorActualizarTipoActividad" style="display: none"></div>

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name ="nombreTipoActividad" id="" value = <?php echo $datosTipoActividad->nombreTipoActividad ?> >
            <input type="hidden" name ="idTipoActividad" id="" value = <?php echo $datosTipoActividad->idTipoActividad ?> >
         
        </div>
       
        <div>
            <label for="activo">Activo:</label>
                <?php if($datosTipoActividad->estadoTipoActividad==1){ ?>
                    <input type="radio" name="estadoTipoActividad" value="1" checked> Si
                    <input type="radio" name="estadoTipoActividad" value="0"> No
                <?php 
                      }else{
                ?> 
                    <input type="radio" name="estadoTipoActividad" value="1"> Si
                    <input type="radio" name="estadoTipoActividad" value="0" checked> No
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





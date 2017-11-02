<?php
include '../../model/Conexion.php';
include '../../model/EventoModel.php';
include '../../model/ManejadorEvento.php';
include '../../controller/EventoController.php';

$idEvento = $_POST["idEvento"];
$idUsuario = $_SESSION['idUsuario'];
$conexion = new Conexion();
$objetoEventoController = new EventoController($conexion);
$datosEvento = $objetoEventoController->devolverDatosDelEvento($idEvento);


//var_dump($datosEvento);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Evento</title>
    <script type="text/javascript" src="../jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../index/js/ActualizarEventoAjax.js"></script>
</head>
<body>
    <form  method="POST" id="ActualizarEvento">
        <div id="exitoActualizarEvento" style="display: none"></div>
        <div id="errorActualizarEvento" style="display: none"></div>

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name ="nombreEvento" id="" value = <?php echo $datosEvento->nombreEvento ?> >
            <input type="hidden" name ="idEvento" id="" value = <?php echo $datosEvento->idEvento ?> >
            <input type="hidden" name ="idUsuario" value = <?php echo $idUsuario ?> >
        </div>
        <div>
            <label for="fechainicio">Fecha Inicio:</label>
            <input type="date" name="fechaInicio" id="" value = <?php echo $datosEvento->fechaInicio ?> >
        </div>
        <div>
            <label for="fechafin">Fecha Fin:</label>
            <input type="date" name="fechaFin" id="" value = <?php echo $datosEvento->fechaFin ?> >
        </div>
        <div>
            <label for="activo">Activo:</label>
                <?php if($datosEvento->estado==1){ ?>
                    <input type="radio" name="estado" value="1" checked> Si
                    <input type="radio" name="estado" value="0"> No
                <?php 
                      }else{
                ?> 
                    <input type="radio" name="estado" value="1"> Si
                    <input type="radio" name="estado" value="0" checked> No
                <?php        
                      }
                ?>    

        </div>

        <div>
            <button class="btn btn-success" type = "submit">Actualizar</button>
            <button class="btn btn-danger" type = "reset">Cancelar</button>
        </div>

    </form>
</body>
</html>





<?php
  $idUsuario = $_SESSION['idUsuario'];
 // echo "usuario:......".$idUsuario;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Evento</title>
    <script type="text/javascript" src="../jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../index/js/RegistrarEventoAjax.js"></script>
</head>
<body>
        <div id="exitoRegistrarEvento" style="display: none"></div>
        <div id="errorRegistrarEvento" style="display: none"></div>




    <form  method="POST" id="RegistrarEvento">
        <table border = 0>

            
            <tr>
                <td><label for="nombre">Nombre:</label> </td>
                <td><input type="text" name ="nombreEvento" class="form-control" id="" /></td>
                <td><input type="hidden" name ="idUsuario" value = <?php echo $idUsuario ?> ></td>
                
            </tr>



            <tr>
                <td><label for="fechainicio">Fecha Inicio:</label></td>
                <td><input type="date" name="fechaInicio" id="" class="form-control" /></td>
            </tr>
            <tr>
                <td><label for="fechafin">Fecha Fin:</label></td>
                <td><input type="date" name="fechaFin" id="" class="form-control" /></td>
            </tr>
            <tr>
                <td><label for="activo">Activo:</label></td>
                <td>
                    <input type="radio" name="estado" value="1" checked/> Si
                    <input type="radio" name="estado" value="0"/> No
                </td>

            </tr>
                <td><button type="submit" class="btn btn-primary" >Registrar</button></td>
                <td><button type="reset">Cancelar</button></td>
            <tr>
            </tr>
        </table>
    </form>



</body>
</html>





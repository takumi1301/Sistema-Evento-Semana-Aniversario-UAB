
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tipo Actividad</title>
    <script type="text/javascript" src="../jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../index/js/RegistrarTipoActividadAjax.js"></script>
</head>
<body>
        <div id="exitoRegistrarTipoActividad" style="display: none"></div>
        <div id="errorRegistrarTipoActividad" style="display: none"></div>




    <form  method="POST" id="RegistrarTipoActividad" class="form-group">
        <table border = 0>

            
            <tr>
                <td><label for="nombre">Nombre Tipo Actividad:</label> </td>
                <td><input type="text" name ="nombreTipoActividad" id="" /></td>
                
            </tr>


            <tr>
                <td><label for="activo">Estado:</label></td>
                <td>
                    <input type="radio" name="estadoTipoActividad" value="1" checked/> Activo
                    <input type="radio" name="estadoTipoActividad" value="0"/> Inactivo
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




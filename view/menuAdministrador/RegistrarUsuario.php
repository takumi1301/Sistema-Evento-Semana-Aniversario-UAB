<?php 

include '../../model/Conexion.php';
include '../../model/RolUsuarioModel.php';
include '../../model/ManejadorRolUsuario.php';
include '../../controller/RolUsuarioController.php';

$objetoConexion = new Conexion();
$objetoRolUsuarioController = new RolUsuarioController($objetoConexion);
$listaDeRolUsuario = $objetoRolUsuarioController->listaDeRolUsuario();

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrar Usuario</title>

	 <script type="text/javascript" src="../jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../index/js/RegistrarUsuarioAjax.js"></script>
</head>
<body>
	
	 <div id="exitoRegistrarUsuario" style="display: none"></div>
     <div id="errorRegistrarUsuario" style="display: none"></div>


<form method="POST" id="RegistrarUsuario">
	<table border="0">
		<tr>
			<td><label for="nombre">Primer Nombre:</label> </td>
            <td><input type="text" name ="primerNombre" id="" class="form-control"  required/></td>
		</tr>

		<tr>
			<td><label>Segundo Nombre: </label> </td>
            <td><input type="text" name ="segundoNombre" id="" class="form-control" /></td>
		</tr>

		<tr>
			<td><label>Primer Apellido: </label> </td>
            <td><input type="text" name ="primerApellido" id="" class="form-control" required /></td>
		</tr>

		<tr>
			<td><label>Segundo Apellido: </label> </td>
            <td><input type="text" name ="segundoApellido" id="" class="form-control" /></td>
		</tr>

		<tr>
			<td><label>Ci:</label> </td>
            <td><input type="text" name ="ciUsuario" id="" class="form-control" required /></td>
		</tr>

		<tr>
			<td><label>Usuario:</label> </td>
            <td><input type="text" name ="user" id="" class="form-control" required /></td>
		</tr>

		<tr>
			<td><label>Password:</label> </td>
            <td><input type="password" name ="password" id="" class="form-control" required /></td>
		</tr>



		 <tr>
            <td><label>Rol Usuario: </label></td>
            <td><select id="idRolUsuario" placeholder="Seleccione Rol: "  name="idRolUsuario" required>
                <?php foreach ($listaDeRolUsuario as $rolUsuario): ?>
                        <option value="<?php echo $rolUsuario->idRolUsuario; ?>">
                          <?php echo $rolUsuario->nombreRol; ?>
                        </option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>




		<td><label for="activo">Estado:</label></td>
                <td>
                    <input type="radio" name="estado" value="1" checked/> Activo
                    <input type="radio" name="estado" value="0"/> Inactivo
                </td>


		</tr>
                <td><button type="submit">Registrar</button></td>
                <td><button type="reset">Cancelar</button></td>
            <tr>



	</table>

</form>

</body>
</html>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Participantes</title>
    <script type="text/javascript" src="../jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../index/js/RegistrarParticipanteAjax.js"></script>
</head>
<body>



<form id="RegistrarParticipante" method="POST">
<div id="exitoRegistrarParticipante" style="display: none" ></div>
<div id="errorRegistrarParticipante" style="display: none" ></div>

	<table>

       

        <tr>
		    <td><label>Carnet de Identidad: </label></td>
		    <td><input id="ciParticipante" type="text" placeholder="CI: "  name="ciParticipante" required></td>
	    </tr>

	    <tr>
		    <td><label>Primer Nombre: </label></td>
		    <td><input id="primerNombre" type="text" placeholder="Primer Nombre: "  name="primerNombre" required></td>
	    </tr>
	    <tr>
		    <td><label>Segundo Nombre: </label></td>
		    <td><input id="segundoNombre" type="text" placeholder="Segundo Nombre: "  name="segundoNombre"></td>
	    </tr>
	    <tr>
		    <td><label>Primer Apellido: </label></td>
		    <td><input id="primerApellido" type="text" placeholder="Primer Apellido: "  name="primerApellido" required></td>
	    </tr>
	    <tr>
		    <td><label>Segundo Apellido: </label></td>
		    <td><input id="segundoApellido" type="text" placeholder="Segundo Apellido: "  name="segundoApellido"></td>
	    </tr>

	       <tr>
                <td><label for="activo">Sexo:</label></td>
                <td>
                    <input type="radio" name="sexoParticipante" value="M" checked/> Masculino
                    <input type="radio" name="sexoParticipante" value="F"/> Femenino
                </td>

            </tr>

			 <tr>
		    <td><label>Pais de Procedencia: </label></td>
		    <td> <input type="text" name="paisProcedencia"></td>
	    </tr>

	     <td><label>Cuidad de Procedencia: </label></td>
		   <td> <input type="text" name="ciudadProcedencia"></td>
	    </tr>

	      <tr>
                <td><label for="activo">Estudio en la UAB:</label></td>
                <td>
                    <input type="radio" name="estudioUAB" value="1" checked/> Si
                    <input type="radio" name="estudioUAB" value="0"/> No
                </td>

            </tr>
				

				 <tr>
		    <td><label>Promocion: </label></td>
		  <td> <input type="number" name="promocionUAB"></td>
		    </td>
	    </tr>



        <tr>
		    <td><label>Número de Telefono: </label></td>
		    <td><input id="telefonoParticipante" type="text" placeholder="Teléfono: "  name="telefonoParticipante" required></td>
	    </tr>

	    <tr>
		    <td><label>Correo: </label></td>
		    <td><input id="correoParticipante" type="email" placeholder="Correo: "  name="correoParticipante" required></td>
	    </tr>

		<tr>
		    <td><label>Edad: </label></td>
		    <td><input id="edadParticipante" type="number" placeholder="Edad: "  name="edadParticipante" required></td>
	    </tr>


        <tr>
		    <td><label>Talla de Polera: </label></td>
		    <td><select id="tallaPolera" placeholder="Talla de Polera: "  name="tallaPolera" required>
		    		<option value="S">S</option>
		    		<option value='M'>M</option>
		    		<option value='L'>L</option>
		    		<option value='XL'>XL</option>
		    		<option value='XXL'>XXL</option>
		        </select>
		    </td>
	    </tr>
	</table>
	<button>Registrar</button>
</form>


</body>
</html>








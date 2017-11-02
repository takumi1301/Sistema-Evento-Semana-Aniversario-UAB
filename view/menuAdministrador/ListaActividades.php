<?php
include '../../model/Conexion.php';
include '../../model/ActividadModel.php';
include '../../model/ManejadorActividad.php';
include '../../controller/ActividadController.php';

$conexion = new Conexion();
$objetoActividadController = new ActividadController($conexion);
$listaDeActividades = $objetoActividadController->listaDeActividades();
?>
    <br><br><br>
    <!-- tabla de lista de eventos -->
    <div id="listadeactividades">
        <?php
            $i=1; //contador usado para enumerar 1,2,3,...
            if(!empty($listaDeActividades)){
        ?>
              <table border = 1>
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Evento</th>
                    <th>Tipo Actividad</th>
                    <th>Estado</th>
                    <th>--------------------------</th>
                  </tr>
                </thead>
                <tbody>

                <?php foreach ($listaDeActividades as $registroActividad): ?>
                    <?php if($registroActividad->estado == 1){ ?>
                      <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $registroActividad->nombreActividad ?></td>
                        <td><?php echo $registroActividad->idEvento ?></td>                        
                        <td><?php echo $registroActividad->idTipoActividad ?></td>
                        <td><?php echo $registroActividad->estadoActividad ?></td>
                        <td>
                            <form action="index.php?modo=editarActividad" method="post">
                              <input type="hidden" name="idActividad" value="<?php echo $registroActividad->idActividad ?>">
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <button type="submit">&nbsp; Editar</button>
                            </form>
                        </td>
                      </tr>
                    <?php }else{ ?>
                      <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $registroActividad->nombreActividad ?></td>
                        <td><?php echo $registroActividad->idEvento ?></td>
                        <td><?php echo $registroActividad->idTipoActividad ?></td>
                        <td><?php echo $registroActividad->estadoActividad ?></td>
                        <td bgcolor=red>
                            <form action="index.php?modo=editarActividad" method="post">
                              <input type="hidden" name="idActividad" value="<?php echo $registroActividad->idActividad ?>">
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <button type="submit">&nbsp; Editar</button>
                            </form>
                        </td>
                      </tr>
                    <?php }
                    ?>
                <?php $i++; endforeach; ?>  
                </tbody>
              </table>
        <?php                
          }//end if
        ?>
    </div>
    <!-- Final tabla de lista eventos -->
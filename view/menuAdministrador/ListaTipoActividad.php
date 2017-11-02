<?php
include '../../model/Conexion.php';
include '../../model/TipoActividadModel.php';
include '../../model/ManejadorTipoActividad.php';
include '../../controller/TipoActividadController.php';

$conexion = new Conexion();
$objetoTipoActividadController = new TipoActividadController($conexion);
$listaDeTipoActividades = $objetoTipoActividadController->listaDeTipoActividades();
?>
    <br><br><br>
    <!-- tabla de lista de eventos -->
    <div id="listadetipoactividades">
        <?php
            $i=1; //contador usado para enumerar 1,2,3,...
            if(!empty($listaDeTipoActividades)){
        ?>
              <table border = 1>
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>                    
                    <th>Estado</th>
                    <th>--------------------------</th>
                  </tr>
                </thead>
                <tbody>

                <?php foreach ($listaDeTipoActividades as $registroTipoActividad): ?>
                    <?php if($registroTipoActividad->estadoTipoActividad == 1){ ?>
                      <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $registroTipoActividad->nombreTipoActividad ?></td>                       
                        <td><?php echo $registroTipoActividad->estadoTipoActividad ?></td>
                        <td>
                            <form action="index.php?modo=editarTipoActividad" method="post">
                              <input type="hidden" name="idTipoActividad" value="<?php echo $registroTipoActividad->idTipoActividad ?>">
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <button type="submit">&nbsp; Editar</button>
                            </form>
                        </td>
                      </tr>
                    <?php }else{ ?>
                      <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $registroTipoActividad->nombreTipoActividad ?></td>                       
                        <td><?php echo $registroTipoActividad->estadoTipoActividad ?></td>
                        <td bgcolor=red>
                            <form action="index.php?modo=editarTipoActividad" method="post">
                              <input type="hidden" name="idTipoActividad" value="<?php echo $registroTipoActividad->idTipoActividad ?>">
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
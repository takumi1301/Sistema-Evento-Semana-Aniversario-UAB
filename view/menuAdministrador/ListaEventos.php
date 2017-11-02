<?php
include '../../model/Conexion.php';
include '../../model/EventoModel.php';
include '../../model/ManejadorEvento.php';
include '../../controller/EventoController.php';

$conexion = new Conexion();
$objetoEventoController = new EventoController($conexion);
$listaDeEventos = $objetoEventoController->listaDeEventos();
?>
    <br><br><br>
    <!-- tabla de lista de eventos -->
    <div id="listadeeventos">
        <?php
            $i=1; //contador usado para enumerar 1,2,3,...
            if(!empty($listaDeEventos)){
        ?>
              <table border = 1>
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Estado</th>
                    <th>--------------------------</th>
                  </tr>
                </thead>
                <tbody>

                <?php foreach ($listaDeEventos as $registroEvento): ?>
                    <?php if($registroEvento->estado == 1){ ?>
                      <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $registroEvento->nombreEvento ?></td>
                        <td><?php echo $registroEvento->fechaInicio ?></td>
                        <td><?php echo $registroEvento->fechaFin ?></td>
                        <td><?php echo $registroEvento->estado ?></td>
                        <td>
                            <form action="index.php?modo=editarEvento" method="post">
                              <input type="hidden" name="idEvento" value="<?php echo $registroEvento->idEvento ?>">
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <button type="submit">&nbsp; Editar</button>
                            </form>
                        </td>
                      </tr>
                    <?php }else{ ?>
                      <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $registroEvento->nombreEvento ?></td>
                        <td><?php echo $registroEvento->fechaInicio ?></td>
                        <td><?php echo $registroEvento->fechaFin ?></td>
                        <td><?php echo $registroEvento->estado ?></td>
                        <td bgcolor=red>
                            <form action="index.php?modo=editarEvento" method="post">
                              <input type="hidden" name="idEvento" value="<?php echo $registroEvento->idEvento ?>">
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
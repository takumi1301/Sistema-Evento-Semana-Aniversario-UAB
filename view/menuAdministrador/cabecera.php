<?php
$usuario = "";

//verifico si el nombre de la sesion no es vacia 
if(isset($_SESSION['nombre'])){
  $usuario = $_SESSION['nombre'];
  //si necesitamos el id del usuario solamente llamo la sesion

  $idUsuario = $_SESSION['idUsuario'];

}


?>

<!DOCTYPE html>
<HTML lang ="es">
<HEAD>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
  <TITLE>Sistema de Eventos</TITLE>
       <link href="../index/css/estilosadmin.css"  rel="stylesheet" type="text/css" />
       <!-- boostrap Framework de IU -->
       <link href="../index/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" >

       <script src="../jquery/jquery-3.2.1.min.js" type="text/javascript" ></script>
       <!--<script src="view/index/js/AutentificarAjax.js"></script>-->

</HEAD>
<body>
      <!-- Aqui se define las tres partes de la pagina, cabecera, cuerpo y pie de pagina -->
      <!-- cabecera -->
      <header>
        <!-- Aqui vendra el menu y el logo-->
        <div class = "logogtipo">
            <img src = "../index/imagenes/evento.jpg" width = "100" alt="" class="img-circle">
        </div>
        <nav>
            <div id="headerr">
          
              <ul class="nav1">
                  <li><a href="#">Evento</a>
                      <ul>
                        <li><a href="index.php?modo=registrarEvento">Registrar Eventos</a></li>
                        <li><a href="index.php?modo=listaDeEventos">Listar Eventos</a></li>
                      </ul>
                  </li>



                  <li><a href="#">Tipo de Actividad</a>
                      <ul>
                        
                        <li><a href="index.php?modo=registrarTipoActividad">Registrar Tipo de Actividad</a></li>
                        <li><a href="index.php?modo=listaDeTipoActividades">Listar Tipo de Actividades</a></li>
                      </ul>


                  </li>


                  <li><a href="#">Actividad</a>
                      <ul>
                        
                        <li><a href="index.php?modo=registrarActividad">Registrar Actividades</a></li>
                        <li><a href="index.php?modo=listaDeActividades">Listar Actividades</a></li>
                      </ul>
                  </li>

                  <li><a href="#">Usuarios</a>
                      <ul>
                        
                        <li><a href="index.php?modo=registrarUsuario">Registrar Usuarios</a></li>
                        <li><a href="index.php?modo=listaDeUsuarios">Listar Usuarios</a></li>
                      </ul>
                  </li>

                   <li><a href="#">Participantes</a>
                      <ul>
                        
                        <li><a href="index.php?modo=registrarParticipante">Registrar Participantes</a></li>
                        <li><a href="index.php?modo=listaDeParticipantes">Listar Participantes</a></li>
                      </ul>
                  </li>


                 
                  <li><a href="#">Bienvenido: <?php echo $usuario?></a></li>
                  <li><a href="index.php?modo=salir">Salir</a></li>
              </ul><!--<ul class="nav1">-->
            </div>
          </nav>


      </header>
            <!-- cuerpo -->
      <section class="main">

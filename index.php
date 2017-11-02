<?php
  include 'controller/AdministradorPagina.php';

  if (isset($_GET['modo'])) {
  	//la segunda vez una vez que existe modo y verificando que tipo d eusuario es se valida el usuario 
      $menu = new AdministradorPagina($_GET['modo']);
      $menu->MenuIndex();
  }else {
  	//la primera vez siempre va por el default porque no existe ningun modo, y se manda el valor por defecto
    	$menu = new AdministradorPagina("default");
    	$menu->MenuIndex();
  }

?>
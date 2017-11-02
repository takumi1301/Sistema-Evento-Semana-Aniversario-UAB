<?php
session_start();
include '../../controller/MenuAdministradorControlador.php';

if ($_SESSION['user'])
{
  if ($_SESSION['idRolUsuario'] == 1)
  {
    if (isset($_GET['modo']))
    {
      $admin = new MenuAdministradorControlador($_GET['modo']);
      $admin->Menu();
    }
    else
    {
      $admin = new MenuAdministradorControlador("default");
      $admin->Menu();
    }
  }
  else
  {
    header("Location: ../../index.php");
  }
}
else
{
  header("Location: ../../index.php?modo=AccesoDenegado");
}

?>

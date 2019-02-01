<?php

session_start();

if(!isset($_SESSION["id_usuario"]) || !isset($_SESSION["nome_usuario"]))
{

  isset($_GET['vou_para']) ? $x = '?vou_para=' . $_GET['vou_para'] : $x = '' ;
    header("Location: http://localhost/IC_ACADEMICO/implementação/pages/login_admin.php" . $x);
  exit;
}
?>
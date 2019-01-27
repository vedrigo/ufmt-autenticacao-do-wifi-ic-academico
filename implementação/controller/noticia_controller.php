<?php

ini_set("display_errors",1);
ini_set("display_startup_erros",1);
error_reporting(E_ALL);

//require_once 'upload.php';
require_once "../model/noticia.php";

if(isset($_POST['_method'])) {
  $m = strtoupper($_POST['_method']);
  if($m == 'PUT'){
  }elseif ($m == 'PATCH'){
  }elseif ($m == 'DELETE'){
  }elseif ($m == 'POST') {
    $dao = DaoNoticia::getInstance();
    $dao->Inserir($dao->carregarNoticia());
  }
}
header('Location: http://localhost/IC_ACADEMICO/implementação' );



?>


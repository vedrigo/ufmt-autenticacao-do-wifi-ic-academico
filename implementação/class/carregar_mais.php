<?php
require_once '../class/functions.php';
if($_POST['post_type'] == 'mural'){
  require_once '../class/muralDAO.php';
  $noticias = DaoMural::getInstance()->show(2, 'Publicado', $_POST['page']) ;
  for ($i = 0; $i < count($noticias); $i += 1){
    $noticia = $noticias[$i];
    include '../partials/horizontal-card.php';
  }
}elseif ($_POST['post_type'] == 'noticia'){
  require_once '../class/noticiaDAO.php';
  $noticias = DaoNoticia::getInstance()->show(2, 'Publicado', $_POST['page']);
  for ($i = 0; $i < count($noticias); $i += 1){
    $noticia = $noticias[$i];
    include '../partials/horizontal-card.php';
  }
}else{
  return 'erro';
}

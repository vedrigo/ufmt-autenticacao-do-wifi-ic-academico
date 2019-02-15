<?php
ini_set("display_errors", 1);
ini_set("display_startup_erros", 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Post</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="../assets/img/favicon.ico"/>
  <!--Bootstrap usado no grid e na linha de voltar-->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <!--Fontawesome usado na seta de voltar-->
  <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.min.css">
  <!--===============================================================================================-->
</head>
<body>
<div class="container">
  <?php
  $id = $_GET['id'];
  if($id) :
    require_once '../class/muralDAO.php';
    $dao = DaoMural::getInstance();
    $noticia = $dao->BuscarPorCOD($id);
    ?>
    <div class="row">
      <a href="http://<?php echo $_SERVER['SERVER_NAME'] ?>/IC_ACADEMICO/implementação/">
        <i class="fa fa-arrow-left" style="margin-right: 20px"></i><span> Voltar</span>
      </a>
    </div>
    <div class="row">
      <h4 class="mb-5"><?php echo $noticia->getTitulo() ?></h4>
    </div>
    <div class="row">
      <?php if($noticia->getImagem() != '') : ?>
        <img class="mb-5"
             src="http://<?php echo $_SERVER['SERVER_NAME'] ?>/IC_ACADEMICO/implementação/uploads/<?php echo $noticia->getImagem() ?>">
      <?php endif; ?>
    </div>
    <div class="row">
      <?php echo $noticia->getTexto() ?>
    </div>
  <?php endif ?>
</div>
</body>
</html>
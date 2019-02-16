<?php
ini_set("display_errors", 1);
ini_set("display_startup_erros", 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Post</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico"/>
    <!--Bootstrap usado no grid e na linha de voltar-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <!--Fontawesome usado na seta de voltar-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/noticia.css">
</head>
<body>
<div class="container" style="min-height: calc(100vh - 200px)">
  <?php
  $id = $_GET['id'];
  if ($id) :
    require_once '../class/noticiaDAO.php';
    $dao = DaoNoticia::getInstance();
    $noticia = $dao->BuscarPorCOD($id);
    ?>
      <div class="row">
        <div class="col-12 mt-3">
          <a href="http://<?php echo $_SERVER['SERVER_NAME'] ?>/IC_ACADEMICO/implementação/">
            <i class="fa fa-arrow-left" style="margin-right: 20px"></i><span> Voltar</span>
          </a>
        </div>
      </div>
      <div class="row" id="row-titulo">
        <div class="col-12 mt-5">
          <h1 class="mb-5"><?php echo $noticia->getTitulo() ?></h1>
        </div>
      </div>
      <div class="row" id="row-imagem">
        <div class="col-12">
        <?php if ($noticia->getImagem() != '') : ?>
          <img class="mb-5"
             src="http://<?php echo $_SERVER['SERVER_NAME']
             ?>/IC_ACADEMICO/implementação/uploads/<?php echo $noticia->getImagem() ?>">
        <?php endif; ?>
        </div>
      </div>
      <div class="row" id="row-texto">
        <div class="col-12">
        <?php echo $noticia->getTexto() ?>
        </div>
      </div>
  <?php endif ?>
</div>
<footer class="sticky-footer bg-white mt-5 mb-3">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span  style="line-height:1;font-size: 11px;" >Desenvolvido por Rodrigo Venâncio Veríssimo @ 2019</span>
        </div>
    </div>
</footer>
</body>
</html>
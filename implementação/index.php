<?php require 'class/noticia.php'; ?>
<?php require 'class/functions.php' ?>
<?php require 'autenticar.php' ?>


<!doctype html>
<html lang="pt-BR">

<head>
  <title>IC_ACADEMICO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<style>
  #container-pagina-inicial {
    margin-right: 300px;
  }

  @media (max-width: 768px) {
    #container-pagina-inicial {
      margin-right: 0
    }
  }
</style>

<body>
<?php include 'partials/login.php' ?>
<?php $noticias = DaoNoticia::getInstance()->show(4); ?>

<div id="container-pagina-inicial">
  <div class="container mb-5 mt-5">
    <div id="noticias-ic">
      <h3 class="mb-3">Notícias do IC:</h3>

      <div style="display: block">
        <div class='container-cards'>
          <?php
          for ($i = 0; $i < count($noticias); $i += 1) {
            $noticia = $noticias[$i];
            include 'partials/horizontal-card.php';
          }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <button class="btn btn-light mt-4 btn-block">Carregar Mais</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container mb-5">
    <div id="mural-ic">
      <div class="row mb-3">
        <div class="col-9">
          <h3>Mural Publico:</h3>
        </div>
        <div class="col-3">
          <a class="btn btn-light float-right" href="form_noticia.php">Adicionar</a>
        </div>
      </div>
      <div style="display: block">
        <div class='container-cards'>
          <?php
          for ($i = 0; $i < count($noticias); $i += 1) {
            $noticia = $noticias[$i];
            include 'partials/horizontal-card.php';
          }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <button class="btn btn-light mt-4 btn-block">Carregar Mais</button>
        </div>
      </div>
    </div>
  </div>

</div>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>
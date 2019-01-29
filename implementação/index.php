<?php require_once "class/noticia.php"; ?>
<?php require_once 'class/functions.php' ?>


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
    #container-pagina-inicial{
        margin-right: 300px;
    }
    @media (max-width: 768px) {
        #container-pagina-inicial{
            margin-right: 0
        }
    }
</style>

<body>
  <?php include 'partials/login.php'?>
  <?php $noticias = DaoNoticia::getInstance()->show(4); ?>

  <div id="container-pagina-inicial">
      <div id="noticias-ic" class="m-5">
        <h3>Notícias do IC:</h3>
          <hr>
          <div style="display: block">
            <div class='container-cards'>
                <?php
                    for($i = 0 ; $i < count($noticias) ; $i += 1 ){
                        $noticia = $noticias[$i];
                        include 'partials/horizontal-card.php';
                    }
                ?>
            </div>
          </div>
      </div>

      <div id="mural-ic" class="m-5">
          <h3>Mural Publico:</h3>
          <hr>
          <div style="display: block">
              <div class='container-cards'>
                <?php
                for($i = 0 ; $i < count($noticias) ; $i += 1 ){
                  $noticia = $noticias[$i];
                  include 'partials/horizontal-card.php';
                }
                ?>
              </div>
          </div>
      </div>

  </div>
  
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
</body>
</html>
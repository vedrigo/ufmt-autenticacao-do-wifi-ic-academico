<?php require_once "model/noticia.php"; ?>

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

<body>
  <?php include 'partials/login.php'?>
  <?php $noticias = DaoNoticia::getInstance()->show(4); ?>
  <pre>


  <?php print_r($noticias) ?>
  </pre>

  <div id="mural-ic">
    <h1>Notícias do IC:</h1>
      <div style="display: block">
        <div class='container-cards'>
            <?php include 'partials/horizontal-card.php'; ?>
        </div>
      </div>
  </div>


  
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
</body>
</html>
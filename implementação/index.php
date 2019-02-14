<?php require_once 'class/noticiaDAO.php'; ?>
<?php require_once 'class/muralDAO.php'; ?>
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


<body>
<?php include 'partials/login_wifi.php' ?>
<?php  $noticias = DaoNoticia::getInstance()->show(2, 'Publicado'); ?>
<?php  $mural = DaoMural::getInstance()->show(2, 'Publicado'); ?>

<div class="container-margin-login">
  <div class="container mb-5 mt-5">
    <div id="noticias-ic">
      <h3 class="mb-3">Notícias do IC:</h3>

      <div style="display: block">
        <div class='container-cards' id="container-noticia">
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
          <button id="btn-noticia" class="btn btn-light mt-4 btn-block" onclick="carregar('noticia')">Carregar Mais</button>
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
          <a class="btn btn-light float-right" href="pages/form_mural.php">Adicionar</a>
        </div>
      </div>
      <div style="display: block">
        <div class='container-cards' id="container-mural">
          <?php
          for ($i = 0; $i < count($mural); $i += 1) {
            $noticia = $mural[$i];
            include 'partials/horizontal-card.php';
          }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <button id="btn-mural" class="btn btn-light mt-4 btn-block" onclick="carregar('mural')">Carregar Mais</button>
        </div>
      </div>
    </div>
  </div>

    <style>
        .sticky-footer{padding:2rem 0;-ms-flex-negative:0;flex-shrink:0}
        .bg-white{background-color:#fff!important}
        .copyright{line-height:1;font-size:.8rem}
    </style>
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Desenvolvido por Rodrigo Venâncio Veríssimo @ 2019</span>
            </div>
        </div>
    </footer>
</div>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.js"></script>

<script>
    var page_noticia = 1;
    var page_mural = 1;
    function carregar(post_type) {
        $.ajax({
            url: "class/carregar_mais.php",
            type: 'post',
            dataType: 'html',
            cache: false,
            data: {
                post_type: post_type,
                page: post(post_type)
            },
            beforeSend: function () {
                $('#btn-' + post_type).html("Carregando...");
            },
            success : function(html){
                if(html == ''){
                    if(post_type == 'noticia'){
                        $('#container-' + post_type).append(
                            '<p style="text-align: center; grid-column: span 12">' +
                            'Parece que não há mais Notícias para carregar!</p>');
                            $('#btn-' + post_type).remove();

                    }else{
                        $('#container-' + post_type).append('<p style="text-align: center; grid-column: span 12">' +
                            'Parece que não há mais Postagens do Mural para carregar!</p>');
                            $('#btn-' + post_type).remove();
                    }
                }else{
                    $('#container-' + post_type).append(html);
                }
            }
        })
            .done(function () {
                $('#btn-' + post_type).html('Carregar Mais');
                post_type == 'noticia' ? page_noticia += 1 : page_mural += 1;
            })
            .fail(function (jqXHR, textStatus, msg) {
                $('#btn-' + post_type).html('Carregar Mais');
                alert(msg);
            });
    }
    function post(post_type) {
        if (post_type == 'noticia'){
            return page_noticia;
        }else{
            return page_mural;
        }
    }
</script>
</body>
</html>
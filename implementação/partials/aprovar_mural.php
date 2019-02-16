<?php
require_once '../class/muralDAO.php';
require_once '../class/functions.php';
$mural = DaoMural::getInstance()->show(10, 'Rivisão');
?>
<div class='container-cards'>
  <?php
  for ($i = 0; $i < count($mural); $i += 1) :
    $noticia = $mural[$i];
  ?>
  <div class="container-card" style="background-color: white;">
    <figure class="card-imagem">
      <?php $vish = 'style="padding-left: 16px !important"'; if($noticia['imagem'] != '') :  $vish = ''?>
        <img src="../uploads/<?php echo $noticia['imagem'] ?>">
      <?php endif; ?>
    </figure>
    <div class="card-corpo" <?php echo $vish ?>>
      <div class="linha-card">
        <p><?php echo $noticia['titulo'] ?></p>
      </div>
      <div class="linha-card linha-inferior">
        <?php $f = new Functions ?>
        <time><?php echo $f->time_elapsed_string($noticia['created_at']) ?></time>
        <a class="veja-mais" data-toggle="modal" data-target="#card<?php echo $noticia['id'] ?>">Veja mais</a>
      </div>
    </div>
    <div class="card-footer">
      <button id="apagar<?php echo $noticia['id'] ?>" onclick="apagar(<?php echo $noticia['id'] ?>)"
              class="btn btn-link">Apagar</button>
      <button id="aceitar<?php echo $noticia['id'] ?>" onclick="aceitar(<?php echo $noticia['id'] ?>)" class="btn btn-link float-right">Aceitar</button>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal news fade" id="card<?php echo $noticia['id'] ?>" tabindex="-1" role="dialog"aria-hidden="true">
    <div class="modal-dialog" style="margin: 0" role="document">
      <div class="modal-content" style="    min-height: calc(100vh - 10px) !important;width: calc(100vw - 80px);
        margin-left: 40px;margin-top: 5px;">
        <div class="modal-header">
          <button style="margin-left: 0px" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-times" style="margin-right: 20px"></i><span> Fechar</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
              <h4 class="mb-5" style="color: black"><?php echo $noticia['titulo'] ?></h4>
                <?php if($noticia['imagem'] != '') : ?>
            <img class="mb-5"
                 src="http://<?php echo $_SERVER['SERVER_NAME'] ?>/IC_ACADEMICO/implementação/uploads/<?php echo $noticia['imagem'] ?>">
                <?php endif; ?>
            <div class="container-artigo">
              <?php echo $noticia['texto'] ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endfor; ?>
  <script>
    function apagar(idx) {
      if(confirm('Tem certeza que deseja apagar?')){
        $.ajax({
            url: "../class/apagar_mural.php",
            type: 'post',
            data: {
                id: idx
            },
            beforeSend: function () {
                $('#apagar' + idx).html("Enviando...");
            }
        })
        .done(function () {
            $('#apagar' + idx).html('Apagado');
            $('#aceitar' + idx).html('');
            $('#aceitar' + idx).attr('onclick', '');
            $('#apagar' + idx).attr('onclick', '');
        })
        .fail(function (jqXHR, textStatus, msg) {
            alert(msg);
        });
      }
    }
    function aceitar(idx) {
        $.ajax({
            url: "../class/aceitar_mural.php",
            type: 'post',
            data: {
                id: idx
            },
            beforeSend: function () {
                $('#' + idx).html("Enviando...");
            }
        })
            .done(function () {
                $('#aceitar' + idx).html('Publicado');
                $('#apagar' + idx).html('');
                $('#apagar' + idx).attr('onclick', '');
                $('#aceitar' + idx).attr('onclick', '');
            })
            .fail(function (jqXHR, textStatus, msg) {
                alert(msg);
            });
    }
  </script>
  <style>
    .news img, .news figure{
      max-width: 700px;
      max-height: 300px;
    }
    .news img{
      margin: auto;
      display: block;
    }
    .news{
      text-align: justify;
    }
    @media (max-width: 758px) {
      .news img, .news figure{
        max-width: 100%;
      }
    }
    @media (min-width: 1200px) {
      .news h1, .news h2, .news h3, .news h4{
        max-width: 800px;
      }
      .news .modal-body >.container{
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .news p, .news .modal-body .container div, .news a, .news ul, .news ol, .news li, .news span{
        max-width: 600px;
      }
      .modal-dialog{
        margin: 0 290px 0 0 !important;
      }

    }
  </style>

</div>
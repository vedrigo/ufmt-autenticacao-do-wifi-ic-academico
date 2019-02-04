<div class="container-card">
  <figure class="card-imagem">
    <img src="uploads/<?php echo $noticia['imagem'] ?>">
  </figure>
  <div class="card-corpo">
    <div class="linha-card">
      <p><?php echo $noticia['titulo'] ?></p>
    </div>
    <div class="linha-card linha-inferior">
      <?php $f = new Functions ?>
      <time><?php echo $f->time_elapsed_string($noticia['created_at']) ?></time>
      <a class="veja-mais" data-toggle="modal" data-target="#card<?php echo $noticia['id'] ?>">Veja mais</a>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal news fade" id="card<?php echo $noticia['id'] ?>" tabindex="-1" role="dialog"aria-hidden="true">
    <div class="modal-dialog" style="margin: 0" role="document">
        <div class="modal-content" style="min-height: 100vh; width: 100vw">
            <div class="modal-header">
                <button style="margin-left: 0px" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-arrow-left" style="margin-right: 20px"></i><span> Voltar</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <h4 class="mb-5"><?php echo $noticia['titulo'] ?></h4>
                <img class="mb-5"
                    src="http://<?php echo $_SERVER['SERVER_NAME'] ?>/IC_ACADEMICO/implementação/uploads/<?php echo $noticia['imagem'] ?>">
                <div class="container-artigo">
                  <?php echo $noticia['texto'] ?>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

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

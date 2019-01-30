<div class="container-card">
  <figure class="card-imagem">
    <img src="assets/img/first-example.png">
  </figure>
  <div class="card-corpo">
    <div class="linha-card">
      <p><?php echo $noticia['titulo'] ?></p>
    </div>
    <div class="linha-card linha-inferior">
      <time><?php echo Functions::time_elapsed_string($noticia['created_at']) ?></time>
      <a class="veja-mais" data-toggle="modal" data-target="#card<?php echo $noticia['id'] ?>">Veja mais</a>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="card<?php echo $noticia['id'] ?>" tabindex="-1" role="dialog"aria-hidden="true">
    <div class="modal-dialog" style="margin: 0" role="document">
        <div class="modal-content" style="min-height: 100vh; width: 100vw">
            <div class="modal-header">
                <button style="margin-left: 16px" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-arrow-left"></i><span> Voltar</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <h4><?php echo $noticia['titulo'] ?></h4>
                <img src="<?php echo $noticia['imagem'] ?>">
                <div class="container-artigo">
                  <?php echo $noticia['texto'] ?>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
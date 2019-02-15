<div class="container-card">
  <figure class="card-imagem">
    <?php $vish = 'style="padding-left: 16px !important"'; if($noticia['imagem'] != '') :  $vish = ''?>
      <img src="uploads/<?php echo $noticia['imagem'] ?>">
    <?php endif; ?>
  </figure>
  <div class="card-corpo" <?php echo $vish ?>>
    <div class="linha-card">
      <p><?php echo $noticia['titulo'] ?></p>
    </div>
    <div class="linha-card linha-inferior">
      <?php $f = new Functions ?>
      <time><?php echo $f->time_elapsed_string($noticia['created_at']) ?></time>
      <a class="veja-mais" href="pages/noticia.php?id=<?php echo $noticia['id'] ?>">Veja mais</a>
    </div>
  </div>
</div>

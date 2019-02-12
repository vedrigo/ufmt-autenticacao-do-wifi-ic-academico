<?php require_once '../class/autenticar.php' ?>

<?php

ini_set("display_errors", 1);
ini_set("display_startup_erros", 1);
error_reporting(E_ALL);

if (isset($_POST['_method'])) {
  $m = strtoupper($_POST['_method']);
  if ($m == 'PUT') {
  } elseif ($m == 'PATCH') {
  } elseif ($m == 'DELETE') {
  } elseif ($m == 'POST') {
    require_once "../class/noticiaDAO.php";
    require_once '../class/upload.php';
    if(isset($_POST['imagem'])){

    }
      $up = upload('imagem');
    if($up[0]){
      $dao = DaoNoticia::getInstance();
      $dao->Inserir($dao->carregarNoticia($up[1]));
    }else{
      $msg = 'erro ao enviar imagem.';
    }

  }
}


?>


  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
  <script src="../vendor/ckeditor/ckeditor.js"></script>



<div class="container">
  <form method="post" action="#" enctype="multipart/form-data">
    <input name="_method" type="hidden" value="POST"/>
    <div class="input-group mb-3 mt-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Título:</span>
      </div>
      <input name="titulo" type="text" class="form-control" required>
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Imagem:</span>
      </div>
      <div class="custom-file">
        <input type="file" id="imagem" name="imagem" class="custom-file-input">
        <label class="custom-file-label" for="imagem"></label>
      </div>
    </div>

      <textarea name="texto" id="texto" style="min-height: 200px"></textarea>

    <div class="input-group mt-3 mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Status:</span>
      </div>
      <select class="custom-select" name="status">
        <option value="publico" selected>Publico</option>
        <option value="rascunho">Rascunho</option>
      </select>
    </div>
    <input type="submit" class="btn btn-light mb-3" value="Enviar">
  </form>
</div>
<script src="../assets/js/bootstrap.js"></script>
<script>
    CKEDITOR.replace( 'texto');
    $('#imagem').on('change', function () {
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    });
</script>


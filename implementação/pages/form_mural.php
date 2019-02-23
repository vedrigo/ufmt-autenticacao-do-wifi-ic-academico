
<?php

ini_set("display_errors", 1);
ini_set("display_startup_erros", 1);
error_reporting(E_ALL);
require_once "../class/muralDAO.php";
require_once '../class/upload.php';

$flash['sucess'] = '';
$flash['error'] = '';
if (!empty($_POST)) {
  if ($_FILES['imagem']['size'] != 0){

    $up = upload('imagem');
    if(!$up[0]){
//      $flash['error'] = 'erro ao enviar imagem.';
      $flash['error'] = $_FILES['imagem'];
    }else{
      $dao = DaoMural::getInstance();
      $ok = $dao->Inserir($dao->carregarNoticia($up[1]));
      if($ok){
        $flash['sucess'] = 'ok, sua postagem logo estará no mural.';
      }else{
        $flash['error'] = 'erro ao salvar sua postagem.';
        unlink("../upload/" . $up[1]);
      }
    }
  }else{
    $dao = DaoMural::getInstance();
    $ok = $dao->Inserir($dao->carregarNoticia(''));

    if($ok){
      $flash['sucess'] = 'ok, sua postagem logo estará no mural.';
    }else{
      $flash['error'] = 'Erro ao salvar sua postagem.';
    }
  }

}


?>

<!doctype html>
<html lang="pt-BR">

<head>
  <title>IC_ACADEMICO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="../style.css">
  <script src="../vendor/ckeditor/ckeditor.js"></script>
</head>
<style>
  #cke_texto{
    width: calc(100% - 72px);
  }
</style>
<body>
<div class="container-fluid mb-4">
  <a class="btn" href="../index.php">
    <i class="fa fa-arrow-left"></i> Voltar</a>
</div>
<div class="container mb-3">
  <?php if($flash['error'] != ''):?>
  <div class="alert alert-danger" role="alert">
    <?php print_r($flash['error']); ?>
  </div>
  <?php endif; if($flash['sucess'] != ''): ?>
  <div class="alert alert-success" role="alert">
    <?php echo $flash['sucess'];?>
  </div>
  <?php endif; ?>
</div>
<div class="container" >
  <h2>Enviar nova postagem para o mural público:</h2>
  <p>Atenção, ao enviar uma postagem temos o prazo de 24 horas para publicar. </p>
  <form method="post" action="#" enctype="multipart/form-data">
    <div class="input-group mb-3 mt-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Título:</span>
      </div>
      <input name="titulo" type="text" class="form-control" required maxlength="250">
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

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Texto:</span>
      </div>
      <textarea name="texto" class="form-control" style="min-height: 200px"></textarea>
    </div>
    <input type="submit" class="btn btn-primary float-right mb-3" value="Enviar">
  </form>

</div>

<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script>
    CKEDITOR.replace( 'texto' );
    $('#imagem').on('change', function () {
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
</script>
</body>
</html>


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
    require_once "../class/usuarioDAO.php";
    $dao = DaoUsuario::getInstance();
    $dao->Inserir($dao->carregarUsuario(md5($_POST['senha'])));
  }
}


?>


<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../style.css">


<div class="container">
    <h3>Criar novo usuário</h3>
    <form method="post" action="#" enctype="multipart/form-data">
        <input name="_method" type="hidden" value="POST"/>
        <div class="input-group mb-3 mt-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Nome:</span>
            </div>
            <input name="nome" type="text" class="form-control" required>
        </div>
        <div class="input-group mb-3 mt-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Login:</span>
            </div>
            <input name="login" type="text" class="form-control" required>
        </div>
        <div class="input-group mb-3 mt-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Senha:</span>
            </div>
            <input name="senha" type="password" class="form-control" required>
        </div>


        <input type="submit" class="btn btn-light mb-3" value="Enviar">
    </form>
</div>
<script src="../assets/js/bootstrap.js"></script>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V10</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="../assets/img/favicon.ico"/>
  <!--Bootstrap usado no grid e na linha de voltar-->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <!--Fontawesome usado na seta de voltar-->
  <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.min.css">
  <!--Util usado para os espaçamentos-->
  <link rel="stylesheet" type="text/css" href="../assets/css/util_v10.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/login_v10.css">
  <!--===============================================================================================-->
</head>
<body>
<style>
  @media (max-width: 758px) {
    #voltar-1 {
      margin-left: -20px;
    }
  }
</style>
<div class="limiter">
  <div class="container-login100" style="align-items:baseline;">
    <div class="container-fluid">
      <a id="voltar-1" class="btn" href="../index.php">
        <i class="fa fa-arrow-left" style="margin-right: 15px;"></i>Voltar</a>
    </div>
    <div class="container">
      <?php if (isset($_GET['erro'])):?>
        <div class="alert alert-danger" role="alert">
          <?php echo $_GET['erro']; ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="wrap-login100 p-b-90">
      <form class="login100-form validate-form flex-sb flex-w" method="post" action="../class/login.php">
        <input name="vai_para" type="hidden" value="<?php echo $_GET['vou_para'] ?>">
        <span class="login100-form-title p-b-51">
						Login
					</span>

        <div class="wrap-input100 validate-input m-b-16" data-validate="Usuario é obrigatório">
          <input class="input100" type="text" name="login" placeholder="Usuario">
          <span class="focus-input100"></span>
        </div>


        <div class="wrap-input100 validate-input m-b-16" data-validate="Senha é obrigatório">
          <input class="input100" type="password" name="senha" placeholder="Senha">
          <span class="focus-input100"></span>
        </div>

        <div class="container-login100-form-btn m-t-17">
          <button class="login100-form-btn">
            Acessar
          </button>
        </div>

      </form>
    </div>
  </div>
</div>


<!--Jquery é requisito de login-->
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="../assets/js/login_v10.js"></script>

</body>
</html>
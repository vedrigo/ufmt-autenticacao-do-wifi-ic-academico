<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V10</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="../assets/img/favicon.ico"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../assets/css/hamburgers.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../assets/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../assets/css/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../assets/css/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../assets/css/util_v10.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/login_v10.css">
  <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
  <div class="container-login100" style="align-items:baseline;">
    <div class="container">
      <?php if (isset($_GET['erro'])):?>
        <div class="alert alert-danger" role="alert">
          <?php echo $_GET['erro']; ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="container-fluid">
      <a class="btn" href="../index.php">
        <i class="fa fa-arrow-left" style="margin-right: 15px;"></i>Voltar</a>
    </div>
    <div class="wrap-login100 p-t-50 p-b-90">
      <form class="login100-form validate-form flex-sb flex-w" method="post" action="../class/login.php">
        <input name="vai_para" type="hidden" value="<?php echo $_GET['vou_para'] ?>">
        <span class="login100-form-title p-b-51">
						Login
					</span>

        <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
          <input class="input100" type="text" name="login" placeholder="Usuario">
          <span class="focus-input100"></span>
        </div>


        <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
          <input class="input100" type="password" name="senha" placeholder="Senha">
          <span class="focus-input100"></span>
        </div>

        <div class="flex-sb-m w-full p-t-3 p-b-24">
          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              Lembrar-me
            </label>
          </div>

          <div>
            <a href="#" class="txt1">
              Esqueceu a senha?
            </a>
          </div>
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


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<!--===============================================================================================-->
<script src="../assets/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../assets/js/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../assets/js/moment.min.js"></script>
<script src="../assets/js/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="../assets/js/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="../assets/js/login_v10.js"></script>

</body>
</html>
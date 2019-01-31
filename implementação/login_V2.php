<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="assets/img/favicon.ico"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/css/hamburgers.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/css/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/css/util_v20.css">
  <link rel="stylesheet" type="text/css" href="assets/css/login_v20.css">
  <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100 p-b-160 p-t-50">
      <form class="login100-form validate-form" action="class/login.php" method="post">
					<span class="login100-form-title p-b-43">
						Login para o painel Administrativo IC Acadêmico
					</span>

        <div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
          <input class="input100" type="text" name="login">
          <span class="label-input100">Usuario</span>
        </div>


        <div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
          <input class="input100" type="password" name="senha">
          <span class="label-input100">Senha</span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn" type="submit">
            Sign in
          </button>
        </div>

        <div class="text-center w-full p-t-23">
          <a href="#" class="txt1">
            Esqueceu a senha?
          </a>
        </div>
      </form>
    </div>
  </div>
</div>





<!--===============================================================================================-->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!--===============================================================================================-->
<script src="assets/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="assets/js/select2.min.js"></script>
<!--===============================================================================================-->
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="assets/js/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="assets/js/login_v20.js"></script>

</body>
</html>
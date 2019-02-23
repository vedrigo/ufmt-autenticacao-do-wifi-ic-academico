<?php require_once '../class/autenticar.php' ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Area administradora do IC Academico</title>

  <!-- Custom fonts for this template-->
  <link href="../assets/css/fontawesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../style.css" rel="stylesheet">


  <!-- Bootstrap core JavaScript-->
  <script src="../assets/js/jquery-3.3.1.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/js/jquery.easing.min.js"></script>

  <style>
    @media (max-width: 758px){
      .mg-2{
        padding-left: 2px;
        padding-right: 2px;
      }
    }
  </style>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"  style="padding: 12px 12px;" href="../index.php">
      <img src="../assets/img/logo-ic.png" style="max-width: 100%; background-color: white; border-radius: 50px; margin: 10px 0;max-height: 100%;">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Inicio -->
    <li class="nav-item">
      <a class="nav-link" href="?page=inicio">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Inicio</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Postagens Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePostagens"
         aria-expanded="true" aria-controls="collapsePostagens">
        <i class="fas fa-fw fa-folder"></i>
        <span>Postagens</span>
      </a>
      <div id="collapsePostagens" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Notícias IC</h6>
          <a class="collapse-item" href="?page=criar_noticia">Criar Noticia</a>
          <a class="collapse-item" href="?page=gerenciar_noticias">Gerenciar Noticias</a>
          <div class="collapse-divider"></div>
          <h6 class="collapse-header">Mural Público</h6>
          <a class="collapse-item" href="?page=gerenciar_mural">Gerenciar Mural</a>
        </div>
      </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Usuario Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsuarios"
         aria-expanded="true" aria-controls="collapseUsuarios">
        <i class="fas fa-fw fa-folder"></i>
        <span>Usuarios</span>
      </a>
      <div id="collapseUsuarios" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Painel administrador</h6>
          <a class="collapse-item" href="?page=criar_usuario"">Criar usuario</a>
          <a class="collapse-item" href="?page=gerenciar_usuarios">Gerenciar usuarios</a>
        </div>
      </div>
    </li>




  </ul>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">


          <!-- Nav Item - Alerts -->


          <div class="topbar-divider d-none d-sm-block"></div>

          <!-- Nav Item - User Information -->
          <li class="nav-item no-arrow">
              <a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nome_usuario'] ?></span>
            </a>
          </li>
          <li class="nav-item no-arrow">
            <a class="nav-link" href="../class/sair.php">
              Sair
            </a>
          </li>

        </ul>

      </nav>
      <!-- End of Topbar -->

      <!-- Begin Page Content -->
      <div class="container-fluid mg-2">

        <?php
          if ($_GET['page'] == 'criar_noticia'){
            include_once '../partials/form_noticia.php';

          }elseif ($_GET['page'] == 'gerenciar_noticias'){
            require_once '../class/noticiaDAO.php';
            $noticias = DaoNoticia::getInstance()->show(100, 'all');
            include_once '../partials/gerenciar_noticias.php';

          }elseif ($_GET['page'] == 'gerenciar_mural'){
            require_once '../class/muralDAO.php';
            $noticias = DaoMural::getInstance()->show(100, 'all');
            include_once '../partials/gerenciar_mural.php';

          }elseif ($_GET['page'] == 'inicio'){
            include_once '../partials/aprovar_mural.php';

          }elseif ($_GET['page'] == 'criar_usuario'){
            include_once '../partials/form_usuario.php';

          }elseif ($_GET['page'] == 'gerenciar_usuarios'){
            require_once '../class/usuarioDAO.php';
            $noticias = DaoUsuario::getInstance()->show(100);
            include_once '../partials/gerenciar_usuarios.php';

          }else{
            include_once '../partials/aprovar_mural.php';

          }
        ?>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white" style="margin-right: 0 !important;">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Desenvolvido por Rodrigo Venâncio Veríssimo @ 2019</span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
<!-- Custom scripts for all pages-->
<script src="../assets/js/sb-admin-2.js"></script>

<script>
  var page = "<?php if(isset($_GET['page'])){echo($_GET['page']);} ?>";
  if($(window).width() > 768){
  if(page == 'criar_noticia' || page == 'gerenciar_noticias' || page == 'gerenciar_mural'){
      $('#collapsePostagens').attr('class', 'collapse show');
  }
  if(page == 'criar_usuario' || page == 'gerenciar_usuarios'){
      $('#collapseUsuarios').attr('class', 'collapse show');
  }
  }
</script>

</body>

</html>


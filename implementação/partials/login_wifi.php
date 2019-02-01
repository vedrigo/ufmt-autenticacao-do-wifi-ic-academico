<div id="painel-login">
  <div class="container" style="border: 1px solid #dadce0; display: flex; flex-wrap: wrap; border-radius: 12px;">
    <div class="container-fluid">
    <form>
      <div class="row mb-4">
        <div class="col col-sm-12 text-center">
          <img id="logo-ic" src="http://<?php  echo $_SERVER['SERVER_NAME'] ?>/IC_ACADEMICO/implementação/assets/img/logo-ic.png" max-height="80" alt="" style="max-width: 100%">
        </div>
      </div>

      <div class="row">
        <div class="col col-sm-12">
          <div class="form-group">

            <label for="login">RGA:</label>
            <input type="text" class="form-control" id="login">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col col-sm-12">
          <div class="form-group">

            <label for="password">Senha:</label>
            <input type="password" class="form-control" id="password">
          </div>
        </div>
      </div>
      <div class="hr-com-texto m-3">
        <hr>
        <span>Ou acesse com:</span>
      </div>
      <div class="row">
        <div class="col col-sm-12">
          <div class="form-group">

            <label for="voucher">Voucher:</label>
            <input type="text" class="form-control" id="voucher">
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Acessar Internet</button>
    </form>
    </div>

    <div class="container-fluid" style="align-self: flex-end">
    <div class="row" >
      <div class="col-12 mt-3">
        <a href="http://<?php  echo $_SERVER['SERVER_NAME'] ?>/IC_ACADEMICO/implementação/pages/painel.php?vou_para=painel.php" class="float-right" style="margin-bottom:10px;font-size:14px;margin-right:-8px;color:gray;">Área do administrador</a>
      </div>
    </div>
    </div>
  </div>
</div>

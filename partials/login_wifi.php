<?php
if (file_exists('../config.php' ))
    require_once  "../config.php";
elseif (file_exists('./config.php' )){
    require_once  "./config.php";
}else{
    echo('<p>Não foi possível encontrar o arquivo de configuração do sistema</p>');
}
?>

<div id="painel-login">
    <div class="container" style="border: 1px solid #dadce0; display: flex; flex-wrap: wrap; border-radius: 12px;">
        <div class="container-fluid">
            <form action="$PORTAL_ACTION$" method="post">
                <div class="row mb-4">
                    <div class="col col-sm-12 text-center">
                        <img id="logo-ic"
                             src="<?php echo($dir) ?>/assets/img/logo-ic.png"
                             max-height="80" alt="" style="max-width: 100%">
                    </div>
                </div>

                <div class="row">
                    <div class="col col-sm-12">
                        <div class="form-group">

                            <label for="login">RGA:</label>
                            <input type="text" class="form-control" id="auth_user" name="auth_user" size="25">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-sm-12">
                        <div class="form-group">

                            <label for="password">Senha:</label>
                            <input type="password" class="form-control" id="auth_pass" name="auth_pass" size="25">
                            <input name="redirurl" type="hidden" value="$PORTAL_REDIRURL$"/>
                            <input name="zone" type="hidden" value="$PORTAL_ZONE$">
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
                            <input type="text" class="form-control" id="voucher" name="auth_voucher">
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" name="accept" value="Acessar Internet">
            </form>
        </div>

        <div class="container-fluid" style="align-self: flex-end">
            <div class="row">
                <div class="col-12 mt-3">
                    <a href="<?php echo($dir) ?>/pages/painel.php?vou_para=painel.php"
                       class="float-right" style="margin-bottom:10px;font-size:14px;margin-right:-8px;color:gray;">Área
                        do administrador</a>
                </div>
            </div>
        </div>
    </div>
</div>

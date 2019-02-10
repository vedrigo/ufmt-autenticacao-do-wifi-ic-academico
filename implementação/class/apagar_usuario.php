<?php
require_once 'usuarioDAO.php';
require_once 'autenticar.php';
$msg = DaoUsuario::getInstance()->Deletar($_POST['id']);

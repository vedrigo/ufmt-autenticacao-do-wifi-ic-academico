<?php
require_once 'noticiaDAO.php';
require_once 'autenticar.php';
$msg = DaoNoticia::getInstance()->Deletar($_POST['id']);

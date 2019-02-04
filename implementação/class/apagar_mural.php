<?php
require_once 'muralDAO.php';
require_once 'autenticar.php';
$msg = DaoMural::getInstance()->Deletar($_POST['id']);

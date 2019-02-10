<?php
ini_set("display_errors", 1);
ini_set("display_startup_erros", 1);
error_reporting(E_ALL);
require_once 'muralDAO.php';
require_once 'autenticar.php';
$i = DaoMural::getInstance();
$post = $i->BuscarPorCOD($_POST['id']);
$post->setStatus('Publicado');
$i->Editar($post);

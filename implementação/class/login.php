<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";

// Conexão com o banco de dados
require_once "conexao.php";

// Inicia sessões
session_start();

// Recupera o login
$login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE;
// Recupera a senha, a criptografando em MD5
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;

// Usuário não forneceu a senha ou o login
if(!$login || !$senha)
{
  echo "Você deve digitar sua senha e login!";
  exit;
}

/**
 * Executa a consulta no banco de dados.
 * Caso o número de linhas retornadas seja 1 o login é válido,
 * caso 0, inválido.
 */
$SQL = "SELECT id, nome, login, senha FROM usuarios WHERE login = '" . $login . "'";
$result_id = Conexao::getInstance()->prepare($SQL) or die("Erro no banco de dados!");

$total = $result_id->execute();
// Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão
$dados = $result_id->fetch();

// Caso o usuário tenha digitado um login válido o número de linhas será 1..
if($dados)
{

  // Agora verifica a senha
  if(!strcmp($senha, $dados["senha"])){
    // TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário
    $_SESSION["id_usuario"]  = $dados["id"];
    $_SESSION["nome_usuario"] = stripslashes($dados["nome"]);
    vai($_POST['vai_para']);
  }
  // Senha inválida
  else{
    header('Location: http://'. $_SERVER['HTTP_HOST'] . $dir .'/pages/login_admin.php?erro=Senha Inválida');
  }
}
// Login inválido
else
{
  header('Location: http://'. $_SERVER['HTTP_HOST'] . $dir .'/pages/login_admin.php?erro=Login Inválido');
}

function vai($file){
  include $_SERVER['DOCUMENT_ROOT'] . "/config.php";
  if($file == 'painel.php'){
    header_l('http://'. $_SERVER['HTTP_HOST'] . $dir .'/pages/painel.php');
  }elseif ($file == 'form_noticia.php'){
    header_l('http://'. $_SERVER['HTTP_HOST'] . $dir .'/pages/form_noticia.php');
  }else{
    header_l('http://'. $_SERVER['HTTP_HOST'] . $dir .'/pages/painel.php');
  }

}


function header_l($file){
  header("Location: " . $file);
}
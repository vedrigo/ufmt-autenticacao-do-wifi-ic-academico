<?php

require_once "conexao.php";
require_once "usuario.php";

class DaoUsuario
{

  public static $instance;

  private function __construct()
  {
    //
  }

  public static function getInstance()
  {
    if (!isset(self::$instance))
      self::$instance = new DaoUsuario();

    return self::$instance;
  }

  public function Inserir(Usuario $usuario)
  {
    try {
      $sql = "INSERT INTO usuarios ( 
                login,
                nome,
                senha) 
                VALUES (
                :login,
                :nome,
                :senha)";

      $p_sql = Conexao::getInstance()->prepare($sql);

      $p_sql->bindValue(":login", $usuario->getLogin());
      $p_sql->bindValue(":nome", $usuario->getNome());
      $p_sql->bindValue(":senha", $usuario->getSenha());


      return $p_sql->execute();
    } catch (Exception $e) {
      print "<pre>Ocorreu um erro ao tentar executar a ação Inserir Usuario.\n" .
        ("Erro: Código: " . $e->getCode() . " \nMensagem: " . $e->getMessage()) . "</pre>";
    }
  }

  public function Editar(Usuario $usuario)
  {
    try {
      $sql = "UPDATE usuarios set
                login = :login,
                nome = :nome,
                senha = :senha,
                id = :id WHERE id = :id";

      $p_sql = Conexao::getInstance()->prepare($sql);

      $p_sql->bindValue(":login", $usuario->getLogin());
      $p_sql->bindValue(":nome", $usuario->getNome());
      $p_sql->bindValue(":senha", $usuario->getSenha());
      $p_sql->bindValue(":id", $usuario->getId());

      return $p_sql->execute();
    } catch (Exception $e) {
      print "<pre>Ocorreu um erro ao tentar executar a ação Editar Usuario\n" .
        "Erro: Código: " . $e->getCode() . "\nMensagem: " . $e->getMessage() . "</pre>";
    }
  }

  public function Deletar($id)
  {
    try {
      $sql = "DELETE FROM usuarios WHERE id = :id";
      $p_sql = Conexao::getInstance()->prepare($sql);
      $p_sql->bindValue(":id", $id);

      return $p_sql->execute();
    } catch (Exception $e) {
      print "<pre>Ocorreu um erro ao tentar executar a ação Deletar Usuario" .
        "\nErro: Código: " . $e->getCode() . "\nMensagem: " . $e->getMessage() . "</pre>";
    }
  }

  public function BuscarPorCOD($id)
  {
    try {
      $sql = "SELECT * FROM usuarios WHERE id = :id";
      $p_sql = Conexao::getInstance()->prepare($sql);
      $p_sql->bindValue(":id", $id);
      $p_sql->execute();
      return $this->populaUsuario($p_sql->fetch(PDO::FETCH_ASSOC));
    } catch (Exception $e) {
      print "<pre>Ocorreu um erro ao tentar executar a ação Buscar Usuario" .
        "\nErro: Código: " . $e->getCode() . "\nMensagem: " . $e->getMessage() . "</pre>";
    }
  }

  private function populaUsuario($row)
  {
    $pojo = new Usuario;
    $pojo->setId($row['id']);
    $pojo->setLogin($row['login']);
    $pojo->setNome($row['nome']);
    $pojo->setSenha($row['senha']);
    return $pojo;
  }

  public function carregarUsuario($senha)
  {
    $pojo = new Usuario();
    isset($_POST['login']) ? $pojo->setLogin($_POST['login']) : '';
    isset($_POST['nome']) ? $pojo->setNome($_POST['nome']) : '';
    $pojo->setSenha($senha);
    isset($_POST['id']) ? $pojo->setId($_POST['id']) : '';

    return $pojo;
  }

  public function show($n)
  {
    try {
      $sql = "SELECT * FROM usuarios ORDER BY nome DESC LIMIT " . $n . ';';
      $p_sql = Conexao::getInstance()->prepare($sql);
      $p_sql->execute();
      return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      print "<pre>Ocorreu um erro ao tentar executar a ação Mostrar Usuarios" .
        "\nErro: Código: " . $e->getCode() . "\nMensagem: " . $e->getMessage() . "</pre>";
    }
  }

}

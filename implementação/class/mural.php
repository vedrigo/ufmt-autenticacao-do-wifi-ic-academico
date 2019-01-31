<?php

require_once "conexao.php";
require_once "pojo_noticia.php";

class DaoMural {

  public static $instance;

  private function __construct() {
    //
  }

  public static function getInstance() {
    if (!isset(self::$instance))
      self::$instance = new DaoMural();

    return self::$instance;
  }

  public function Inserir(PojoNoticia $noticia) {
    try {
      $sql = "INSERT INTO mural ( 
                titulo,
                texto,
                imagem,
                status) 
                VALUES (
                :titulo,
                :texto,
                :imagem,
                :status)";

      $p_sql = Conexao::getInstance()->prepare($sql);

      $p_sql->bindValue(":titulo", $noticia->getTitulo());
      $p_sql->bindValue(":texto", $noticia->getTexto());
      $p_sql->bindValue(":imagem", $noticia->getImagem());
      $p_sql->bindValue(":status", $noticia->getStatus());


      return $p_sql->execute();
    } catch (Exception $e) {
      print "<pre>Ocorreu um erro ao tentar executar a ação Inserir Noticia.\n" .
        ("Erro: Código: " . $e->getCode() . " \nMensagem: " . $e->getMessage()) . "</pre>";
    }
  }

  public function Editar(PojoNoticias $noticia) {
    try {
      $sql = "UPDATE mural set
                titulo = :titulo,
                texto = :texto,
                imagem = :imagem,
                status = :status,
                id = :id WHERE id = :id";

      $p_sql = Conexao::getInstance()->prepare($sql);

      $p_sql->bindValue(":titulo", $noticia->getTitulo());
      $p_sql->bindValue(":texto", $noticia->getTexto());
      $p_sql->bindValue(":imagem", $noticia->getImagem());
      $p_sql->bindValue(":status", $noticia->getStatus());
      $p_sql->bindValue(":id", $noticia->getId());

      return $p_sql->execute();
    } catch (Exception $e) {
      print "<pre>Ocorreu um erro ao tentar executar a ação Editar Noticia\n" .
        "Erro: Código: " . $e->getCode() . "\nMensagem: " . $e->getMessage() . "</pre>";
    }
  }

  public function Deletar($id) {
    try {
      $sql = "DELETE FROM mural WHERE id = :id";
      $p_sql = Conexao::getInstance()->prepare($sql);
      $p_sql->bindValue(":id", $id);

      return $p_sql->execute();
    } catch (Exception $e) {
      print "<pre>Ocorreu um erro ao tentar executar a ação Deletar Noticia" .
        "\nErro: Código: " . $e->getCode() . "\nMensagem: " . $e->getMessage() . "</pre>";
    }
  }

  public function BuscarPorCOD($id) {
    try {
      $sql = "SELECT * FROM mural WHERE id = :id";
      $p_sql = Conexao::getInstance()->prepare($sql);
      $p_sql->bindValue(":id", $id);
      $p_sql->execute();
      return $this->populaNoticia($p_sql->fetch(PDO::FETCH_ASSOC));
    } catch (Exception $e) {
      print "<pre>Ocorreu um erro ao tentar executar a ação Buscar Noticia" .
        "\nErro: Código: " . $e->getCode() . "\nMensagem: " . $e->getMessage() . "</pre>";
    }
  }
  private function populaNoticia($row) {
    $pojo = new PojoNoticia;
    $pojo->setId($row['id']);
    $pojo->setTitulo($row['titulo']);
    $pojo->setTexto($row['texto']);
    $pojo->setImagem($row['imagem']);
    $pojo->setStatus($row['status']);
    return $pojo;
  }
  public function carregarNoticia($imagem) {
    $pojo = new PojoNoticia();
    isset($_POST['titulo']) ? $pojo->setTitulo($_POST['titulo']) : '';
    isset($_POST['texto']) ? $pojo->setTexto($_POST['texto']) : '';
    $pojo->setImagem($imagem);
    isset($_POST['status']) ? $pojo->setStatus($_POST['status']) : $pojo->setStatus('Rivisão');
    isset($_POST['id']) ? $pojo->setId($_POST['id']) : '';

    return $pojo;
  }

  public function show($n) {
    try {
      $sql = "SELECT * FROM mural ORDER BY created_at DESC LIMIT " . $n . ';';
      $p_sql = Conexao::getInstance()->prepare($sql);
      $p_sql->execute();
      return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      print "<pre>Ocorreu um erro ao tentar executar a ação Mostrar Noticias" .
        "\nErro: Código: " . $e->getCode() . "\nMensagem: " . $e->getMessage() . "</pre>";
    }
  }

}

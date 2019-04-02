<?php
require_once  "../config.php";

require_once  $dir . "/class/conexao.php";
require_once  $dir . "/class/noticia.php";
require_once  $dir . "/class/functions.php";

class DaoMural
{

  public static $instanceM;

  private function __construct()
  {
    //
  }

  public static function getInstance()
  {
    if (!isset(self::$instanceM))
      self::$instanceM = new DaoMural();

    return self::$instanceM;
  }

  public function Inserir(Noticia $noticia)
  {
    $conn = Conexao::getInstance();
    $sql = "SELECT COUNT(*) FROM mural";
    $p_sql = $conn->prepare($sql);
    $p_sql->execute();
    $p_sql = $p_sql->fetch();
    $p_sql = $p_sql[0];
    if ($p_sql >= 60) {
      $sql = 'SELECT id FROM mural ORDER BY id LIMIT 1';
      $p_sql = $conn->prepare($sql);
      $p_sql->execute();
      $p_sql = $p_sql->fetch();
      $p_sql = $p_sql[0];
      $this->Deletar($p_sql);
    }
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
      $p_sql = $conn->prepare($sql);
      $t = remove_bs($noticia->getTexto());
      $p_sql->bindValue(":titulo", $noticia->getTitulo());
      $p_sql->bindValue(":texto", $t);
      $p_sql->bindValue(":imagem", $noticia->getImagem());
      $p_sql->bindValue(":status", $noticia->getStatus());


      return $p_sql->execute();
    } catch (Exception $e) {
      print "<pre>Ocorreu um erro ao tentar executar a ação Inserir Noticia.\n" .
        ("Erro: Código: " . $e->getCode() . " \nMensagem: " . $e->getMessage()) . "</pre>";
    }
  }

  public function Deletar($id)
  {
    try {
      $noticia = $this->BuscarPorCOD($id);
      $dir = '../uploads/' . $noticia->getImagem();
      $ok = 0;
      if ($noticia->getImagem() == '' or !file_exists($dir)) {
        $ok = 1;
      } elseif (unlink($dir)) {
        $ok = 1;
      }
      if ($ok) {
        $sql = "DELETE FROM mural WHERE id = :id";
        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->bindValue(":id", $id);
        return $p_sql->execute();
      } else {
        return 'erro';
      }
    } catch (Exception $e) {
      print "<pre>Ocorreu um erro ao tentar executar a ação Deletar Noticia" .
        "\nErro: Código: " . $e->getCode() . "\nMensagem: " . $e->getMessage() . "</pre>";
    }
  }

  public function BuscarPorCOD($id)
  {
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

  private function populaNoticia($row)
  {
    $pojo = new Noticia();
    $pojo->setId($row['id']);
    $pojo->setTitulo($row['titulo']);
    $pojo->setTexto($row['texto']);
    $pojo->setImagem($row['imagem']);
    $pojo->setStatus($row['status']);
    return $pojo;
  }

  public function Editar(Noticia $noticia)
  {
    try {
      $sql = "UPDATE mural set
                titulo = :titulo,
                texto = :texto,
                imagem = :imagem,
                status = :status,
                id = :id WHERE id = :id";

      $conn = Conexao::getInstance();
      $p_sql = $conn->prepare($sql);


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

  public function carregarNoticia($imagem)
  {
    $pojo = new Noticia();
    isset($_POST['titulo']) ? $pojo->setTitulo($_POST['titulo']) : '';
    isset($_POST['texto']) ? $pojo->setTexto($_POST['texto']) : '';
    $pojo->setImagem($imagem);
    isset($_POST['status']) ? $pojo->setStatus($_POST['status']) : $pojo->setStatus('Rivisão');
    isset($_POST['id']) ? $pojo->setId($_POST['id']) : '';

    return $pojo;
  }

  public function show($n, $status, $page = 0)
  {
    $start = $n * $page;
    try {
      if ($status == 'all') {
        $sql = "SELECT * FROM mural ORDER BY created_at DESC LIMIT " . $n . ';';
      } else {
        $sql = "SELECT * FROM mural WHERE status = '" . $status . "' ORDER BY created_at DESC LIMIT " . $start . ',' . $n . ' ;';
      }
      $p_sql = Conexao::getInstance()->prepare($sql);
      $p_sql->execute();
      return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      print "<pre>Ocorreu um erro ao tentar executar a ação Mostrar Noticias" .
        "\nErro: Código: " . $e->getCode() . "\nMensagem: " . $e->getMessage() . "</pre>";
    }
  }

}


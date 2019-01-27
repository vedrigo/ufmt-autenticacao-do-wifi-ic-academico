<?php
  class PojoNoticia {

    private $id;
    private $titulo;
    private $texto;
    private $imagem;
    private $status;

    public function getId() {
    return $this->id;
    }

    public function setId($id) {
    $this->id = $id;
    }

    public function getTitulo() {
    return $this->titulo;
    }

    public function setTitulo($titulo) {
    $this->titulo = $titulo;
    }

    public function getTexto() {
    return $this->texto;
    }

    public function setTexto($texto) {
    $this->texto = $texto;
    }

    public function getImagem() {
    return $this->imagem;
    }

    public function setImagem($imagem) {
    $this->imagem = $imagem;
    }

    public function getStatus() {
    return $this->status;
    }

    public function setStatus($status) {
    $this->status = $status;
    }

  }
?>

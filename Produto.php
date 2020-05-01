<?php
class Produto {
  
  public $id;
  public $nome;
  public $descricao;
  public $preco;
  public $quantidade;
  private $taxa;
  public $frete;
  
    public function getId(){
      return $this->id;
    }
    public function setId($i){
      $this->id = $i;
    }
    public function getNome(){
    return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($d){
        $this->descricao = $d;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($p){
        $this->preco = $p;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function setQuantidade($q){
        $this->quantidade = $q;
    }
    public function getTaxa(){
        return $this->taxa;
    }
    public function setTaxa($t){
        $this->taxa = $t;
    }
    public function getFrete(){
        return $this->frete;
    }
    public function setFrete($f){
        $this->frete = $f;
    }

} 
?>
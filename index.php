<?php

class Produto {

    public $nome;
    public $preco;

    public function __construct ($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        return $this->nome = $nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        return $this->preco = $preco;
    }

    public function Exibir() {
        echo "Produto: " . $this->name;
    }

}

class Carrinho {

    private $itens = [];

    public function adicionar($itens) {
        $this->$itens = $itens;
    }

    public function exibirLista(){
        
    }

}
$p1 = new Produto('maça', 2);
$p2 = new PRoduto('banana', 1);

$c = new Carrinho($p1, $p2);
var_dump($c);
?>
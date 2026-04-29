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

    public function getPreco() {
        return $this->preco;
    }
    
}

class Carrinho {

    private $itens = [];

    public function adicionar(Produto $produto) {
        $this->itens[] = $produto;
    }

    public function exibirLista() {
        foreach ($this->itens as $item) {
            echo "" . $item->getNome() . ": R$ " . $item->getPreco() . "\n";
        }   
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($this->itens as $item) {
            $total += $item->getPreco();
        }
        return $total;
    }

}
$p1 = new Produto('maça', 2);
$p2 = new PRoduto('banana', 1);

$c = new Carrinho();
$c->adicionar($p1);
$c->adicionar($p2);
$c->exibirLista();
echo "Total: R$ " . $c->calcularTotal();
//var_dump($c);
?>
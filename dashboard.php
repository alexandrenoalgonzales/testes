<?php

class Produto {
    // Atributos privados: só a classe enxerga
    private $nome;
    private $preco;

    // O construtor preenche os dados assim que o objeto é criado
    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    // Métodos "Getter" para permitir ler os dados fora da classe
    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }
}

class Carrinho {
    // Esse array vai guardar vários objetos da classe Produto
    private $itens = [];

    // Aqui dizemos que $produto PRECISA ser um objeto da classe Produto
    public function adicionar(Produto $produto) {
        $this->itens[] = $produto;
    }

    public function exibirLista() {
        foreach ($this->itens as $item) {
            // Chamamos os métodos que criamos na classe Produto
            echo "- " . $item->getNome() . ": R$ " . $item->getPreco() . "\n";
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

// --- TESTANDO O CÓDIGO ---

$p1 = new Produto("Teclado", 150.00);
$p2 = new Produto("Mouse", 80.00);

$carrinho = new Carrinho();
$carrinho->adicionar($p1);
$carrinho->adicionar($p2);

echo "Seu Carrinho:\n";
$carrinho->exibirLista();
echo "Total: R$ " . $carrinho->calcularTotal();
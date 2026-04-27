<?php

class User {

    public $nome;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($n) {
        return $this->nome = $n;
    }

}

$nome = new User();
$nome->setNome("alexandreNoal");
echo $nome->getNome();
?>
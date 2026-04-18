<?php

namespace classes;

class Login {

    public $user;
    public $senha;

    public function Logar() {
        if($this->user == "ale" and $this->senha == "123"):
            echo $user." Logado com sucesso";
        else:
            echo "Dados inválidos";
        endif;
    }

}

?>
<?php

namespace classes;

class Login{

    private $user;
    private $senha;

    public function __construct($userInformado, $senhaInformada) {
        $this->user = $userInformado;
        $this->senha = $senhaInformada;
    } 

    public function Logar() {
        if($this->user == "ale" and $this->senha == "123"):
            return $this->user . " Logado com sucesso";
        else:
            return "Dados inválidos";
        endif;
    }
    
}

?>
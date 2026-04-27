    private $user;
    private $senha;

    public function __construct($userInformado, $senhaInformada) {
        $this->user = $userInformado;
        $this->senha = $senhaInformada;
    } 


<?php

namespace classes;

class Login {
    // Ao colocar "public" ou "private" no argumento, o PHP já cria a 
    // propriedade e atribui o valor automaticamente para você.
    public function __construct(
        public string $user, 
        public string $senha
    ) {}

    public function Logar() {
        if($this->user == "ale" and $this->senha == "123"):
            return $this->user . " Logado com sucesso";
        else:
            return "Dados inválidos";
        endif;
    }
    
}

?>
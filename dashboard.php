<div class="nav">
            <a href="index.php">Sair</a>
        </div>

<?php

require 'classes/login.php';

use classes\login;

$login = new Login();
$login->user =$_GET['user'];
$login->senha =$_GET['senha'];
$login->Logar();

?>
<?php

require 'classes/login.php';
use classes\Login;

$user = $_POST['user'] ?? '';
$senha = $_POST['senha'] ?? '';

$login = new Login($user, $senha);
echo $login->Logar();
var_dump($login)
?>
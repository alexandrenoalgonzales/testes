<?php

require 'classes/login.php';
use classes\Login;

?>

<html>
    <h4>Bem-vindo</h4>
    <form action="dashboard.php" method="POST">
        <label>User</label>
        <input type="text" name="user">
        <label>Senha</label>
        <input type="password" name="senha">
        <input type="submit" vale="entrar">
    </form>
</html>
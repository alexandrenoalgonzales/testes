<?php

require 'classes/login.php';

use classes\login;

?>

<html>
<head>
    <title>Login</title>
        
</head>    
<body>
    <h4>Bem vindo</h4>
    <div class="form">
        <form action="dashboard.php">
        <div>
            <label>Usuário</label>
            <input type="txt" method="GET" name="user">
        </div>
        <div>
            <label>Senha</label>
            <input type="password" method="GET" name="senha">
        </div>
        <div>
            <input type="submit" value="Entrar">
        </div>
        </form>
    </div>
</body>
</html>


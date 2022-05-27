<?php
include_once "./config/conexao.php";
session_start();

if (isset($_SESSION['msg']))
{
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/zzzzzzzzzz.css"/>
        <title>Login</title>
    </head>
    <body>
        <div class = "center">
        <h1>Login</h1>
        
        <form method="POST" action="config/valida_login.php">
            
            <div class="txt_field">
            <input type="text" name="usuario" required>
            <label>Usuário</label>
            </div>
            
            
            <div class="txt_field">
            <input type="password" name="senha" required>
            <label>Senha</label>
            </div>
            
            <div class="pass">Esqueceu a senha?</div>
            
            <input type="submit" name="bt_login" value="Fazer login">
            
            <div class="signup_link">Não tem conta? <a href="adm/cadastrar.php">Cadastrar</a></div>
         
        </form>
        </div>
    </body>
</html>

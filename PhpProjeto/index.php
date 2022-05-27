<?php
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Usuário</title>
    </head>
    <body>
        <h1>Cadastro Usuário</h1>
        <form method="POST" action="valida/valida_cad_usuario.php">
            <label>Usuário.:</label>
            <input type="text" name="usuario" placeholder="Informe seu nome" required><br><br>
            <label>Senha...:</label>
            <input type="password" name="senha" placeholder="Informe seu email" required><br><br>
            <label>Email...:</label>
            <input type="email" name="fone" placeholder="Informe seu numero" required><br><br>
            <label>telefone:</label>
            <input type="number" name="fone" placeholder="Informe seu telefone" required><br><br>

            <input type="submit" name="bt_cad_usuario" value="Fazer login">
        </form>
    </body>
</html>
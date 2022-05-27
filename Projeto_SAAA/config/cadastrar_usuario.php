<?php
session_start();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="mostrar_usuario.php">Listar</a><br>
        <a href="cadastrar_usuario.php">Cadastrar</a><br>
        
       <div class = "cadastro">
           <form method="POST" action="valida_cad.php">
          <h1>Cadastro</h1> 
          
           <div class="txt_field"> 
            <input type="text" name="nome" required>
            <label>Usuário</label>
            </div>

            <div class="txt_field">
            <input type="password" name="senha" required>
            <label>Senha</label>
            </div>
           <div class="txt_field">
            <input type="email" name="email" required>
            <label>Email</label>
            </div>
          
           <div class="txt_field">
            <input type="text" name="fone" required>
            <label>Numero</label>
            </div>
          
            <label>Permisao :</label>
            <select name="nivel_acesso_id"> 
            <option value=1>Basico</option> 
            <option value=2>Admin</option> 

                </select><br><br>
 
          <input type="submit" name="bt_cadastrar" value="Cadastrar">
            <?php
            if (isset($_SESSION['msg']))
            {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            
            }  
            ?>
    </body>
</html>

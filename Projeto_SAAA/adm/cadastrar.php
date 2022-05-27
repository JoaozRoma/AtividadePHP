<?php
session_start();


if (isset($_SESSION['msg']))
{
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" href="../css/newcadas.css"/>
</head>

<body>  
      <div class = "cadastro">
          <form method="POST" action="../config/valida_cadastro.php">
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
 
          <input type="submit" name="bt_cadastrar" value="Cadastrar">

          <div class="signup_link">Já tem o <a href="../index.php">Login?</a></div>
            
          </div>
        </form>
      </div>
    </div>
  </div> 
  
</body>

</html>
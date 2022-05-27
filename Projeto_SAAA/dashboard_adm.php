<?php

  if (!isset($_SESSION)) session_start();

  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION['id'])) {
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header("Location:\projeto_SAAA\index.php");
      exit;
  }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash_adm.css">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>CineHouse - Aba Inicial </title>
</head>
<body>
  <nav>
    <div class="logo">
      <h4>Movies Warehouse</h4>
    </div>
    <ul class ="nav-links">
      <li><a href = "">Página Inicial</a></li>
      <li><a href= "">Lista de Filmes</a></li>
      <li><a href= "dashboard_adm.php">Página do Usuário</a></li>
      <li><a href= "config/mostrar_usuario.php">contas</a></li>
  </ul>
  </nav>
    <h1 class="texto_h1">Você está na pagina de Adm</h1>
    
    <br><br><br>
    

    <h1 class="texto_h1">Gereciamento de filmes</h1><br>
    <div class="center">
    
    <form method="POST" action="config/valida_filme.php">
 

       <div class="txt_field"> 
        <input type="text" name="nome_filme"required>
        <label>Nome do filme</label>
        </div>
        
        <div class="txt_field"> 
        <input type="text" name="ano"required>
        <label>Ano do filme</label>
        </div>
        
        <div class="txt_field"> 
        <input type="float" name="ranking"required>
        <label>Nota do filme</label>
        </div>
        
        <form>
                <label>Generos :</label>
                <select name="genero_id"> 
                <option value="" selected></option>
                <option value=1 >Ação</option> 
                <option value=2 >comedia</option> 
                <option value=3 >Comédia Romântica</option> 
                <option value=4 >Comédia Dramática</option> 
                <option value=5 >Documentário</option> 
                <option value=6 >Drama</option> 
                <option value=7 >Faroeste</option> 
                <option value=8 >Ficção Científica</option> 
                <option value=9 >Musical</option> 
                <option value=10 >Suspense</option> 
                <option value=11 >Terror</option> 
                
                
                </select><br><br>
               
        <label>Diretores :</label>
                <select name="diretore_id"> 
                <option value="" selected></option>
                <option value=1 >jorge</option> 
                <option value=2 >lucas</option> 
                <option value=3 >zé</option> 
                <option value=4 >china</option> 
                </select><br><br>
    
               <input type="submit" name="bt_cad_film" value="cadastrar">
            <?php
            if (isset($_SESSION['msg']))
            {           
             echo $_SESSION['msg'];
             unset($_SESSION['msg']);
            }
            ?>
               
               
               
        </div>
    </form>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    

 

</body>
</html>

<?php
session_start();
echo"<h1>Sua permissao é ".$_SESSION['nivel_acesso'].  "<br>";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash.css">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
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
        <li><a href= "dashboard.php">Página do Usuário</a></li>
  </ul>
  </nav>
 

</body>
</html>
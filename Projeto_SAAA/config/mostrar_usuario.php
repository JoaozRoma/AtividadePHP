<?php
session_start();
include_once './conexao.php';

$nivelacesso[1] = "Basico";
$nivelacesso[2] = "Admin";

?>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mostrar_usuario.css">
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
        <li><a href = "cadastrar_usuario.php">Cadastrar</a></li>
        <li><a href = "../dashboard_adm.php">Página do Usuário</a></li>
  </ul>
  </nav>
    <table border="1"> 
        <tr> 
          <td>Código</td> 
          <td>Nome</td> 
          <td>E-mail</td>
          <td>Fone</td>
          <td>Permissao</td>
          <td>Data de criação</td> 
 
          <td>Ação</td> 
        </tr> 
        <?php 
        
        $query_usuario = "SELECT * FROM usuarios";
        $resultado_usuario = $conn ->prepare($query_usuario);
        $resultado_usuario-> execute();
        if(($resultado_usuario) AND ($resultado_usuario->rowCount() != 0)) 
        {
            while($row_usuario = $resultado_usuario->fetch(PDO::FETCH_ASSOC)) 
        
        {?> 
        <tr> 
          <td><?php echo $row_usuario['id']; ?></td>
          <td><?php echo $row_usuario['nome']; ?></td> 
          <td><?php echo $row_usuario['email']; ?></td>
          <td><?php echo $row_usuario['fone']; ?></td>
          <td><?php echo $nivelacesso[$row_usuario['nivel_acesso_id']]; ?></td>

          <td><?php echo date('d/m/Y H:i:s', strtotime($row_usuario['created'])); ?></td> 
          <td> 
            <a href="editar_usuario.php?id=<?php echo $row_usuario['id']; ?>">Editar</a> 
            <a href="excluir_usuario.php?id=<?php echo $row_usuario['id']; ?>">Excluir</a> 
          </td> 
        </tr> 
        <?php 
        
        }
        
        }
        else
        {
        echo "Nenhum usuário encontrado";
        }
        ?> 
        <?php
            if (isset($_SESSION['msg']))
            {           
             echo $_SESSION['msg'];
             unset($_SESSION['msg']);
            }
            
        ?>
      </table> 
      </html>
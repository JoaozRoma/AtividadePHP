<?php
include_once './conexao.php';
session_start();

$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);

//var_dump($dados);

if(!empty($dados["bt_login"]))
{
$query_usuarios = "SELECT id, nome, senha, nivel_acesso_id FROM usuarios WHERE nome =:usuario LIMIT 1";

   $resultado_usuario = $conn->prepare($query_usuarios);
    $resultado_usuario->bindparam(':usuario',$dados['usuario']);
    $resultado_usuario->execute();

    if (($resultado_usuario) AND ($resultado_usuario->rowCount() != 0)) 
    {
        $row_usuario = $resultado_usuario->fetch(PDO::FETCH_ASSOC);
       

        if ($dados['senha'] == $row_usuario['senha']) 
        {
            $_SESSION['id'] = $row_usuario['id'];
            $_SESSION['nome'] = $row_usuario['nome'];           
            $_SESSION['nivel_acesso_id'] = $row_usuario['nivel_acesso_id'];

            if ($_SESSION['nivel_acesso_id'] == '2') 
            {
             
                header("Location:\projeto_SAAA\dashboard_adm.php");
            } 
            elseif ($_SESSION['nivel_acesso_id'] == '1') 
            {
                header("Location:\projeto_SAAA\dashboard.php");
            } 
            else 
            {
                $_SESSION['msg'] = "<p style= 'color:red' >Entre em contato com o administrador!</p>";
                header("Location:\projeto_login\index.php");
            }
            
        } else {
            $_SESSION['msg'] = "<p style= 'color:red' >senha inválida!</p>";
            header("Location:\projeto_SAAA\index.php");
        }
    } else {
        $_SESSION['msg'] = "<p style= 'color:red' >Usuário inválido!</p>";
        header("Location:\projeto_SAAA\index.php");
    }
} else {
    $_SESSION['msg'] = "<p style= 'color:red' >Não recebi valores do formulário!</p>";
    header("Location:\projeto_SAAA\index.php");
}

   
    


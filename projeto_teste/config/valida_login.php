<?php
include_once './conexao.php';
session_start();

$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);

//var_dump($dados);

if(!empty($dados["bt_login"]))
{
$query_usuarios = "SELECT id, nome, senha, created, modify FROM usuarios WHERE nome =:usuario LIMIT 1";

    $resultado_usuario = $conn->prepare($query_usuarios);
    $resultado_usuario->bindparam(':usuario',$dados['usuario']);
    $resultado_usuario->execute();
    
    //foda gamer
    
    if(($resultado_usuario) AND($resultado_usuario->rowCount() !=0))
    {
        $row_usuario = $resultado_usuario->fetch(PDO::FETCH_ASSOC);
     
        if ($dados['senha'] == $row_usuario['senha'])
        {
            $_SESSION['id']   = $row_usuario['id'];
            $_SESSION['senha']   = $row_usuario['senha'];
            $_SESSION['nome'] = $row_usuario['nome'];
            header("Location:../dashboard.php");
        }
        else
        {
            $_SESSION['msg'] = "<p style= 'color:red'> senha invalida <p/>";
            header("Location:../index.php");
        }
    }   
    else 
    {
        $_SESSION['msg'] = "<p style= 'color:red'> nome invalido <p/>";
        header("Location:../index.php");  
    } 
}
else 
{
  $_SESSION['msg'] = "<p style= 'color:red'> num vai valor nessa poha <p/>";
  header("Location:../index.php");   
}
         

?>
<?php
session_start();
include_once './conexao.php';



$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);


if (!empty($dados['bt_cad_film']))
{
  $query_cadastro_filme = "INSERT INTO filmes (nome_filme, ano, ranking, genero_id, diretore_id, created) VALUES ('".$dados['nome_filme']."','".$dados['ano']."','".$dados['ranking']."','".$dados['genero_id']."','".$dados['diretore_id']."',NOW())";

  $resultado_filme = $conn ->prepare($query_cadastro_filme);
  $resultado_filme -> execute();
  
  
    if (($resultado_filme) AND ($resultado_filme ->rowCount() != 0)) 
    {
        $row_usuario = $resultado_filme ->fetch(PDO::FETCH_ASSOC);
        $_SESSION['msg'] = "<h2><p style='color: green'>Filme cadastrado!</p></h2>";
        header("Location: \Projeto_SAAA\dashboard_adm.php");
    } 
    else 
    {
        $_SESSION['msg'] = "<h2><p style='color: blue'>Filme não cadastrado!</p></h2>";
        header("Location: \Projeto_SAAA\dashboard_adm.php");
        
    } 
}
    else
{
  $_SESSION['msg']="<h2><p style ='color: blue'>não foi possivel cadastrar!</p></h2>";
  
   header("Location: \Projeto_SAAA\dashboard_adm.php");
}


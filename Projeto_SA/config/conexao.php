<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "projeto_desen";
$port = 3306;



try 
{
  $conn = new PDO("mysql:host =$host; porta=$port; dbname=".$dbname,$user,$password);
 // echo "conectado";  
} 
catch (Exception $erro) 
{
  echo"<p style= 'color:red'> Não foi possivel conectar. Erro gerado: </p><br>".$erro->getMessage();
}



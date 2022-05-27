<?php

$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "projeto_desen";
$port = 3306;


try 
{
    $conn = new PDO("mysql:host=$host; port = $port; dbname=". $dbname, $user, $pass);
    echo "Conexão bem sucedida: ";
} 
catch (PDOException $erro) 
{
    echo"Não foi possivel conectar. Erro gerado: " . $erro->getMessage();
}
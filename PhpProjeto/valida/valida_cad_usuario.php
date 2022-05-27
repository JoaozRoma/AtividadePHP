<?php 
include_once '../config/conexao.php';

$dados_cad_usuario = filter_input_array(INPUT_POST,FILTER_DEFAULT);


if (!empty($dados_cad_usuarios['bt_cad_usuario']))
{
var_dump($dados_cad_usuario);   


$query_cadastro="INSERT INTO `usuarios`(`id`, `nome`, `telefone`, `email`, `situaçao_id`, `estados_id`, `cidades_id`, `nivel_id`, `created`, `modify`) "
        . "     "
        . "      VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]')"
}
else 
{
echo "não recebi";
}
?>

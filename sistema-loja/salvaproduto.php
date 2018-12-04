<?php 
require "include/connection.php";

$nome = $_POST['nome'];
$estoque = $_POST['estoque'];

$valor = $_POST['valor'];
$valor= str_replace('.','',$valor);
$valor= str_replace(',','.',$valor);

$id_categoria = $_POST['id_categoria'];
$sql_insere_produto = "INSERT INTO produto(nome,estoque,valor,id_categoria)
						VALUES ('{$nome}','{$estoque}','{$valor}','{$id_categoria}')";

if($conexao->query($sql_insere_produto)){
	$msg = "Produto cadastrado";
	$tipo_msg = "success";
}else{
	$msg = "Não foi possível cadastrar";
	$tipo_msg = "danger";
}
header("location:produtos.php?msg=$msg&tipo_msg=$tipo_msg");						
 ?>
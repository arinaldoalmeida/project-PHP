<?php 
require "include/connection.php";
$descricao = $_POST['descricao'];

$sql_insercao = "INSERT INTO categoria (descricao) VALUES ('{$descricao}')";
$conexao->query($sql_insercao);
/*print_r($conexao); exit;*/
header("location: categoria.php");
 ?>
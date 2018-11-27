<?php 
require "include/connection.php";
$descricao = $_POST['descrição'];
$sql_insercao = "INSERT INTO categoria (descricao) VALUES ('{$descricao}')";
$conexao->query ($sql_insercao);
header("location:categoria.php");
 ?>
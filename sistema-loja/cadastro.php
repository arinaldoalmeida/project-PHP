<?php 
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha= $_POST['senha'];

require "include/connection.php";
$sql_usuario = "INSERT INTO usuario (nome,email,senha)
				VALUES ('{$nome}','{$email}','{$senha}')";

				$conexao->query($sql_usuario);
				header("location:usuario.php");

 ?>
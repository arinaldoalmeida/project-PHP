<?php 
 require "include/connection.php";

 $id = $_POST['id'];
 $descricao = $_POST['descricao'];

 $sql_altera = "UPDATE categoria SET descricao = '{$descricao}' WHERE id = {$id}";

 if($conexao->query($sql_altera)){
 	$msg = 'Salvo com sucesso!';
 	$tipo_msg = 'success';
 	}else{
 		$msg = 'Não é possível salvar';
 	$tipo_msg = 'danger';
 	}

 header("location: categoria.php?msg={$msg}&tipo_msg={$tipo_msg}");
 ?>
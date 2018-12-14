<?php 
require "include/connection.php";
$id = $_GET['id'];

$sql_deletuser = "DELETE FROM usuario WHERE id = {$id}";
try {
	
	$conexao->query($sql_deletuser);
	$msg = "Usuario excluído com sucesso!";
	$tipo_msg = "success";
	header("Location:usuario.php?msg={$msg}&tipo_msg={$tipo_msg}");
} catch (Exception $e) {
	$msg = "Não foi possível excluir! Erro: {$e->getMessage()}";
	$tipo_msg = "danger";
	header("Location:usuario.php?msg={$msg}&tipo_msg={$tipo_msg}");
}
?>
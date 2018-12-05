<?php 
require"include/connection.php";
$id = $_GET['id'];

$sql_excluir = "DELETE FROM produto WHERE id = {$id}";

try {
	$conexao->query($sql_excluir);
	$msg = 'Produto excluído';
	$tipo_msg = 'success';


header("location:produtos.php?msg={$msg}&tipo_msg={$tipo_msg}");
} catch (Exception $e) {

	$msg = "Não é possível excluir! Error:{$e->getMessage()}";
	$tipo_msg = 'danger';
header("location:produtos.php?msg={$msg}&tipo_msg={$tipo_msg}");
}
 ?>
<?php 
include "layout/header.php";
include "layout/menu.php";
require "include/connection.php";

isset($_GET['id']) && $_GET['id'] != '')
	$id = $_GET['id'];
	$sql_usuario = "SELECT * FROM produto WHERE id = {$id}; ";
	$produto = $conexao->query($sql_usuario);
	$dados_usuario = $usuario->fetch_array();

?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Novo usuário</h1>

	<?php 
	require "include/isset.php";

	?>

	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="principal.php">Home</a></li>
					<li class="breadcrumb-item"aria-current><a href="usuario.php">Usuário</a></li>
					<li class="breadcrumb-item active" aria-current="page">Novo usuário</li>
				</ol>
			</nav>
		</div>
	</div>
	<form method="post" action="cadastro.php">
		<div class="form-row">
			<div class="col-6">
				<label for="nome" >Nome</label>
				<input class="form-control" type="text" name="nome" id="nome" placeholder="Nome" required>
			</div>
			<div class="col-6">
				<label for="email" >E-mail</label>
				<input class="form-control" type="email" name="email" id="email" placeholder="E-mail" required>
			</div>
			<div class="col-6">
				<label for="senha" >Senha</label>
				<input class="form-control" type="text" name="senha" id="senha" placeholder="Senha" required>
			</div>
			<!-- <div class="col-6">
				<label for="senha" >Confirmar senha</label>
				<input class="form-control" type="text" name="senha" id="senha" placeholder="Confirmar senha" required>
			</div> -->

		</div>
		<p>&nbsp;</p>
		<button type="submit" class="btn btn-primary float-right">Cadastrar</button>
		
	</form>
</div>

<?php include "layout/footer.php"; ?>
<?php include "layout/header.php";
 include "layout/menu.php"; 

	require "include/connection.php";
	$sql_categorias = "SELECT * FROM categoria";
	$categorias = $conexao->query($sql_categorias);
 ?>

<div class="container">
	<p>&nbsp;</p>
	<h1>Novo produto</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="principal.php">Home</a></li>
					<li class="breadcrumb-item"aria-current><a href="produtos.php">Produtos</a></li>
					<li class="breadcrumb-item active" aria-current="page">Novo produto</li>
				</ol>
			</nav>
		</div>
	</div>
	<form method="post" action="salvaproduto.php">
		<div class="form-row">
			<div class="col-6">
				<label for="nome" >Nome</label>
				<input type="text" class="form-control" name="nome" id="nome" placeholder="nome" required>
			</div>
			<div class="col-6">
				<label for="valor" >Valor</label>
				<input type="text" class="form-control" name="valor" id="valor" required>
			</div>
			<div class="col-6">
				<label for="estoque" >Estoque</label>
				<input type="number" class="form-control" name="estoque" id="estoque" required>
			</div>

			<div class="col-6">
				<label for="id_categoria" >Categoria:</label>

				<select name="id_categoria" class="form-control" required>
					<option value="">Escolha a categoria</option>
					<?php while($mercadoria = $categorias->fetch_array(MYSQLI_ASSOC)) { ?>
						<option value="<?php echo $mercadoria['id']; ?>"><?php echo $mercadoria['descricao']; ?></option>
					<?php } ?>

				</select>
			</div>	
		</div>
		
		<button class="btn btn-success" type="submit">Cadastrar</button>

	</form>
</div>

<?php include "layout/footer.php"; ?>
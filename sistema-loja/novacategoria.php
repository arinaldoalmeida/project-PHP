<?php include "layout/header.php"; ?>
<?php include "layout/menu.php"; ?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Nova categoria</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="principal.php">Home</a></li>
					<li class="breadcrumb-item"aria-current><a href="Categoria.php">Categorias</a></li>
					<li class="breadcrumb-item active" aria-current="page">Categoria+</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<form method="post" action="salvar-categoria.php">
				<div class="form-group">
					<label for="descricao">Descrição:</label>
					<input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição" required>
				</div>
				<button class="btn btn-success" type="submit">Salvar</button>
			</form>
		</div>
	</div>
</div>

<?php include "layout/footer.php"; ?>
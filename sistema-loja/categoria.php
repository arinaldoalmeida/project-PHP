<?php 
require "include/connection.php";
$sql_categorias = "SELECT * FROM categoria c
ORDER BY c.id"; 

$categorias = $conexao->query($sql_categorias);
?>

<?php include "layout/header.php"; ?>
<?php include "layout/menu.php"; ?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Categorias</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="principal.php">Home</a></li>
					<li class="breadcrumb-item"><a href="produtos.php">Produtos</a></li>
					<li class="breadcrumb-item"><a href="produtos.php">Clientes</a></li>
					<li class="breadcrumb-item active" aria-current="page">Categorias</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<a href="novacategoria.php" class="btn btn-dark">Categoria+</a>
		<table class="table table-bordered table-striped table-hover table-warning">
			<thead class="thead-dark">
			<tr>
				<th>&#9733;</th>
				<th>Tipo</th>
			</tr>
			<?php while($categoria = $categorias->fetch_array(MYSQLI_ASSOC)) { ?>
				<tr>
					<td><?php echo $categoria["id"]; ?></td>
					<td><?php echo $categoria["descricao"]; ?></td>
				</tr>

			<?php } ?>

		</table>
		
		

	</div>

</div>
	


</div>
<?php include "layout/footer.php"; ?>
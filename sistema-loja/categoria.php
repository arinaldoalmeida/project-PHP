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
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="principal.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Categorias</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<?php 
			require "include/isset.php";
		 ?>
			<div class="">
				<a href="novacategoria.php" class="btn btn-warning mb-2">Categoria+</a>
			</div>
			<p>&nbsp;</p>
		<table class="table table-bordered table-striped table-hover table-warning">
			<thead class="thead-dark">
			<tr>
				<th>&#9733;</th>
				<th>Categoria</th>
				<th>Tipo</th>
				<th>Ações</th>
			</tr>
			<?php while($categoria = $categorias->fetch_array(MYSQLI_ASSOC)) { ?>
				<tr>
					<td><?php echo $categoria["id"]; ?></td>
					<td><?php echo $categoria["descricao"]; ?></td>
					<td><?php echo $categoria["tipo"]; ?></td>
					<td>
						<a href="editar-categoria.php?id=<?php echo $categoria['id']; ?>">
							<i class="fas fa-edit btn btn-warning"></i>
						</a>
						<a href="delete.php?id=<?php echo $categoria['id']; ?>" onclick= "return confirm('Deletar?')">
						<i class="fas fa-trash-alt btn btn-danger"></i>
						</a>
					</td>
				</tr>

			<?php } ?>

		</table>
		
		

	</div>

</div>
	


</div>
<?php include "layout/footer.php"; ?>
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
					<li class="breadcrumb-item active" aria-current="page">Categorias</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<?php if(isset($_GET['msg']) && isset($_GET['tipo_msg'])){?>
			<div class="alert alert-<?php echo $_GET['tipo_msg']; ?> col-12">
				<?php echo $_GET['msg']; ?>
			</div>
			<?php } ?>
			<div class="">
				<a href="novacategoria.php" class="btn btn-dark mb-2">Categoria+</a>
			</div>
			<p>&nbsp;</p>
		<table class="table table-bordered table-striped table-hover table-warning">
			<thead class="thead-dark">
			<tr>
				<th>&#9733;</th>
				<th>Tipo</th>
				<th>Ações</th>
			</tr>
			<?php while($categoria = $categorias->fetch_array(MYSQLI_ASSOC)) { ?>
				<tr>
					<td><?php echo $categoria["id"]; ?></td>
					<td><?php echo $categoria["descricao"]; ?></td>
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
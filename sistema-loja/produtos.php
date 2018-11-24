<?php 
	//$mysqli = new mysqli("localhost", "usuario", "senha", "database");
	//nesta linha realizo a conexão
	$conexao = new mysqli("localhost", "root", "senac", "loja");
	//nesta linha, monto a consulta a ser realizada
	$sql_produtos = "SELECT p.*, c.descricao as categoria 
					 FROM produto p
					 LEFT JOIN  categoria c ON c.id = p.id_categoria
					 ORDER BY p.id";
	//nesta linha, executo a consulta montada
	$produtos = $conexao->query($sql_produtos);
?>

<?php include "layout/header.php"; ?>
<?php include "layout/menu.php"; ?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Produtos</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Produtos</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th>#</th>
				<th>Descrição</th>
				<th>Preço</th>
				<th>Estoque</th>
				<th>Categoria</th>
				<th>Ações</th>
			</tr>

			<?php while($produto = $produtos->fetch_array(MYSQLI_ASSOC)) { //aqui eu starto o loop dos dados da consulta ?>
				<tr>
					<td><?php echo $produto['id']; ?></td>
					<td><?php echo $produto['nome']; ?></td>
					<td>R$ <?php echo number_format($produto['valor'], 2, ',','.'); ?></td>
					<td><?php echo $produto['estoque']; ?></td>
					<td><?php echo $produto['categoria'] ?></td>
					<td></td>
				</tr>

			<?php } //aqui finalizo o loop dos dados ?>

		</table>
		
		

	</div>

</div>

<?php include "layout/footer.php"; ?>
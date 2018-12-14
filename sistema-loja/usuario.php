<?php 
require "include/connection.php";
$sql_usuarios = "SELECT u.id,u.nome,u.email
FROM usuario u
ORDER BY u.id";

$usuarios = $conexao->query($sql_usuarios);
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
					<li class="breadcrumb-item active" aria-current="page">Usuário</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<?php 
		require "include/isset.php";
		 ?>
		<a href="novo-usuario.php" class="btn btn-warning mb-2">Novo usuário</a>
		<table class="table table-bordered table-striped table-hover table-warning">
			<thead class="thead-dark">
				<tr>
					<th>&#9733;</th>
					<th>Nome</th>
					<th>Email</th>
					<th>Ações</th>
				</tr>
				<?php while($usuario = $usuarios->fetch_array(MYSQLI_ASSOC)) { ?>
					<tr>
						<td><?php echo $usuario["id"]; ?></td>
						<td><?php echo $usuario["nome"]; ?></td>
						<td><?php echo $usuario["email"];?></td>
						<td>
							<a href="altera-usuario.php?id=<?php echo $usuario['id']; ?>">
								<i class="fas fa-edit btn btn-warning"></i>
							</a>
							<a href="deleteuser.php?id=<?php echo $usuario['id']; ?>" onclick= "return confirm('Deletar?')">
								<i class="fas fa-trash-alt btn btn-danger"></i>
							</a>
						</td>
					</tr>

				<?php } ?>

			</table>



		</div>

	</div>

	<?php include "layout/footer.php"; ?>
<?php 
require "include/connection.php";
$sql_funcionario = " SELECT f.id,f.nome,f.cpf,f.sexo,f.dt_nacimento,f.email,f.telefone,f.dt_admissao,f.matricula,c.descricao FROM funcionarios as f
LEFT JOIN cargo as c ON c.id = f.id_cargo
ORDER BY f.id";

$funcionarios = $conexao->query($sql_funcionario);
?>


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
					<li class="breadcrumb-item active" aria-current="page">Funcionarios</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<?php 
			require "include/isset.php";
		 ?>
			<div class="">
				<a href="novo_funcionario.php" class="btn btn-warning mb-2">Funcionario+</a>
			</div>
			<p>&nbsp;</p>
		<table class="table table-bordered table-striped table-hover table-warning">
			<thead class="thead-dark">
			<tr>
				<th>&#9733;</th>
				<th>Nome</th>
				<th>CPF</th>
				<th>Sexo</th>
				<th>DT. Nasciento</th>
				<th>E-mail</th>
				<th>Contato</th>
				<th>DT.Admissão</th>
				<th>Matricula</th>
				<th>Cargo</th>
				<th>Ações</th>
			</tr>
			<?php while($dados_funcionario = $funcionarios->fetch_array(MYSQLI_ASSOC)) { ?>
				<tr>
					<td><?php echo $$dados_funcionario["id"]; ?></td>
					<td><?php echo $$dados_funcionario["nome"]; ?></td>
					<td><?php echo $$dados_funcionario["cpf"]; ?></td>
					<td><?php echo $$dados_funcionario["sexo"]; ?></td>
					<td><?php echo $$dados_funcionario["dt_nascimento"]; ?></td>
					<td><?php echo $$dados_funcionario["email"]; ?></td>
					<td><?php echo $$dados_funcionario["dt_admissao"]; ?></td>
					<td><?php echo $$dados_funcionario["matricula"]; ?></td>
					<td><?php echo $$dados_funcionario["descricao"]; ?></td>
					<td>
						<a href="editar-funcionario.php?id=<?php echo $$dados_funcionario['id']; ?>">
							<i class="fas fa-edit btn btn-warning"></i>
						</a>
						<a href="ex-funcionario.php?id=<?php echo $$dados_funcionario['id']; ?>" onclick= "return confirm('Deletar?')">
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
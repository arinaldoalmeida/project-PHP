<?php 
include "layout/header.php";
include "layout/menu.php";
/*require "include/connection.php";*/

$title = "Novo funcionário";
?>
<?php 
	require "include/isset.php";

	?>


<div class="container">
	<p>&nbsp;</p>
	<h1><?php echo $title; ?></h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
					<li class="breadcrumb-item"aria-current><a href="funcionario.php">Funcionários</a></li>
					<li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
				</ol>
			</nav>
		</div>
	</div>
	<form method="post" action="salvar-funcionario.php">
		<div class="form-row">
			<div class="col-md-6">
				<label form="nome">Nome completo</label>
				<input type="text" class="form-control" name="nome" id="nome" placeholder="nome" required >
				
			</div>
			<div class="md-4 mb-3">
				<label for="cpf">CPF</label>
				<input type="text" name="cpf" class="form-control"  id="cpf" placeholder="CPF" required>
			</div>
			
				<div class="col-mb-3">
					<label for="dt_narcimento">Data de Nascimento</label>
					<input type="date" name="dt_narcimento" class="form-control" id="dt_narcimento" placeholder="Data de nascimento" required>
				</div>
				</div>
				<div class="form-row">

				
				<!-- <div class="col-2">
					<label for="sexo">Sexo</label>
					<input type="text" name="sexo" class="form-control" id="sexo" placeholder="Sexo" required>
				</div> -->
				<div class="form-group col-2 mb-3">
					<label for="sexo">Sexo</label>
					<select id="sexo" class="form-control" name="sexo">
						<option selected>Selecione</option>
						<option>M</option>
						<option>F</option>
						<option>O</option>
					</select>
				</div>
				<div class="col-md-5">
					<label for="email">E-mail</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="E-mail do funcioário" required>
				</div>
				
				<div class="col-mb-3">
					<label for="contato">Contato</label>
					<input type="text" name="contato" class="form-control" id="contato" placeholder="Informe o contato" required>
				</div>
			</div>
			<div class="form-row">
			
				
				<div class="col-mb-3">
					<label for="matricula">Matricula</label>
					<input type="text" name="matricula" class="form-control" id="matricula" placeholder="Matricula" required>
				</div>

				<div class="col-mb-3">
					<label for="cargo">Cargo</label>
					<input type="text" name="cargo" class="form-control" id="cargo" placeholder="Cargo do funcionário" required>
				</div>
				<div class="col-mb-3">
					<label for="dt_admissao"> Data de admissão</label>
					<input type="date" name="dt_admissao" class="form-control" id="dt_admissao" placeholder="Data de admissão" required>
				</div>
			</div>
		
		<p>&nbsp;</p>
		<button type="submit" class="btn btn-warning md-2">Cadastrar</button>

		

	</form>
	


</div>


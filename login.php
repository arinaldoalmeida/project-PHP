<?php 
$nome = $_POST['login'];
$senha = $_POST['senha'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="contaner">
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<div class="row">
			<div class="col"></div>
			<div class="col">
				<?php if($senha !=1234){?>
					<div class="card alert alert-dark">
						<div class="card-body text-center">
							<h3 class="text-center">Senha incorreta</h3>
							<a href="javascript:history.back()-1" class="btn btn-dark"> Tente novamente</a>
						</div>
					</div>
					<?php}else{  ?>
						<!--  -->
						<div class="card shadow p-3 mb-5 bg-white rounded">
							<div class="card-body">
								<h3 class="text-center">Bem-vindo <?php echo strtoupper($nome);?></h3>
							</div>
						</div>
					<?php } ?>

					<!--  -->
				</div>
				<div class="col"></div>
			</div>
		</div>



		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
	</html>
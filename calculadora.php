<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>calculadora</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
</head>
<body>
	<div class="container">
		<h1>Calculadora</h1>
		<div class="row">
			<form method="get" action="atividade-get.php">
				<div class="form-group">
					<label for="tipo">Tipo:</label>
					<select name="tipo" class="form-control">
						<option value="">::Opção::</option>
						<option value="soma">Soma</option>
						<option value="sub">Subtração</option>
						<option value="mul">Multiplicação</option>
						<option value="div">Divisão</option>
					</select>
				</div>
				<div class="form-group">
					<label for="num1">Número 1</label>
					<input type="text" name="num1" class="form-control">
				</div>
				<div class="form-group">
					<label for="num1">Número 2</label>
					<input type="text" name="num2" class="form-control">
				</div>
				<input type="submit" value="calcular" class="btn btn-dark">
				
			</form>
			
		</div>
	</div>


	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
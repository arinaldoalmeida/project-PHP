<?php 
$tipo = "sub";
$num1 = rand(1,50);
$num2 = 32;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Calculadora -<?php echo $tipo; ?></title>
</head>
<body>
	<h2>Link de função passando via GET</h2>
	<p>
		 <a href="atividade-get.php?tipo=<?php echo $tipo; ?>&num1=<?php echo $num1;?>&num2=<?php echo $num2; ?>">
		 	Clique para calcular a "<?php echo $tipo; ?>" de <?php echo $num1; ?> e <?php echo $num2; ?>
		 </a>
	</p>

</body>
</html>
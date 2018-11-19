<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$cor=[]; 
	$cor[0]='laranjado';
	$cor[1]='verde';
	$cor[2]='vermelho';
	$cor[3]='azul';
	list($cor2,$cor0,$cor1,$cor3)=$cor;	
	?>
	<p><?php echo $cor[1]; ?></p>
	<p><?php print_r($cor);?></p>
	<p><?php var_dump($cor);?></p>
	<p><?php echo $cor3; ?></p>
	



</body>
</html>

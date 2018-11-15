<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 

$nome="Naldo";
echo $nome;
#comentando uma linha
//comentario em mais uma linha//
/*comentario em bloco
dentro do PHP*/

$nascimento='26/02/1998';
$sobre_nome="Abreu";
#chamando variavel declaradas acima
echo$nascimento;
echo$sobre_nome;

/*separando variaveis
echo$nascimento;
echo'<br/>;
echo$sobre_nome;
echo'<br/>';
*/
 ?>
 <p><?php echo $nome; ?></p>
 <p><?php echo $nascimento; ?></p>
 <p><?php echo $sobre_nome;?></p>
 

</body>
</html>

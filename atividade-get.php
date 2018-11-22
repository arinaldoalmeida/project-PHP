
<?php 
/*Funçãocom três parametros,utilizando o switch para cada tipo.*/

function calculo($tipo,$num1,$num2){
	switch($tipo){
		case "soma":
		$resultado = $num1 + $num2;
		break;
		case "sub":
		$resultado = $num1 - $num2;
		break;
		case "mul":
		$resultado = $num1 * $num2;
		break;
		case "div":
		$resultado = $num1 / $num2;
		break;
	}
	return $resultado;

}

$tipo = $_GET["tipo"] ?? "soma";
$num1 = $_GET["num1"] ?? 0;
$num2 = $_GET["num2"] ?? 0;


echo calculo($tipo,$num1,$num2);

?>
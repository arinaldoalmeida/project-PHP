
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
echo calculo("mul",10,12);

echo "<br>";
echo "<br>";

function calcular($tipo,$num1,$num2){
	if($tipo == "soma"){
		$resultado = $num1 + $num2;
	}else if($tipo =="sub"){
		$resultado = $num1 - $num2;
	}else if($tipo == "mul"){
		$resultado = $num1 * $num2;
	}else if($tipo == "div"){
		$resultado = $num1 / $num2;
	}
	else{
		$resultado = "Tipo informado não é correspondente";
	}
	return $resultado;
}
echo calcular("oi",40,20)
?>
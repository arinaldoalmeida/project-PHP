<?php 
/*if(isset($_GET["nome"])){
	$parametro = $_GET["nome"];
}else{
	 $parametro = '1';*/
}

$parametro = $_GET["nome"] ?? '';
$parametro2 = $_GET["sobrenome"];

echo ucfirst($parametro).'  '.strtoupper($parametro2);
?>

<?php 

class Carro{
		function acelerar(){
			echo "vrum vrum vrum";
		}
}
$uno = new Carro();
$uno->nome = 'Fiat Uno';
$uno->acelerar();
echo $uno->nome;

	
 ?>
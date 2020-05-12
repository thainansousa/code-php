<?php 

	
	$nome = array('Fulano', 'de', 'sobrenome');

	//Usado para separar strings usando um delimitador, no expemplo foi o espaço
	//$nomes = explode(' ', $nome);

	//o print_r é usado quando se quer mostrar valores de um array
	//print_r($nomes);


	//Inclue valores diante de um demarcador
	$nomes = implode(',',$nome);

	print_r($nomes);

	//Mostrar o código html da página
	//echo htmlentities()
 ?>
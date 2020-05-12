<?php 

	$nome = array('Nome1', 'Nome1', 'Nome3');

	/*
	foreach($nome as $key => $value) {
		echo "Na chave $key temos o valor $value";
		echo '<hr/>';
	};

	*ATRIBUIR CHAVE ESPECIFICA PARA CADA VALOR*

		$nome = array('nome_da_chave_que_desejar'=>'Nome1', 'Nome1', 'Nome3');

	*ATIBUIR CHAVE ESPECIFICA PARA CADA VALOR*

		//Essa propriedade ela pecorre todo o array com base na quantidade de chaves que estão sendo apresentadas pelo parâmetro $key. Onde $key é cada indice do array, e $value é o valor de cada $key;
	*/

	$valores = count($nome); //Função do PHP que conta quanto indeces tem dentro de um array. o Array ele é passado dentro dos parenteses.

	echo "Meu array tem $valores valores";

 ?>
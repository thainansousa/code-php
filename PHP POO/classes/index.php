<?php 

	include('classes.php');

	$caneta = new Caneta();

	/*echo "Essa caneta da marca $caneta->tipo_caneta1 tem o bocal da cor $caneta->cor_bocal_azul e escreve da cor $caneta->cor_da_tinta_azul";

	$caneta2 = new Caneta();


	echo "<hr/> Essa caneta da marca $caneta2->tipocaneta tem o bocal da cor $caneta2->cor_bocal_verde e escreve da cor $caneta2->cor_da_tinta_verde";*/

	echo $caneta->removerBocal(); //Chamando metodos
	echo "<hr/>";
	echo $caneta->colocarBocal();

	//Como chamar uma classe do tipo static

	//echo Celular::$marca; //É passado o nome da classe direto, sem instaciar como foi feito no public, onde no static vai ser uma coisa só, não podemos atribuir diferentes valores. É como se fosse uma variavel do tipo constante.

	//echo Celular::ligar(); //Chamado metodo de forma estática

 ?>
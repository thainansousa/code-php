<?php 

	/* final*/ class Filha{ //Final class marca uma classe como final, ou seja faz com que ela só possar ser usada uma vez.

		public function ola(){
			echo "Olá Mundo";
		}
		protected function sair(){ //Protected funciona basicamente como o public
			echo "Estou saindo";
		}
	}

	class Pai extends Filha{ //Extendes é para pegar todos os metodos e atributos de outra classe

		public function hello(){
			echo "Hello Word";
			//echo "<br/>";
			//$this->sair(); //$this faz referência ao próprio objeto declarado acima.
		}

		
	}

	$pai = new Pai();

	echo $pai->hello(); //Ira retornar o texto da função
	//echo $pai->ola(); //Ira retornar um erro pois a classe Filha está marcado como final, nçao sendo possivel recuperar seus valores. Então para ter acesso ao metodo ola() da classe filha precisaria definir ela como class normal.

	//Contudo eu posso instaciar a classe filha sem problemas.
	//$filha = new filha();

 ?>
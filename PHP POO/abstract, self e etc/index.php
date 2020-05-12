<?php 

	abstract class exemplo{ //Class abstract só serve para ser herdada não pode ser instanciada

		public function ola(){
			echo "Hello Word";
		}

		abstract function sair(); 
			//Por ser um metodo abstract terei que definir dentro da minha classe Principal, obs: lembrando que não abri chaves
	}


	class Principal extends exemplo{

		public function sair(){ //Declarando metodo abstract
			echo "<br/> Estou saindo";
		}

		public static function teste(){
			echo " <br/> Testando";
		}

		public function estatico(){
			self::teste(); //É a mesma coisa que fazer Principal::teste();
		}
	}

	$principal = new Principal();

	echo $principal->ola();
	echo $principal->sair();
	echo $principal->estatico();



 ?>
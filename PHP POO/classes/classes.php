<?php 

	class Caneta{

		//Public funciona em todos local do nosso sistema
		//Private só funciona onde foi declarado

		public $cor_bocal_azul = 'Azul';
		public $tipo_caneta1 = 'Compact';
		public $cor_da_tinta_azul = 'Azul Escuro';

		public $cor_bocal_verde = 'Verde';
		public $tipocaneta = 'Compact';
		public $cor_da_tinta_verde = 'Verde Escuro';

		public function removerBocal(){
			echo "Removendo bocal";
		}

		public function colocarBocal(){
			echo "Colocando bocal";
		}

	}

	/*class Celular{

		public static $marca = 'Samsung';

		public static function ligar(){
			echo "Ligar Celular";
		}
	}*/

 ?>
<?php 

	include('interface.php');

	class teste implements Inter1{

		public function ola(){
			echo "Olá Mundo";
		}
	}

	$teste = new teste();
	echo $teste->ola();

 ?>
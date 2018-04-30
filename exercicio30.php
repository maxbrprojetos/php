<?php

	$check = true;

/* Nesta parte	do programa, é possível fazer uma chamada das funções g() e m(). Entretando, as funções f() e n() não podemos ser chamadas pois elas ainda não existem. */

	g();

	//Função definida condicionalmente
	if ($check) {

		function f(){

			echo "f() não existe até que o programa passe por arqui";
		}	
	}
	
	//Função definida dentro de outra função
	function m() {

		echo "m() existe desde o começo do programa";

	function n();

		echo "n() não existe até que m() seja chamada";
	}	
}

m();
//A partir deste ponto podemos chamar f() e m()

function g() {

	echo "g() existe desde o começo do programa";
}


?>


	}
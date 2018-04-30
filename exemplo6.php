<?php

	$a = 1;

	$b = 2;

	function Soma() {

		global $a, $b;  //Referencia as variáveis globais

		$b = $a + $b;

	}


	Soma();

	echo $b;
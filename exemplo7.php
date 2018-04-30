<?php

	$a = 1;

	$b = 2;

	function Soma() {

		//Alterandp o valor da variável global $b
		$$GLOBALS['B'] = $GLOBALS['a'] + $GLOBALS['b'];
	}

	Soma();

	echo $b;
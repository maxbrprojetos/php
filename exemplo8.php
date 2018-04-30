<?php

	function F() {

		static $num = 100;

		return $num--;
	}

	for($i=1; $i<100; $i++)

		echo " ".F'();

	?>
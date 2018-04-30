<?php

	function f($disciplina, $curso = "ADS") {

		echo "Curso:$curso - disciplina:$disciplina";

	}

	echo f("Bando de  Dados");

	//Saída: Curso:ADS - disciplina:Banco de Dados

	echo f("Linguagem de Programação", null);

	//Saída: Curso: - disciplina: Linguagem de Programação

	echo f("Estrutura de Dados", "Automação");

	//Saída: Curso:Automação - disciplina:Estrutura de Dados

?>	

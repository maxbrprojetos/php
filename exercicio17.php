<?php

	$fruta1 = array("a" => "maça", "b" => "banana");

	$fruta2 = array("c" => "laranja", "b" => "melancia", "a" => "morango");

	$fruta3 = $fruta1 + $fruta2;
	//$fruta1 = array("a" => "maça", "b" => "banana", "c" => "laranja");

	var_dump($fruta3);

	$fruta4 = $fruta2 + $fruta1;

	/* $fruta4 = array("c" => "laranja", "b" => "melancia", "a" => "morango"); */

	var_dump($fruta4);

	if($fruta4 === $fruta2)

		echo "Iguais ";

?>	
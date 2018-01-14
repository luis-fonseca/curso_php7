<?php

require_once 'config.php';

$a = 10;

function trocaValor(&$a) {
	// variável é uma coisa, parâmetro de função é outra
	// são guardadas em um espaço de memória diferente
	// escopo, o que acontece na função vale apenas dentro da função
	$a += 50;
	return $a;
}

//echo $a . '<br/>'; // imprime 10
echo trocaValor($a) . '<br/>'; // imprime 60
echo $a . '<br/>'; // imprime 10
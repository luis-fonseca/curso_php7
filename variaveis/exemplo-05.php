<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$nome = 'Luís';

function test1() {
	// explicitamente digo que quero usar uma variavel externa
	// ou seja, $nome aqui e $nome lá fora são as mesmas variáveis
	global $nome; 
	echo $nome;
}

function test2() {
	echo $nome;
}

test1();
test2(); // ao tentar chamar $nome dentro de test3 ocorrerá um erro undefined
<?php

function ola() {
	$argumentos = func_get_args(); // recupera os argumentos passados
	return $argumentos;
}

var_dump(ola('bom dia', 'luis', 10));


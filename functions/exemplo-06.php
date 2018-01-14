<?php

require_once 'config.php';

$pessoa = array(
	'nome' => 'João',
	'idade' => 20
);

// caso queira alterar o valor do índice basta 
// indicar o valor por referência
foreach ($pessoa as $key => &$value) {
	if (gettype($value) === 'integer') {
		$value += 10;
	}
	echo $value . '<br />';
}

print_r($pessoa);
<?php

function salario() {
	return 946.00;
}

$novoSalario = salario() * 3;

// nota: não é possível chamar uma função como uma variável
// Também serve para exibir o valor de uma variável(um pouco exagerado ou necessário em um caso bem particular) isso tudo só é valido dentro de aspas duplas.
// echo "José recebeu 3 salários: {salario() * 3}";

echo "José recebeu 3 salários: {$novoSalario}";

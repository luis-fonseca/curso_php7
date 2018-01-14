<?php

require_once 'config.php';

$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			// inicio diretor comercial
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' => array(
					// inicio gerente vendas
					array(
						'nome_cargo' => 'Gerente de Vendas' 
					)
					// fim gerente vendas
				)
			),
			// fim diretor comercial
			// inicio diretor financeiro
			array(
				'nome_cargo' => 'Diretor Financeiro',
				'subordinados' => array(
					// inicio gerente contas a pagar
					array(
						'nome_cargo' => 'Gerente de Contas a Pagar',
						'subordinados' =>  array(
							// inicio supervisor de pagamento
							array(
								'nome_cargo' => 'Supervisor de Pagamento'
							)
							// fim supervisor de pagamento
						)
					),
					// fim gerente contas a pagar
					// inicio gerente de compras
					array(
						'nome_cargo' => 'Gerente de Contas de Compras',
						'subordinados' =>  array(
							// inicio supervisor de suprimentos
							array(
								'nome_cargo' => 'Supervisor de Suprimentos',
								'subordinados' => array(
									array(
										'nome_cargo' => 'Funcionário'
									)
								)
							)
							// fim supervisor de suprimentos
						)
					)
					// fim gerente de compras

				)
			)
			// fim diretor financeiro
		)
	)
);

//print_r($pessoa);

function exibir($cargos) {

	$html = '<ul>';

	foreach ($cargos as $cargo) {
		$html .= '<li>';
		$html .= $cargo['nome_cargo'];

		// verifica se há subordinados e quantidade
		// pode-se ter uma chave subordinados definida, mas sem valores
		if (isset($cargo['subordinados']) && count($cargo['subordinados'] > 0)) {
			$html .= exibir($cargo['subordinados']);
		}

		$html .= '</li>';
	}


	$html .= '</ul>';

	return $html;
}

echo exibir($hierarquia);
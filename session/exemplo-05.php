<?php

require_once 'config.php';

$status = session_status(); 

switch ($status) {
	case 0:
		echo 'Sessões estão desabilitadas.';
		break;

	case 1:
		echo 'Sessões estão habilitadas, porém nenhuma ativa.';
		break;

	case 2:
		echo 'Sessões estão habilitadas, e alguma está ativa.';
		break;
	
	default:
		echo 'Valor desconhecido.';
		break;
}
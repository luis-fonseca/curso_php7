<?php

// opções do construtor
// http://php.net/manual/pt_BR/function.date.php

// vale notar que o segundo parâmetro é padrão em 01/01/1970
// string date ( string $format [, int $timestamp ] )

// date espera ao menos 1 parâmetro, case sensitive
echo date('d/m/Y H:i:s'); 
echo '<br />';

// ao passar o timestampo é fixado o horário a ser mostrado 
echo time() . '<br/>'; // timestamp atual
echo date('d/m/Y H:i:s', 1515970333); 

// para pegar o timestamp anterior esse basta trabalhar com 
// o valor negativo



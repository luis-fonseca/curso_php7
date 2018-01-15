<?php

echo strtotime('2001-09-11'); // retorna o timestamp
echo '<br>';

echo strtotime('now'); // retorna o timestamp de agora
echo '<br>';

echo strtotime('+1 day'); // retorna o timestamp
echo '<br>';

echo strtotime('+1 week'); // retorna o timestamp
echo '<br>';

//strtotime(time) // permite inserir expressões

echo date('d/m/Y l', 1000177200);

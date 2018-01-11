<?php

//////// Exemplos
$a = 30;
$b = 55;

echo '55 == 30:  ';
var_dump($a == $b); // false, compara valor e não o tipo
echo "<br/>"; 

echo '55 === 30: ';
var_dump($a === $b); // false, compara valor e tipo
echo "<br/>"; 

echo '55 > 30:  ';
var_dump($a > $b); // false
echo "<br/>"; 

echo '55 >= 30:  ';
var_dump($a >= $b); // false
echo "<br/>"; 

echo '55 < 30:  ';
var_dump($a < $b); // true
echo "<br/>"; 

echo '55 <= 30:  ';
var_dump($a <= $b); // true
echo "<br/>"; 

echo '55 != 30';
var_dump($a != $b); // true, compara valor
echo "<br/>"; 

echo '55 !== 30';
var_dump($a !== $b); // true, compara valor e tipo
echo "<br/>"; 


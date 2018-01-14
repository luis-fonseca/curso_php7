<?php

session_id('isvq2costaq4fudmnfengs5mi5');

require_once 'config.php';

session_regenerate_id();
echo session_id();

echo "<br>";
print_r($_SESSION);
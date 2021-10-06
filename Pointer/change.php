<?php
$x = 5;
$y = &$x; // Pass by reference 

$y = 6; // x will change

echo $x;

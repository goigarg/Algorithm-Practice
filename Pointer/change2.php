<?php
$x = 5;

$y = &$x;

$y = 6;

print($x);

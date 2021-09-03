<?php

$A = [1, 5, 10, 20, 40, 80];
$B = [6, 7, 20, 80, 100];
$C = [3, 4, 15, 20, 30, 70, 80, 120];

$match = [];

foreach($A as $i => $a) {
    if(in_array($a, $B) && in_array($a, $C)) {
        array_push($match, $a);
    }
}


print_r($match);
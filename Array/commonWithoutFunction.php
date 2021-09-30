<?php

$A = [4, 9, 5];
$B = [9, 4, 9, 8, 4];

$match = [];

for ($i = 0; $i < count($A); $i++) {
    for ($j = 0; $j < count($B); $j++) {
        if ($A[$i] == $B[$j]) {
            if (!in_array($A[$i], $match)) {
                array_push($match, $A[$i]);
            }
        }
    }
}

foreach ($match as $m) {
    echo $m . ' ';
}

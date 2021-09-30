<?php

$arr = [1,2,3,-2,5];

$sum = [];
$total = 0;
$max = $arr[0];

for($i = 0; $i < count($arr); $i++) {
    for($j = $i; $j < count($arr); $j++) {
        $total = $total + $arr[$j];
    }
    if($max < $total) {
        $max = $total;
    }
    $total = 0;
}

echo $max;
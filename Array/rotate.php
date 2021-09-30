<?php

$arr = [1,2,3,4,5,6];

$start = [];
$end = [];

for($i = 0; $i <count($arr); $i++) {
    if ($i < 2) {
        array_push($start, $arr[$i]);
    }
    else {
        array_push($end, $arr[$i]);
    }
}

$arr = array_merge($end, $start);

print_r($arr);
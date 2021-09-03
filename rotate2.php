<?php

$arr = [1,2,3,4,5,6];

$temp = [];

for($i = 0; $i < 2; $i++){
    array_push($temp, $arr[$i]);
    unset($arr[$i]);
}
for($i = 0; $i < count($temp); $i++){
    array_push($arr, $temp[$i]);
}

foreach($arr as $a ) {
    echo $a . ' ';
}
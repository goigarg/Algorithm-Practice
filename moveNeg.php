<?php

$arr = [-5,-2,-7,2,8,4];

foreach($arr as $i=>$item) {
    if($item > 0) {
        array_push($arr, $item);
        unset($arr[$i]);
    }
}
print_r($arr);
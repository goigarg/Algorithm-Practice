<?php

$arr1 = [1, 3, 5, 7];
$arr2 = [0, 2, 6, 8, 9];

$arr = array_merge($arr1, $arr2);

sort($arr);

print_r($arr);
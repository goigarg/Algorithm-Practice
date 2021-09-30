<?php

$arr = [1, 3, 5, 8, 9, 2, 6, 7, 6, 8, 9];

$count = 0;
$i = 0;

while($i< count($arr)) {
    $i = $i + $arr[$i];
    $count++;
}

echo $count;
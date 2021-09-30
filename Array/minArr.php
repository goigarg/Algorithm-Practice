<?php
$arr = [10,2,4,5,8,3,6];

$min = $arr[0];

foreach($arr as $i=>$item) {
    if($min>$item) {
        $min = $item;
    }
}

echo $min;
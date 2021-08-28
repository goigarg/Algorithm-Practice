<?php

$arr = [1,2,3,4,5,6];

$end = count($arr) - 1;



for($i = 0; $i < count($arr); $i++) {
    if($i > $end-$i) {
        break;
    }

    $temp = $arr[$i];
    $arr[$i] = $arr[$end-$i];
    $arr[$end-$i] = $temp;

}

foreach($arr as $item) {
    echo $item . ' ';
}
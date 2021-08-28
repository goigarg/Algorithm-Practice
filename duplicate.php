<?php

$arr = [1,2,3,2,5,4];

$count = count($arr)-1;

echo duplicate($arr, $count);

function duplicate($arr, $count) {
    for($i=0;$i<$count;$i++) {
        for($j=0;$j<$count;$j++) {
            if($arr[$i] == $arr[$j]) {
                if($i == $j) {
                    //skip
                } else {
                    $duplicate = $arr[$i];
                }  
            }
        }
    }
    return $duplicate;
}
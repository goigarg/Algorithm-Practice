<?php
$arr = [5,1,2,8,4,6,3];

function findLargest($arr, $max=0) {
    foreach($arr as $item) {
        if($max < $item) {
            $max = $item;
        }
    }
    return $max;
}

$max = findLargest($arr);

$largest = array_search($max,$arr);
unset($arr[$largest]);

echo $max = findLargest($arr);


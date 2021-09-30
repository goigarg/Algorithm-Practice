<?php

$sum = 6;

$arr = [1,3,5,7,1];

for($i = 0; $i < count($arr); $i++) {
    for($j = $i+1; $j < count($arr);$j++) {
        $currentSum = $arr[$i] + $arr[$j];
        if($currentSum == 6) {
                echo ' i = ' . $i . ' j = ' . $j;
                echo '<br>';
                echo $arr[$i] . ' ' . $arr[$j];
                echo '<br>';
        }
    }
}
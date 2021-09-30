<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    $sum = 0;
    $minSum = 0;
    $maxSum = 0;
    for($i=0;$i<count($arr);$i++) {
        foreach($arr as $a) {
            $sum = $sum + $a;
        }
        
        if($minSum == 0) {
            $minSum = $sum;
        }
        
        $sum = $sum - $arr[$i];
        
        if($minSum>$sum) {
            $minSum = $sum;
        }
        
        if($maxSum<$sum) {
            $maxSum = $sum;
        }
        $sum = 0;
    }
    echo $minSum . ' ' . $maxSum;
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

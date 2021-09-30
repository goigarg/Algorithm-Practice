<?php
$arr = [-4, 3, -9, 0, 4, 1];

$len = count($arr);
$val = [0, 0, 0];
    foreach($arr as $i=>$a) {
        if($a>0) 
            $val[0]++;
        elseif($a<0) 
            $val[1]++;
        else 
            $val[2]++;
    }

    foreach($val as $v) {
        echo $v/$len . '<br>';
    }
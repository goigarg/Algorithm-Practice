<?php

$num = 5;
//5*4*3*2*1
$factorial = 1;
while($num>1) {
    $factorial = $factorial * $num;
    $num--;
}

echo $factorial;
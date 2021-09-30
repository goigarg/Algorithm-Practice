<?php
//Reverse Array in php

$arr = [0,8,4,7,3,6,5];
$revArr = [];

for($i = count($arr)-1; $i >= 0; $i--) {
    
    array_push($revArr, $arr[$i]);

}
echo json_encode($revArr);
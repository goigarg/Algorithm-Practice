<?php
$grades = [74,67,38,33];

for($i = 0; $i <count($grades); $i++) {
    if($grades[$i]<38) {
        //do nothing
    }
    elseif(($grades[$i]+1) % 5 == 0)  {
        $grades[$i]++;
    } elseif (($grades[$i]+2) % 5 == 0) {
        $grades[$i] += 2;
    }
}
print_r($grades);
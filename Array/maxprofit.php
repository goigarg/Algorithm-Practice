<?php

$price = [7,1,5,3,6,4];
$total = count($price) - 1;

$profit = 0;

for ($i = 0; $i <$total; $i++) {
    for($j = $i+1; $j <$total; $j++) {
        if($price[$i]<$price[$j]) {
            $price[$i] . " j= " . $price[$j];
            $currentProfit = $price[$j]-$price[$i];
            if($profit < $currentProfit) {
                $profit = $currentProfit;
            }
        }
    }
}

echo 'Max Profit = ' . $profit;
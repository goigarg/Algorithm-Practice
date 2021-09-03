<?php

$s = '12:05:45PM';

$time = explode(':', $s);
if(strpos($time[2], 'PM')) {
    if($time[0] != 12) {
        $time[0] = $time[0] + 12;
    }
    $time[2] = chop($time[2], 'PM');
} else {
    if($time[0] == 12) {
        $time[0] = '00';
    }
    $time[2] = chop($time[2], 'AM');
}
echo implode(':', $time);
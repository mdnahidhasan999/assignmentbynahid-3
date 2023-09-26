<?php
$numbers = range(1, 10);
function removeEven($arr){
    $res = array();
    foreach ($arr as $value) {
        if ($value % 2 !=0) {
            $res[] = $value;
        }
    }
    return $res;
}
$removeEvenNUM = removeEven($numbers);
print_r($removeEvenNUM);
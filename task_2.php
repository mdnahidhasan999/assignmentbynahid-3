<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function removeNumbers($numbers) {
    $filNumbers = array_filter($numbers, function($value) {
        return $value % 2 != 0;
    });

    print_r($filNumbers);
}
removeNumbers($numbers);


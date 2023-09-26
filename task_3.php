<?php
$grades = array (85, 92,78,88,95);
function sortGrades($sort){
    rsort($sort);
    return $sort;
}
$sortedGrades =  sortGrades($grades);
print_r($sortedGrades); 

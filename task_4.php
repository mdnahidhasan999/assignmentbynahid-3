<?php
$studentGrades = array(
    array("Math" => 85, "English" => 92, "Science" => 78),
    array("Math" => 88, "English" => 95, "Science" => 90),
    array("Math" => 75, "English" => 82, "Science" => 70)
);

function printAverageGrades($gradesArray) {
    foreach ($gradesArray as $index => $student) {
        $total = array_sum($student);
        $count = count($student);
        $average = $total / $count;
        
        echo "Student " . ($index + 1) . " - Average Grade: " . number_format($average, 2) . "\n";
    }
}
printAverageGrades($studentGrades);


<?php
$studentGrades = array(
    array('Math' => 90, 'English' => 85, 'Science' => 92),
    array('Math' => 78, 'English' => 89, 'Science' => 88),
    array('Math' => 95, 'English' => 92, 'Science' => 89)
);

function calculateGrades($gradesArray) {
    foreach ($gradesArray as $index => $grades) {
        $averageGrade = array_sum($grades) / count($grades);

        $letterGrade = getLetterGrade($averageGrade);

        echo "Student " . ($index + 1) . " - Average Grade: " . $averageGrade . ", Letter Grade: " . $letterGrade . PHP_EOL;
    }
}

function getLetterGrade($averageGrade) {
    if ($averageGrade >= 90) {
        return 'A+';
    } elseif ($averageGrade >= 80) {
        return 'A';
    } elseif ($averageGrade >= 70) {
        return 'B';
    } else {
        return 'C'; 
    }
}
calculateGrades($studentGrades);



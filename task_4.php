<?php

$studentGrades = [
    ["Math" => 80, "English" => 85, "Science" => 91],
    ["Math" => 86, "English" => 90, "Science" => 94],
    ["Math" => 85, "English" => 90, "Science" => 80]
];

function gradeAverage($studentGrades){
    foreach ($studentGrades as $studentGrade){
        $avergaeGrade = array_sum($studentGrade)/count($studentGrade);
        echo "Average Grade: $avergaeGrade \n";
    }
}

gradeAverage($studentGrades);
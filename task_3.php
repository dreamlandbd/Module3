<?php

$grades = [85,92,78,88,95];

function gradeSort($grades){
    arsort($grades);    
    return $grades;
}

print_r(gradeSort($grades));
<?php

$numbers = [1,2,3,4,5,6,7,8,9,10];

function isNotEven($number){
    return $number %2 != 0;
}

print_r(array_filter($numbers,"isNotEven"));


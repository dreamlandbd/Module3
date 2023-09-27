<?php
function generatePassword(){
    $lowercase_letters = "abcdefghijklmnopqrstuvwxyz";
    $total_lowercase_letters = strlen($lowercase_letters);
    $uppercase_letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $total_uppercase_letters = strlen($uppercase_letters);
    $special_characters = "!@#$%^&*()_+";
    $total_special_characters = strlen($special_characters);
    $numbers = "1234567890";
    $total_numbers = strlen($numbers);
    $password = '';

    for($i=0;$i<3;$i++){
        $lowercase_random_index = mt_rand(0,$total_lowercase_letters-1);
        $password .= $lowercase_letters[$lowercase_random_index];

        $uppercase_random_index = mt_rand(0,$total_uppercase_letters-1);
        $password .= $uppercase_letters[$uppercase_random_index];

        $special_characters_random_index = mt_rand(0,$total_special_characters-1);
        $password .= $special_characters[$special_characters_random_index];

        $numbers_random_index = mt_rand(0,$total_numbers-1);
        $password .= $numbers[$numbers_random_index];
    }

    echo "$password\n";
}

generatePassword(); 
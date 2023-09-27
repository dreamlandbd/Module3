<?php

$text = "The quick brown fox jumps over the lazy dog.";

function stringModification($text){
    $lowercasetext = strtolower($text);
    $modifiedstring = str_replace("brown","red",$lowercasetext);
    
    return $modifiedstring;
}

$modified_string = stringModification($text);
echo "$modified_string\n";
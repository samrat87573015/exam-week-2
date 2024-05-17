<?php 

function countVowels($string) {
    $count = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $string = strtolower($string);
    
    for($i = 0; $i < strlen($string); $i++) {
        if(in_array($string[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}


$strings = ["Hello", "World", "PHP", "Programming"];

foreach($strings as $string) {
    $vowelsCount = countVowels($string);
    $reverseString = strrev($string);
    echo "Original String: $string, Vowel Count: $vowelsCount, Reversed String: $reverseString <br>";
}
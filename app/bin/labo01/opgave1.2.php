<?php

/**
 * Exercise 1.2
 * @author Sander Spaas sander.spaas@student.odisee.be
 */

$sentence = $argv[1];
$sentence = strtolower($sentence);
$sentence = preg_replace("#[[:punct:]]#", "", $sentence);
$words = explode(' ', $sentence);
$words = array_filter($words);

$frequencies = [];


foreach ($words as $word) {
    if(!array_Key_exists($word, $frequencies)){
        $frequencies[$word] = 0;
    }

    $frequencies[$word]++;
}
print_r($words); 
print_r($frequencies); 

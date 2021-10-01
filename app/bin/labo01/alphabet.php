<?php
/**
 * Excercise 1.1 - Alphabet
 * @author Sander Spaas <sander.spaas@student.odisee.be>
 */

 $alphabet = [];

 for ($i = 1; $i < 27; $i++) {
     echo $i . PHP_EOL;
     $alphabet[] = chr($i + 96);
 }

 //1.1 output the alphabet 
 print_r($alphabet);

 //1.2 echo keys with value 
 foreach ($alphabet as $key => $letter) {
     echo ($key + 1) . $letter;
 }

 //1.3 concatenate all letters of the alphabet 
print_r(implode('-',$alphabet));

 //1.4 output lenght, shift first letter and output lenght again
echo count($alphabet) . PHP_EOL;
array_shift($alphabet);
echo count($alphabet) . PHP_EOL;

//1.5 
$cities = [
    9000 => 'Gent',
    1000 => 'Brussel',
    2000 => 'Antwerpen',
    8500 => 'Kortrijk',
    3000 => 'Leuven',
    3500 => 'Hasselt'
];

$zips = array_keys($cities);
print_r($zips);
var_dump(array_sum($zips));

//1.8 sorting
asort($cities);

print_r($cities);
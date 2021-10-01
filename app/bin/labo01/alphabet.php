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

 print_r($alphabet);
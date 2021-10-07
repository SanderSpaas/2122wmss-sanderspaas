<?php

$parameter = $argv[1]; // Input van console, zorg dat je " " gebruikt voor de zin.
function isPangram($input){
    $alphabet = array(); // nieuwe array aanmaken
    for ($i = 97; $i <= 122; $i++) {
        $alphabet[] = chr($i); //array vullen met alfabet
    }

    $splitWoord = str_split($input); // Zet de string om naar een array
    foreach ($splitWoord as $letter) { // Verdelen in letters

        if (ctype_alpha($letter)) { // Kijken of het een alfabetische letter is en geen leesttekens / nummers

            if (ctype_upper($letter)) { // kijken of er hoofdletter is en dan veranderen naar kleine letter
                $letter = strtolower($letter);
            }

            $key = array_search($letter, $alphabet); // zoekt voor de letter in de alphabet
            if ($key !== false) { // de gevonden letter uit de alphabet halen
                unset($alphabet[$key]);
            }
        }
    }
    if (!$alphabet) {
        echo ('De zin is een pangram' . PHP_EOL);
    } else {
        echo 'De zin is geen pangram, deze letter onderbreken : ';
        foreach ($alphabet as $letter) {
            echo $letter . ' ';
        }
        echo PHP_EOL;
    }
}
isPangram($parameter);
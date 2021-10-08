<?php

$parameter = $argv[1];
function isPangram($input)
{
    $alphabet = array();
    for ($i = 97; $i <= 122; $i++) {
        $alphabet[] = chr($i); //array gaan vullen
    }

    $splitword = str_split($input); // string => array
    foreach ($splitword as $letter) { // gaan splitsen

        if (ctype_alpha($letter)) { // checken of letter

            if (ctype_upper($letter)) { // naar kleine letters gaan zetten
                $letter = strtolower($letter);
            }

            $key = array_search($letter, $alphabet); // gaan kijken in alfabet
            if ($key !== false) { // letters er uit halen
                unset($alphabet[$key]);
            }
        }
    }
    if (!$alphabet) {
        return true;
    } else {
        foreach ($alphabet as $letter) {
            echo $letter . ' ';
            echo PHP_EOL;
        }
        return false;
    }
}


if (isPangram($parameter) === true) {
    echo "dit woord is een pangram";
} else {
    echo "dit woord is geen pangram";
};

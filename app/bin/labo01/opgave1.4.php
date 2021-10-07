<?php

$dateString = $argv[1]; // eerste argument gaan vastpakken

try{
    $dateTimeObject = new \DateTime($dateString); // nieuw object aanmaken
    $newFormat = $dateTimeObject->format('d-m-Y'); // datum gaan converteren naar gewenst formaat
    $timestamp = $dateTimeObject->getTimestamp();// timestamp
    $timezone = $dateTimeObject->getTimeZone()->getName();// Timezone
    $day = date('D',$timestamp);// Dag in tekst
    $time = $dateTimeObject->format('h:i:s A'); // omzetten naar 12 uurstelsel
    $full = date('d F, Y', strtotime($dateString)); // omzetten naar vol geschreven maand

    echo 'New format: ' .$newFormat .PHP_EOL; 
    echo 'Timestamp: '. $timestamp . PHP_EOL; 
    echo 'Timezone: '. $timezone . PHP_EOL;
    echo 'Day: '. $day . PHP_EOL;
    echo 'Without "-": ' .  str_replace("-", "", $newFormat) . PHP_EOL;
    echo 'Time: ' . $time . PHP_EOL;
    echo 'Full: ' . $full . PHP_EOL;



}catch(Exception $e){ // error catchen
    echo $dateString . ' is not a valid date.' . PHP_EOL;
}

die();